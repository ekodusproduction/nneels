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
