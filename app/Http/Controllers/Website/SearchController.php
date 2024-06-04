<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Traits\AjaxResponser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    use AjaxResponser;
    public function getSearchResult(Request $request){
        try{
            $search_query = $request->searchKeyword;
            $products = Product::with('category', 'subCategory')->where('name', 'LIKE', '%'.$search_query)->get();
            
            if($products != null){
                return $this->success('Great! Products fetched successfully', $products, 200);
            }else{
                return $this->error('Oops! Failed to fetched product', null, 400);
            }
        }catch(\Exception $e){
            return $this->error('Oops! Something went wrong'.$e->getMessage(), null, 400);
        }
        
    }
}
