<?php

use App\Http\Controllers\Website\AboutController;
use App\Http\Controllers\Website\AccountController;
use App\Http\Controllers\Website\Auth\AuthenticationController;
use App\Http\Controllers\Website\BlogController;
use App\Http\Controllers\Website\ContactController;
use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\Website\ShopController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('website.home.home');
});

Route::group(['prefix' => 'website'], function(){


    Route::group(['prefix' => 'nav'], function(){
        Route::get('home', [HomeController::class, 'index'])->name('website.nav.home.index');
        Route::get('about', [AboutController::class, 'index'])->name('website.nav.about.index');
        Route::get('contact', [ContactController::class, 'index'])->name('website.nav.contact.index');
        Route::get('shop', [ShopController::class, 'index'])->name('website.nav.shop.index');
        Route::get('blog', [BlogController::class, 'index'])->name('website.nav.blog.index');
    });

    Route::group(['prefix' => 'account'], function(){
        Route::get('signin-signup', [AccountController::class, 'signinSignup'])->name('website.account.signin.signup.page');
        Route::get('my-account', [AccountController::class, 'myAccount'])->name('website.account.myaccount');
        Route::get('my-orders', [AccountController::class, 'myOrders'])->name('website.account.myorders');
        Route::get('my-address', [AccountController::class, 'myAddress'])->name('website.account.myAddress');
        Route::get('details', [AccountController::class, 'accountDetails'])->name('website.account.details');
        Route::get('wishlist', [AccountController::class, 'wishlist'])->name('website.account.wishlist');
        Route::get('logout', [AccountController::class, 'logout'])->name('website.account.logout');
    });

    Route::group(['prefix' => 'auth'], function(){
        Route::post('signup', [AuthenticationController::class, 'signup'])->name('website.auth.signup');
        Route::post('login', [AuthenticationController::class, 'login'])->name('website.auth.login');
        
    });

    Route::group(['prefix' => 'shop'], function(){
        Route::get('{main_category}/{sub_category}', [ShopController::class, 'getProduct' ])->name('website.get.product.by.category');
    });
});

