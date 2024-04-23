<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(){
        return view('website.shop.shop');
    }

    public function getProduct(Request $request, $main_category, $sub_category){
        try{
            $get_product_category = Category::where('name', urldecode($main_category))->first();
            $get_product_sub_category = SubCategory::where('categories_id', $get_product_category->id)->where('name', urldecode($sub_category))->first();
            $get_product = Product::with('product_gallery')->where('categories_id', $get_product_category->id)->where('sub_categories_id', $get_product_sub_category->id)->get();

            return view('website.shop.shop')->with(['product' => $get_product, 'main_category' => urldecode($main_category), 'sub_category' => urldecode($sub_category)]);
        }catch(\Exception $e){
            echo 'Oops! Something went wrong';
        }
        
    }
}
