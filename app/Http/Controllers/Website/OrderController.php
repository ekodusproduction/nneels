<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function getOrderConfirmationPage(){
        return view('website.shop.shop-order-confirmation');
    }
}
