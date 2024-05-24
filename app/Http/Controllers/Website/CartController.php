<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use App\Traits\AjaxResponser;
use Illuminate\Http\Request;

class CartController extends Controller
{
    use AjaxResponser;
    public function getCartPage(){
        return view('website.shop.shop-cart');
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
                        'product_id' => $request->product_id
                    ]);
    
                    return $this->success('Great! Product added to cart successfully', null, 200);
                }
            }else{
                return $this->error('Oops! Product already exists inside cart', null, 400);
            }
            
        }catch(\Exception $e){
            return $this->error('Oops! Something went wrong', null, 500);
        }
    }
}

