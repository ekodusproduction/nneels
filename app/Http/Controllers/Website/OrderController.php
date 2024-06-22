<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use App\Models\ShippingAdress;
use App\Traits\AjaxResponser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Stripe\Webhook;
use App\Models\Order;
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
            try{
                $check_user_address_exists = ShippingAdress::where('user_id', Auth::user()->id)->exists();
                $cartItems = Cart::with('product')->where('user_id', Auth::user()->id)->get();

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
                        'email' => $request->email
                    ]);
                }
                
                    \Stripe\Stripe::setApiKey(env('STRIPE_SECRET_KEY'));
                    // header('Content-Type: application/json');

                    $YOUR_DOMAIN = 'http://localhost:8000';

                    $line_items = [];

                    foreach ($cartItems as $item) {
                        
                        $line_items[] = [
                            'price_data' => [
                                'currency' => 'usd',
                                'product_data' => [
                                    'name' => $item->product->name,
                                ],
                                'unit_amount' =>  $request->total_amount, // Amount in cents
                            ],
                            'quantity' => 1,
                        ];
                    }

                    $checkout_session = \Stripe\Checkout\Session::create([
                        'customer_email' => Auth::user()->email, // Add customer email address here
                        'line_items' => $line_items,
                         // Add customer name here
                        
                        // 'line_items' => [[
                        //     # Provide the exact Price ID (e.g. pr_1234) of the product you want to sell
                        //     'price_data' => [
                        //         'product_data' => [
                        //             'name' => 'My Products'
                        //         ],
                        //         'currency' => 'usd',
                        //         'unit_amount' => $request->total_amount,// Replace with actual amount in cents (e.g., $32.00)
                        //     ],
                        //     'quantity' => 1,
                        // ]],
                        'mode' => 'payment',
                        'success_url' => $YOUR_DOMAIN . '/website/order/success-payment',
                        'cancel_url' => $YOUR_DOMAIN . '/website/order/cancel-payment',
                        
                    ]);

                    // header("HTTP/1.1 303 See Other");
                    // header("Location: " . $checkout_session->url);
                
                
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
        // Retrieve customer details
        $customer_email = $session->customer_details->email;

        dd($session);

        // Find the order by session ID or another identifier
        // $order = Order::where('stripe_session_id', $session->id)->first();

        // if ($order) {
        //     // Update order status to 'paid'
        //     $order->status = 'paid';
        //     // Save customer details
        //     $order->customer_email = $customer_email;
        //     // You can save other details as needed
        //     $order->save();
        // }

        // Send a confirmation email to the customer, etc.
    }
}
