<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use App\Traits\AjaxResponser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    use AjaxResponser;

    public function index(){
        $categories = Category::with('subCategories')->orderBy('created_at', 'desc')->get();
        return view('admin.product.category.main')->with(['category' => $categories]);
    }

    public function createCategory(Request $request){

        $validator = Validator::make($request->all(), [
            'categoryName' => 'required',
            'categoryDefaultImage' => 'required|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        if($validator->fails()){
            return $this->error('Oops! '.$validator->errors()->first(), null, 400);
        }else{
            try{
                if($request->hasFile('categoryDefaultImage')){

                    $file = $request->file('categoryDefaultImage');
                    $name = Str::uuid()->toString().'_'.$file->getClientOriginalName();
                    
                    $file->move(public_path('admin/assets/product/category/'), $name);
                    $path = 'admin/assets/product/category/'.$name;

                    Category::create([
                        'name' => $request->categoryName,
                        'default_image' => $path
                    ]);
                    return $this->success('Great! Category added succesfully', null, 200);
                }else{
                    return $this->error('Oops! Failed to create category. Default image not selected', null, 400);
                }
                
            }catch(\Exception $e){
                return $this->error('Oops! Something went wrong', null, 500);
            }
        }

    }

    public function topCategory(Request $request){
        if($request->isMethod('get')){
            $categories = Category::where('status', 1)->get();
            return view('admin.product.category.set-top-category')->with(['categories' => $categories]);
        }else{
            try{
                $count_top_category = Category::where('status', 1)->where('is_top_category', 1)->count();
                if($count_top_category == 3){
                    return $this->error('Oops! Top categories cannot be set more than 3', null, 400);
                }else{
                    Category::where('id', $request->category_id)->update([
                        'is_top_category' => $request->is_top_category
                    ]);
                    return $this->success('Great! Category status update', null, 200);
                }
            }catch(\Exception $e){
                return $this->error('Oops! Something went wrong', null, 500);
            }
        }
    }

    public function editCategory(Request $request){

        if($request->isMethod('get')){
            $category = Category::where('id', $request->category_id)->get();
            return $this->success('Great! Category fetched successfully.', $category, 200);
        }else{
            
        }
    }

    public function deleteCategory(Request $request){

        try{
            $category_id = Category::where('id', $request->category_id)->exists();
            if(!$category_id){
                return $this->error('Oops! Failed to delete. Selected category does not exists.', null, 400);
            }else{
                Category::where('id', $request->category_id)->delete();

                return $this->success('Great! Category deleted successfully', null, 200);
            }
        }catch(\Exception $e){
            return $this->error('Oops! Something went wrong', null, 500);
        }
    }
}
