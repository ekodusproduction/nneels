<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Traits\AjaxResponser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthenticationController extends Controller
{
    use AjaxResponser;
    public function login(Request $request){
        if($request->isMethod('get')){
            return view('admin.auth.login');
        }else{
            $validator = Validator::make($request->all(),[
                'email' => 'required|email',
                'password' => 'required'
            ]);

            if($validator->fails()){
                return $this->success('Oops! '.$validator->errors()->first(), null, 400);
            }else{
                try{
                    if(!Auth::attempt(['email' => $request->email, 'password' => $request->password])){
                        return $this->error('Oops! Invalid credentials', null, 400);
                    }else{
                        return $this->success('Great! Signin successful', '/admin/dashboard', 200);
                        
                    }
                }catch(\Exception $e){
                    return $this->error('Oops! Something went wrong', null, 500);
                }
            }
        }
    }
}
