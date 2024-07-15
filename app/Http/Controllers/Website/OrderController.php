<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use App\Models\ShippingAdress;
use App\Traits\AjaxResponser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Stripe\Webhook;
use App\Models\Order;
use Illuminate\Support\Str;
use Stripe\Event;

class OrderController extends Controller
{
    use AjaxResponser;

    public function getOrderConfirmationPage(){
        return view('website.shop.shop-order-confirmation');
    }

    public function saveBillingAddress(Request $request){
        $validator = Validator::make($request->all(),[
            'fullname' => 'required',
            'country' => 'required',
            'street_address_1' => 'required',
            'town_or_city' => 'required',
            'zip_code' => 'required',
            'phone' => 'required',
            'email' => 'required'
        ]);

        if($validator->fails()){
            return $this->error('Oops! '.$validator->errors()->first(), null, 400);
        }else{
            if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on'){
                $domain_link = "https";
            }else{
                $domain_link = "http";
            } 
            $domain_link .= "://";
            $domain_link .= $_SERVER['HTTP_HOST'];

            try{
                $check_user_address_exists = ShippingAdress::where('user_id', Auth::user()->id)->exists();
                $cartItems = Cart::with('product')->where('user_id', Auth::user()->id)->get();
                
                $total_cart_amount = 0;
                $shipping_rate = 0;

                if(!$check_user_address_exists){
                    ShippingAdress::create([
                        'user_id' => Auth::user()->id,
                        'fullname' => $request->fullname,            
                        'company_name' => $request->company_name,
                        'country' => $request->country,
                        'address_1' => $request->street_address_1,
                        'address_2' => $request->street_address_2,
                        'town_or_city' => $request->town_or_city,
                        'zip_code' => $request->zip_code,
                        'province' => $request->province,
                        'phone' => $request->phone,
                        'email' => Auth::user()->email
                    ]);
                }
                
                    \Stripe\Stripe::setApiKey(env('STRIPE_SECRET_KEY'));

                    $YOUR_DOMAIN = $domain_link;

                    $line_items = [];

                    foreach ($cartItems as $item) {
                        
                        $line_items[] = [
                            'price_data' => [
                                'currency' => 'usd',
                                'product_data' => [
                                    'name' => $item->product->name,
                                ],
                                'unit_amount' =>   ($item->product->sale_price) * 100, // Amount in cents
                            ],
                            'quantity' => $item->items_qty,
                        ];

                        $total_cart_amount = $total_cart_amount + ($item->items_qty * $item->product->sale_price);

                    }

                    $shipping_address = ShippingAdress::where('user_id', Auth::user()->id)->first('country');
                    if($shipping_address->country == 'United States'){
                        if($total_cart_amount > 195){
                            $shipping_rate = 0;
                        }else if( $total_cart_amount <= 195 && $total_cart_amount >= 75){
                            $shipping_rate = 14;
                        }else if($total_cart_amount < 75){
                            $shipping_rate = 12;
                        }
                    }else{
                        if( $total_cart_amount <= 195 && $total_cart_amount >= 75){
                            $shipping_rate = 14;
                        }

                        if($total_cart_amount < 75){
                            $shipping_rate = 12;
                        }
                    }

                    $line_items[] = [
                        'price_data' => [
                            'currency' => 'usd',
                            'product_data' => [
                                'name' => 'Shipping Charge',
                            ],
                            'unit_amount' => $shipping_rate * 100, // $19 in cents
                        ],
                        'quantity' => 1,
                    ];

                    $checkout_session = \Stripe\Checkout\Session::create([
                        'customer_email' => Auth::user()->email, // Add customer email address here
                        'line_items' => $line_items,
                        'mode' => 'payment',
                        'success_url' => $YOUR_DOMAIN . '/website/order/success-payment',
                        'cancel_url' => $YOUR_DOMAIN . '/website/order/cancel-payment',
                        
                    ]);

                    $order_id = Str::uuid();
                    foreach($cartItems as $item){
                        $is_order_already_created = Order::where('product_id', $item->product_id)->where('user_id', Auth::user()->id)->where('payment_status', 'unpaid')->exists();
                        if(!$is_order_already_created){
                            Order::create([
                                'order_id' => $order_id,
                                'user_id' => Auth::user()->id,
                                'customer_email' => Auth::user()->email,
                                'product_id' => $item->product_id,
                                'product_qty' => $item->items_qty,
                                'checkout_session_id' => $checkout_session->id,
                                'amount' => $item->product->sale_price,
                                'currency' => $checkout_session->currency,
                                'payment_status' => $checkout_session->payment_status
                            ]);
                        }
                        
                    }
                    

                return $this->success('Great! Address saved successfully', $checkout_session, 200);
            }catch(\Exception $e){
                return $this->error('Oops! Something went wrong', $e->getMessage(), 500);
            }
        }
    }

    public function handleWebhook(Request $request){
        try{
            
            $endpoint_secret = env('STRIPE_WEBHOOK_SECRET');
        
            $payload = $request->getContent();
            $sig_header = $request->header('Stripe-Signature');

            try {
                $event = Webhook::constructEvent($payload, $sig_header, $endpoint_secret);
            } catch (\UnexpectedValueException $e) {
                // Invalid payload
                return response()->json(['error' => 'Invalid payload'], 400);
            } catch (\Stripe\Exception\SignatureVerificationException $e) {
                // Invalid signature
                return response()->json(['error' => 'Invalid signature'], 400);
            }

            switch ($event->type) {
                case 'checkout.session.completed':
                    $session = $event->data->object;
                    // Fulfill the purchase...
                    $this->handleCheckoutSessionCompleted($session);
                    break;
                // ... handle other event types
                default:
                    return response()->json(['error' => 'Unhandled event type'], 400);
            }
    
            return response()->json(['status' => 'success'], 200);

        }catch(\Exception $e){
            return $this->error('Oops! Something went wrong', null, 500);
        }


        
    }

    protected function handleCheckoutSessionCompleted($session)
    {
        try{
            $order = Order::where('checkout_session_id', $session->id)->get();
            if(!empty($order)){
                foreach($order as $item){
                    DB::beginTransaction();

                    Order::where('checkout_session_id', $session->id)->update([
                        'payment_status' => 'paid'
                    ]);

                    Cart::where('product_id', $item->product_id)->delete();

                    DB::commit();
                }
            }
        }catch(\Exception $e){
            DB::rollBack();
            Log::info('Something went wrong while updating payment status');
        }
    }
}
