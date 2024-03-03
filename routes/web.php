<?php

use App\Http\Controllers\Website\AccountController;
use App\Http\Controllers\Website\HomeController;
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
    Route::group(['prefix' => 'home'], function(){
        Route::get('', [HomeController::class, 'index'])->name('website.home.index');
    });

    Route::group(['prefix' => 'account'], function(){
        Route::get('signin-signup', [AccountController::class, 'signinSignup'])->name('website.account.signin.signup.page');
    });
});

