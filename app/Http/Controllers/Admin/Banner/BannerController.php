<?php

namespace App\Http\Controllers\Admin\Banner;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Traits\AjaxResponser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class BannerController extends Controller
{
    use AjaxResponser;
    public function index(){
        $all_banners = Banner::orderBy('created_at', 'DESC')->get();
        return view('admin.banner.banner')->with(['all_banner' => $all_banners]);
    }

    public function createBanner(Request $request){

        $validator = Validator::make($request->all(), [
            'banner_image' => 'required|image|mimes:jpg,png,jpeg,webp|max:2048'
        ]);

        if($validator->fails()){
            return $this->error('Oops! '.$validator->errors()->first(), null, 400);
        }else{

            try{
                if($request->hasFile('banner_image')){

                    $file = $request->file('banner_image');
                    $name = Str::uuid()->toString().'_'.$file->getClientOriginalName();
                    
                    $file->move(public_path('admin/assets/banner/'), $name);
                    $path = 'admin/assets/banner/'.$name;
    
                    $create_banner = Banner::create([
                        'image' => $path,
                        'main_text' => $request->main_text,
                        'sub_text' => $request->sub_text
                    ]);
    
                    return $this->success('Great! Banner created successfully.', null, 200);
    
                }else{
                    return $this->error('Oops! Banner image not selected', null, 400);
                }
            }catch(\Exception $e){
                return $this->error('Oops! Something went wrong', null, 500);
            }
        }
    }

    public function allBanners(){
        
    }
}
