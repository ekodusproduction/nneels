<?php

use App\Http\Controllers\Website\AboutController;
use App\Http\Controllers\Website\AccountController;
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
    });

    Route::group(['prefix' => 'account'], function(){
        Route::get('signin-signup', [AccountController::class, 'signinSignup'])->name('website.account.signin.signup.page');
    });
});

