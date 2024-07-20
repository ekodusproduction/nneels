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
        
        // $all_banners = Banner::orderBy('created_at', 'DESC')->get();
        $all_banners = Banner::orderByRaw("is_default DESC, created_at DESC")->get();
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

                    $check_banner_count = Banner::count();

                    $is_default = 0;
                    if($check_banner_count < 1){
                        $is_default = 1;
                    }
    
                    $create_banner = Banner::create([
                        'image' => $path,
                        'main_text' => $request->main_text,
                        'sub_text' => $request->sub_text,
                        'is_default' => $is_default

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

    public function editBanner(Request $request, $id){
        $banner_id = decrypt($id);
        $get_details = Banner::where('id', $banner_id)->first();
        return view('admin.banner.edit-banner')->with(['details' => $get_details]);
    }

    public function saveEditedBanner(Request $request){
        // return $this->success('Great! Banner updated successfully.', $request->banner_image, 200);
        try{
            $banner_id = decrypt($request->banner_id);
            $get_details = Banner::where('id', $banner_id)->first();
            $image_path = null;

            if($request->hasFile('banner_image')){

                $file = $request->file('banner_image');
                $name = Str::uuid()->toString().'_'.$file->getClientOriginalName();
                
                $file->move(public_path('admin/assets/banner/'), $name);
                $image_path = 'admin/assets/banner/'.$name;
            }else{
                $image_path = $get_details->image;
            }

            $update_banner = Banner::where('id', $banner_id)->update([
                'image' => $image_path,
                'main_text' => $request->main_text,
                'sub_text' => $request->sub_text,
            ]);

            return $this->success('Great! Banner updated successfully.', null, 200);
        }catch(\Exception $e){
            return $this->error('Oops! Something went wrong', null, 500);
        }
    }

    public function changeBannerStatus(Request $request){
        $banner_id = decrypt($request->banner_id);
        try{
            Banner::where('id', $banner_id)->update([
                'status' => $request->status
            ]);

            return $this->success('Great! Banner visibility status updated successfully', null, 200);
        }catch(\Exception $e){
            return $this->error('Oops! Something went wrong', null, 500);
        }
    }
}
