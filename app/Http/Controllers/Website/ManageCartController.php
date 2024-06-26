<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use App\Traits\AjaxResponser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ManageCartController extends Controller
{
    use AjaxResponser;
    public function getCartItems(){
        try{
            $cart_items = Cart::with('product')->where('status', 1)->orderBy('created_at', 'DESC')->get();
            return view('website.shop.shop-cart')->with(['cart_items' => $cart_items]);
        }catch(\Exception $e){
            echo 'Oops! This page has encountered an error';
        }
    }

    public function addToCart(Request $request){

        try{
            $check_product_exists_in_cart = Cart::where('product_id', $request->product_id)->where('status', 1)->exists();
            if(!$check_product_exists_in_cart){
                $product_details = Product::where('product_id', $request->product_id)->first();
                if($product_details->is_stock_available == 0){
                    return $this->error('Oops! Product out of stock', null, 400);
                }else{
    
                    Cart::create([
                        'product_id' => $request->product_id,
                        'items_qty' => $request->cart_item_qty,
                        'user_id' => Auth::user()->id
                    ]);
    
                    return $this->success('Great! Product added to cart successfully', null, 200);
                }
            }else{
                return $this->error('Oops! Product already exists inside cart', null, 400);
            }
            
        }catch(\Exception $e){
            return $this->error('Oops! Something went wrong'.$e->getMessage(), null, 500);
        }
    }

    public function removeCartItem(Request $request){
        $validator = Validator::make($request->all(), [
            'product_id' => 'required'
        ]);

        if($validator->fails()){
            return $this->error('Oops! Failed to remove item', null, 400);
        }else{
            try{
                Cart::where('product_id', $request->product_id)->where('user_id', Auth::user()->id)->delete();
                return $this->success('Great! Item removed successfully', null, 200);
            }catch(\Exception $e){
                return $this->error('Oops! Something went wrong', null, 500);
            }
        }
    }

    public function updateCartItems(Request $request){
        $validator = Validator::make($request->all(), [
            'product_id' => 'required',
            'quantity' => 'required'
        ]);

        if($validator->fails()){
            return $this->error('Oops! '.$validator->errors()->first(), null, 400);
        }else{
            try{
                Cart::where('product_id', $request->product_id)->update([
                    'items_qty' => $request->quantity
                ]);
    
                return $this->success('Great! Quantity count updated.', null, 200);
            }catch(\Exception $e){
                return $this->error('Oops! Something went wrong.', null, 500);
            }
            
        }
    }

}
