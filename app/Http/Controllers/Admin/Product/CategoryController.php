<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Traits\AjaxResponser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    use AjaxResponser;

    public function index(){
        $categories = Category::orderBy('created_at', 'desc')->get();
        return view('admin.product.category.category')->with(['category' => $categories]);
    }

    public function createCategory(Request $request){

        $validator = Validator::make($request->all(), [
            'categoryName' => 'required'
        ]);

        if($validator->fails()){
            return $this->error('Oops! '.$validator->errors()->first(), null, 400);
        }else{
            try{
                Category::create([
                    'name' => $request->categoryName
                ]);
                return $this->success('Great! Category added succesfully', null, 200);
            }catch(\Exception $e){
                return $this->error('Oops! Something went wrong'.$e->getMessage(), null, 500);
            }
        }

    }
}
