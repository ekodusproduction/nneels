<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function getCheckoutPage(){
        $cart_details = Cart::with('product')->where('user_id', Auth::user()->id)->where('status', 1)->get();
        return view('website.shop.shop-checkout')->with(['cart_details' => $cart_details]);
    }
}
