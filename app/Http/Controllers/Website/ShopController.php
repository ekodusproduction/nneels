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
            $get_selected_product_category = Category::where('name', urldecode($main_category))->first();
            $get_selected_product_sub_category = SubCategory::where('categories_id', $get_selected_product_category->id)->where('name', urldecode($sub_category))->first();
            $get_selected_product = Product::with('product_gallery', 'subCategory')->where('categories_id', $get_selected_product_category->id)->where('sub_categories_id', $get_selected_product_sub_category->id)->get();

            $get_all_sub_categories_of_selected_category = SubCategory::where('categories_id', $get_selected_product_category->id)->get();

            return view('website.shop.shop')->with(['product' => $get_selected_product, 'main_category' => urldecode($main_category), 'sub_category' => urldecode($sub_category), 'get_related_sub_categories' => $get_all_sub_categories_of_selected_category]);
        }catch(\Exception $e){
            echo 'Oops! Something went wrong';
        }
        
    }
}
