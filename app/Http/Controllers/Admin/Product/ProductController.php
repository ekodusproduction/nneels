<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductGallery;
use App\Traits\AjaxResponser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    use AjaxResponser;

    public function create(Request $request){
        if($request->isMethod('get')){
            try{
                $category = Category::with('subCategories')->where('status', 1)->get();
                return view('admin.product.create.create-product')->with(['category' => $category]);
            }catch(\Exception $e){
                echo 'Oops! Something went wrong.';
            }
            
        }else{
            $validator = Validator::make($request->all(),[
                'name' => 'required|string',
                'price' => 'required|numeric',
                'size' => 'required|string',
                'color' => 'required|string',
                'quantity' => 'required|numeric',
                'is_stock_available' => 'required|numeric',
                'rate_of_discount' => 'required',
                'featured_section' => 'required',
                'tags' => 'required|string',
                'short_description' => 'required',
                'long_description' => 'required',
                'main_product_image' => 'required|image|mimes:jpg,png,jpeg,webp|max:2048',
                'category' => 'required',
                'sub_category' => 'required',
                'visibility_status' => 'required',
            ]);

            if($validator->fails()){
                return $this->error('Oops! '.$validator->errors()->first(), null, 400);
            }else{
                try{

                    if($request->hasFile('main_product_image')){

                        $file = $request->file('main_product_image');
                        $name = Str::uuid()->toString().'_'.$file->getClientOriginalName();
                        
                        $file->move(public_path('admin/assets/product/main/'), $name);
                        $path = 'admin/assets/product/main/'.$name;

                        $create_product = Product::create([
                            'name' => $request->name,
                            'price' => $request->price,
                            'size' => $request->size,
                            'color' => $request->color,
                            'quantity' => $request->quantity,
                           'is_stock_available' => $request->is_stock_available,
                            'rate_of_discount' => $request->rate_of_discount,
                            'featured_section' => $request->featured_section,
                            'tags' => $request->tags,
                            'short_description' => $request->short_description,
                            'long_description' => $request->long_description,
                            'main_image' => $path ,
                            'categories_id' => decrypt($request->category),
                            'sub_categories_id' => $request->sub_category,
                            'status' => $request->visibility_status,
                        ]);

                        if($create_product){
                            if($request->hasFile('product_gallery')){

                                foreach($request->product_gallery as $image){

                                    $gallery_file = $request->file('product_gallery');
                                    
                                    $gallery_image_name = Str::uuid()->toString().'_'.$gallery_file->getClientOriginalName();
                                    
                                    $gallery_file->move(public_path('admin/assets/product/gallery/'), $gallery_image_name);
                                    $gallery_image_path = 'admin/assets/product/gallery/'.$gallery_image_name;

                                    ProductGallery::create([
                                        'products_id' => $create_product->id,
                                        'image' => $gallery_image_path
                                    ]);
                                }
                                
                            }

                            return $this->success('Great! Product created successfully.', null, 200);
                            
                        }else{
                            return $this->error('Oops! Failed to create product.', null, 400);
                        }

                    }else{
                        return $this->error('Oops! Product main image not selected', null, 400);
                    }
                    
                }catch(\Exception $e){
                    return $this->error('Oops! Something went wrong'.$e->getMessage().' '.'Line No --> '.$e->getLine(), null, 500);
                }
            }
        }
    }
}
