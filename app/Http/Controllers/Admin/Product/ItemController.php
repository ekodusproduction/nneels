<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Traits\AjaxResponser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ItemController extends Controller
{
    use AjaxResponser;
    public function create(Request $request){
        if($request->isMethod('get')){
            try{
                $category = Category::with('subCategories')->where('status', 1)->get();
                return view('admin.product.item.add-item')->with(['category' => $category]);
            }catch(\Exception $e){
                echo 'Oops! Something went wrong.';
            }
            
        }else{
            $validator = Validator::make($request->all(),[

            ]);

            if($validator->fails()){
                return $this->error('Oops! '.$validator->errors()->first(), null, 400);
            }else{
                try{
                    
                }catch(\Exception $e){
                    return $this->error('Oops! Something went wrong', null, 500);
                }
            }
        }
    }
}
