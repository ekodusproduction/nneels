<?php

namespace App\Http\Controllers\Website\Auth;

use App\Common\Role;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Traits\AjaxResponser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthenticationController extends Controller
{
    use AjaxResponser;
    public function signup(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'password' => 'required'
        ]);

        if($validator->fails()){
            return $this->error('Oops! '.$validator->errors()->first(), null, 400);
        }else{
            try{
                User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'password' => Hash::make($request->password),
                    'role' => Role::Customer
                ]);

                return $this->success('Great! Signup successful', null, 200);
            }catch(\Exception $e){
                return $this->error('Oops! Something went wrong.', null, 500);
            }
        }
    }

    public function login(Request $request){
        $validator = Validator::make($request->all(),[
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if($validator->fails()){
            return $this->error('Oops! '.$validator->errors()->first(), null, 400);
        }else{
            try{
                if(Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 2])){
                    return $this->success('Great! Login successful', $request->coming_from, 200);
                }else{
                    return $this->error('Oops! Invalid credentials', null, 400);
                }
            }catch(\Exception $e){
                return $this->error('Oops! Something went wrong', null, 500);
            }
        }
    }
}
