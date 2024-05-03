<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use App\Traits\AjaxResponser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    use AjaxResponser;

    public function index(){
        $categories = Category::with('subCategories')->orderBy('created_at', 'desc')->get();
        return view('admin.product.category.main')->with(['category' => $categories]);
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
                return $this->error('Oops! Something went wrong', null, 500);
            }
        }

    }

    public function topCategory(Request $request){
        if($request->isMethod('get')){
            return view('admin.product.category.set-top-category');
        }else{

        }
    }
}
