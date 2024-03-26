<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\SubCategory;
use App\Traits\AjaxResponser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SubCategoryController extends Controller
{
    use AjaxResponser;

    public function fetchSubCategory(Request $request){
        //Fetch Sub Categories Based on Category Id

        if($request->category_id != null){
            $category_id = decrypt($request->category_id);
            try{
                $sub_categories = SubCategory::where('categories_id',  $category_id)->where('status', 1)->get();
                return $this->success('Great! Sub categories fetched successfully', $sub_categories, 200);
            }catch(\Exception $e){
                return $this->error('Oops! Something went wrong', null, 500);
            }
        }else{
            try{
                $sub_categories = SubCategory::with('categories')->where('status', 1)->get();
            }catch(\Exception $e){
                return $this->error('Oops! Something went wrong', null, 500);
            }
        }
    }

    public function createSubCategory(Request $request){
        $validator = Validator::make($request->all(), [
            'categories_id' => 'required',
            'subCategoryName' => 'required'
        ]);

        if($validator->fails()){
            return $this->error('Oops! '.$validator->errors()->first(), null, 400);
        }else{
            try{
                SubCategory::create([
                    'categories_id' => $request->categories_id,
                    'name' => $request->subCategoryName
                ]);
                return $this->success('Great! Sub category created successfully', null, 200);
            }catch(\Exception $e){
                return $this->error('Oops! Something went wrong', null, 500);
            }
        }
    }
}
