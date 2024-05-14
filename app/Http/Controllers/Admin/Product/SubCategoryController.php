<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
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
                $sub_categories = SubCategory::where('categories_id',  $category_id)->orderBy('created_at', 'DESC')->get();
                return $this->success('Great! Sub categories fetched successfully', $sub_categories, 200);
            }catch(\Exception $e){
                return $this->error('Oops! Something went wrong', null, 500);
            }
        }else{
            try{
                $main_categories = Category::where('status',1)->orderBy('created_at', 'DESC')->get();
                $sub_categories = SubCategory::with('categories')->orderBy('created_at', 'DESC')->get();
                return view('admin.product.category.sub-category')->with(['sub_categories' => $sub_categories, 'main_categories' => $main_categories]);
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

    public function changeStatus(Request $request){
        try{
            $sub_category_id = $request->sub_category_id;
            $status = $request->status;

            SubCategory::where('id', $sub_category_id)->update([
                'status' => $status
            ]);

            return $this->success('Great! Status updated successfully', null, 200);
        }catch(\Exception $e){
            return $this->error('Oops! Something went wrong', null, 500);
        }
    }

    public function editCategory(Request $request, $id){

        if($request->isMethod('get')){
            $sub_category_id = decrypt($id);
            try{
                $selected_sub_category = SubCategory::with('categories')->where('id', $sub_category_id)->first();
                $main_categories = Category::where('status', 1)->orderBy('created_at', 'DESC')->get();
                return view('admin.product.category.edit-sub-category')->with(['selected_sub_category' => $selected_sub_category, 'main_categories' => $main_categories]);
            }catch(\Exception $e){
                return $this->error('Oops! Something went wrong', null, 500);
            }
        }else{
            try{
                $sub_category_id = decrypt($id);
                $categories_id = $request->categories_id;
                $sub_category_name = $request->subCategoryName;

                SubCategory::where('id', $sub_category_id)->update([
                    'categories_id' => $categories_id,
                    'name' => $sub_category_name
                ]);

                return $this->success('Great! Status updated successfully', null, 200);
            }catch(\Exception $e){
                return $this->error('Oops! Something went wrong', null, 500);
            }
        }
    }

    public function deleteSubCategory(Request $request){
        try{
            $sub_category_id = $request->sub_category_id;
            SubCategory::where('id', $sub_category_id)->delete();

            return $this->success('Great! Sub Category deleted successfully', null, 200);

        }catch(\Exception $e){
            return $this->error('Oops! Something went wrong', null, 500);
        }
    }
}
