<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductGallery;
use App\Traits\AjaxResponser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    use AjaxResponser;

    public function create(Request $request){
        if($request->isMethod('get')){
            try{
                $category = Category::with('subCategories')->where('status', 1)->get();
                return view('admin.product.create')->with(['category' => $category]);
            }catch(\Exception $e){
                echo 'Oops! Something went wrong.';
            }
            
        }else{
            $validator = Validator::make($request->all(),[
                'name' => 'required|string',
                'originalPrice' => 'required|numeric',
                'salePrice' => 'required|numeric',
                'size' => 'required|string',
                'color' => 'required|string',
                'quantity' => 'required|numeric',
                'is_stock_available' => 'required|numeric',
                'rate_of_discount' => 'required',
                'featured_section' => 'required',
                'tags' => 'required|string',
                'short_description' => 'required',
                'long_description' => 'required',
                // 'main_product_image' => 'required|image|mimes:jpg,png,jpeg,webp|max:2048',
                'category' => 'required',
                'sub_category' => 'required',
                'visibility_status' => 'required',
            ]);

            if($validator->fails()){
                return $this->error('Oops! '.$validator->errors()->first(), null, 400);
            }else{
                try{
                    $categories_id = decrypt($request->category);

                    $check_if_product_with_same_name_exists = Product::where('categories_id', $categories_id)->where('sub_categories_id', $request->sub_category)->where('name', $request->name)->exists();

                    if($check_if_product_with_same_name_exists){
                        return $this->error('Oops! Product belong to the same category with the same name already exists.', null, 400);
                    }

                    $path = null;

                    if($request->hasFile('main_product_image')){

                        $file = $request->file('main_product_image');
                        $name = Str::uuid()->toString().'_'.$file->getClientOriginalName();
                        
                        $file->move(public_path('admin/assets/product/main/'), $name);
                        $path = 'admin/assets/product/main/'.$name;
                    }else{
                        $path = 'assets/images/img-placeholder.png';
                    }

                        $create_product = Product::create([
                            'product_id' => Str::uuid(),
                            'name' => $request->name,
                            'original_price' => $request->originalPrice,
                            'sale_price' => $request->salePrice,
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
                            'categories_id' => $categories_id,
                            'sub_categories_id' => $request->sub_category,
                            'status' => $request->visibility_status,
                        ]);

                        if($create_product){
                            
                            if($request->hasFile('product_gallery_image')){
                                foreach($request->product_gallery_image as $image){

                                    $gallery_image_name = Str::uuid()->toString().'_'.$image->getClientOriginalName();
                                    
                                    $image->move(public_path('admin/assets/product/gallery/'), $gallery_image_name);
                                    $gallery_image_path = 'admin/assets/product/gallery/'.$gallery_image_name;

                                    ProductGallery::create([
                                        'product_id' => $create_product->product_id,
                                        'image' => $gallery_image_path
                                    ]);
                                }
                                
                            }

                            return $this->success('Great! Product created successfully.', null, 200);
                            
                        }else{
                            return $this->error('Oops! Failed to create product.', null, 400);
                        }

                    // }else{
                    //     return $this->error('Oops! Product main image not selected', null, 400);
                    // }
                    
                }catch(\Exception $e){
                    return $this->error('Oops! Something went wrong'.$e, null, 500);
                }
            }
        }
    }


    public function productList(){
        $product = Product::with('product_gallery', 'category', 'subCategory')->orderBy('created_at', 'Desc')->get();
        return view('admin.product.list.all-products')->with(['product' => $product ]);
    }

    public function changeStatus(Request $request){

        $validator = Validator::make($request->all(), [
            'product_id' => 'required',
            'status' => 'required'
        ]);

        if($validator->fails()){
            return $this->error('Oops! '.$validator->errors()->first(), null, 400);
        }else{  
            try{
                DB::beginTransaction();
    
                Product::where('product_id', $request->product_id)->update([
                    'status' => $request->status
                ]);
    
                ProductGallery::where('product_id', $request->product_id)->update([
                    'status' => $request->status
                ]);
    
                DB::commit();
    
                return $this->success('Great! Visibility updated successfully', null, 200);
            }catch(\Exception $e){
                DB::rollBack();
                return $this->error('Oops! Something went wrong', null, 500);
            }
        }
        
    }

    public function productDetails($id){
        $product_id = decrypt($id);
        try{
            $categories = Category::where('status', 1)->get();
            $product_details = Product::with('product_gallery', 'category', 'subCategory')->where('product_id', $product_id)->where('status', 1)->first();
            return view('admin.product.product-details')->with(['product_details' => $product_details, 'categories' => $categories]);
        }catch(\Exception $e){
            echo 'Oops! Something went wrong';
        }
    }

    public function updateProductDetails(Request $request){

        $validator = Validator::make($request->all(),[
            'name' => 'required|string',
            'originalPrice' => 'required|numeric',
            'salePrice' => 'required|numeric',
            'size' => 'required|string',
            'color' => 'required|string',
            'quantity' => 'required|numeric',
            'is_stock_available' => 'required|numeric',
            'rate_of_discount' => 'required',
            'featured_section' => 'required',
            'tags' => 'required|string',
            'short_description' => 'required',
            'long_description' => 'required',
            // 'main_product_image' => 'required|image|mimes:jpg,png,jpeg,webp|max:2048',
            'category' => 'required',
            'sub_category' => 'required',
            'visibility_status' => 'required',
        ]);

        if($validator->fails()){
            return $this->error('Oops!'.$validator->errors()->first(), null, 400);
        }else{
            try{

                // return $this->success('Great!', $request->all(), 200);
                $product_id = decrypt($request->product_id);
                $product_details = Product::where('product_id', $product_id)->first();
                
                $categories_id = decrypt($request->category);

                $path = null;

                if($request->main_product_image == 'undefined'){
                    $path = $product_details->main_image;
                }else{

                    $file = $request->file('main_product_image');
                    $name = Str::uuid()->toString().'_'.$file->getClientOriginalName();
                    
                    $file->move(public_path('admin/assets/product/main/'), $name);
                    $path = 'admin/assets/product/main/'.$name;
                }

                Product::where('product_id', $product_id)->update([
                    'name' => $request->name,
                    'original_price' => $request->originalPrice,
                    'sale_price' => $request->salePrice,
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
                    'categories_id' => $categories_id,
                    'sub_categories_id' => $request->sub_category,
                    'status' => $request->visibility_status,
                ]);
                

                return $this->success('Great! Product updated successfully', null, 200);
                
            }catch(\Exception $e){
                return $this->error('Oops! Something went wrong', $e->getMessage(), 500);
            }
        }

        
    }

    public function deleteProduct(Request $request){
        try{
            $product_id = decrypt($request->product_id);
            DB::beginTransaction();
            Product::where('product_id', $product_id)->delete();
            ProductGallery::where('product_id', $product_id)->delete();
            DB::commit();
            return $this->success('Great! Product deleted successfully', null, 200);
        }catch(\Exception $e){
            DB::rollBack();
            return $this->error('Oops! Something went wrong', null, 500);
        }
    }
}
