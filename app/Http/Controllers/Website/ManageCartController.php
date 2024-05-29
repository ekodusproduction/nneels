<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use App\Traits\AjaxResponser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

}
