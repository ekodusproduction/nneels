<?php

use App\Http\Controllers\Admin\Auth\AuthenticationController;
use App\Http\Controllers\Admin\Banner\BannerController;
use App\Http\Controllers\Admin\Dashboard\DashboardController;
use App\Http\Controllers\Admin\Product\CategoryController;
use App\Http\Controllers\Admin\Product\ItemController;
use App\Http\Controllers\Admin\Product\ProductController;
use App\Http\Controllers\Admin\Product\SubCategoryController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['prefix' => 'auth'], function(){

    Route::match(['GET', 'POST'], 'login', [AuthenticationController::class, 'login'])->name('admin.login');
});



Route::group(['middleware' => 'auth'], function(){

    Route::group(['prefix' => 'banner'], function(){
        Route::get('', [BannerController::class, 'index'])->name('admin.get.banner');
        Route::post('create', [BannerController::class, 'createBanner'])->name('admin.create.banner');
        Route::get('all', [BannerController::class, 'allBanners'])->name('admin.get.all.banners');
    });

    Route::group(['prefix' => 'dashboard'], function(){
        Route::get('', [DashboardController::class, 'index'])->name('admin.dashboard');
    });
    Route::group(['prefix' => 'products'], function(){
        Route::group(['prefix' => 'category'], function(){

            Route::group(['prefix' => 'main-category'], function(){
                Route::get('', [CategoryController::class, 'index'])->name('admin.category');
                Route::post('create', [CategoryController::class, 'createCategory'])->name('admin.create.category');
                Route::match(['get','post'], 'top-category', [CategoryController::class, 'topCategory'])->name('admin.top.category');
            });
            
            Route::group(['prefix' => 'sub-category'], function(){
                Route::post('create', [SubCategoryController::class, 'createSubCategory'])->name('admin.create.sub.category');
                Route::get('fetch', [SubCategoryController::class, 'fetchSubCategory'])->name('admin.fetch.sub.category');
            });
        });
        Route::group(['prefix' => 'create'], function(){
            Route::match(['get', 'post'], 'product', [ProductController::class, 'create'])->name('admin.create.product');
        });

        Route::group(['prefix' => 'view'], function(){
            Route::group(['prefix' => 'list'], function(){
                Route::get('', [ProductController::class, 'productList'])->name('admin.view.product.list');
            });
        });
        
    });

    Route::get('logout', function(){
        Session::flush();
        
        Auth::logout();

        return redirect()->route('admin.login');
    })->name('admin.logout');
});
