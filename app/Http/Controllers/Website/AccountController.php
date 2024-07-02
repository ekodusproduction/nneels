<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\ShippingAdress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AccountController extends Controller
{
    public function signinSignup(){
        return view('website.login-signup.login-signup');
    }

    public function myAccount(){
        return view('website.account.myaccount');
    }

    public function myOrders(){
        return view('website.account.orders.myorders');
    }

    public function myAddress(){
        $shipping_address = ShippingAdress::where('user_id', Auth::user()->id)->first();
        return view('website.account.address.myaddress')->with(['shipping_address' => $shipping_address]);
    }

    public function accountDetails(){
        return view('website.account.details.details');
    }

    public function wishlist(){
        return view('website.account.wishlist.wishlist');
    }

    public function logout(){
        Auth::logout();
        Session::flush();
        return redirect('/');
    }
}
