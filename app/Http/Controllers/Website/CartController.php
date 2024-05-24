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
            $product_details = Product::where('product_id', $request->product_id)->first();
            if($product_details->is_stock_available == 0){
                return $this->error('Oops! Product out of stock', null, 400);
            }else{

                Cart::create([
                    'product_id' => $request->product_id
                ]);

                return $this->success('Great! Product added to cart successfully', null, 200);
            }
        }catch(\Exception $e){
            return $this->error('Oops! Something went wrong', null, 500);
        }
    }
}

