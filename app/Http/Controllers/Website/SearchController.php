<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Traits\AjaxResponser;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    use AjaxResponser;
    public function getSearchResult(Request $request){
        $search_query = $request->searchKeyword;
        $get_product = Product::where('status', 1)->where('name', 'like', '%'.$search_query.'%')->get();
        
        if($get_product != null){
            return $this->success('Great! Products fetched successfully', $get_product, 200);
        }else{
            return $this->error('Oops! Failed to fetched product', null, 400);
        }
    }
}
