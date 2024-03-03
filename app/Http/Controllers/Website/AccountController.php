<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function signinSignup(){
        return view('website.login-signup.login-signup');
    }
}
