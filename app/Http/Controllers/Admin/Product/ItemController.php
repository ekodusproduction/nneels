<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use App\Traits\AjaxResponser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
                'name' => 'required',
                'price' => 'required',
                'size' => 'required',
                'category' => 'required',
                'sub_category' => 'required',
                'shortDescription' => 'required',
                'itemImage' => 'required'
            ]);

            if($validator->fails()){
                return $this->error('Oops! '.$validator->errors()->first(), null, 400);
            }else{
                try{

                    $image = $request->itemImage;
                    $file = null;

                    if($request->hasFile('itemImage')){
                        $new_name = uniqid() . '_' . $image->getClientOriginalName();
                        $image->move(public_path('admin/assets/product/Images/cover/'), $new_name);
                        $file = 'admin/assets/product/images/cover/' . $new_name;
                    }

                    Product::create([
                        'name' => $request->name,
                        'price' => $request->price,
                        'size' => $request->size,
                        'categories_id' => decrypt($request->category),
                        'sub_categories_id' => $request->sub_category,
                        'short_description' => $request->shortDescription,
                        'cover_image' => $file
                    ]);

                    // if($createProduct){
                    //     $product_id = Product::where('status', 1)->latest();
                    //     return $this->error('Oops', $product_id, 400);
                    // }

                        // foreach($request->itemImages as $key => $image){
                        //     $new_name = uniqid() . '_' . $image->getClientOriginalName();
                        //     $image->move(public_path('admin/assets/product/Images/'), $new_name);
                        //     $file = 'admin/assets/product/images/' . $new_name;
                        
                        //     // Get the corresponding image type for this image
                        //     $imageType = $request->itemImageType[$key];
                        
                        //     ProductImage::create([
                        //         // 'products_id' => 
                        //         'image' => $file,
                        //         'image_type' => $imageType
                        //     ]);
                        // }
                    return $this->success('Great! Product added successfully', null, 200);
                }catch(\Exception $e){
                    return $this->error('Oops! Something went wrong'.$e->getMessage().' '.$e->getLine(), null, 500);
                }
            }
        }
    }
}
