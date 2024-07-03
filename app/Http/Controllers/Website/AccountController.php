<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\ShippingAdress;
use App\Traits\AjaxResponser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AccountController extends Controller
{
    use AjaxResponser;
    public function signinSignup(){
        return view('website.login-signup.login-signup');
    }

    public function myAccount(){
        return view('website.account.myaccount');
    }

    public function myOrders(){
        return view('website.account.orders.myorders');
    }

    public function myAddress(){
        $shipping_address = ShippingAdress::where('user_id', Auth::user()->id)->first();
        return view('website.account.address.myaddress')->with(['shipping_address' => $shipping_address]);
    }

    public function editAddress(Request $request){
        if($request->isMethod('get')){
            $shipping_address = ShippingAdress::where('user_id', Auth::user()->id)->first();
            $country_list = ["Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua &amp; Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia &amp; Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Cape Verde","Cayman Islands","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cruise Ship","Cuba","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kuwait","Kyrgyz Republic","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Mauritania","Mauritius","Mexico","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Namibia","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","Norway","Oman","Pakistan","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre &amp; Miquelon","Samoa","San Marino","Satellite","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","South Africa","South Korea","Spain","Sri Lanka","St Kitts &amp; Nevis","St Lucia","St Vincent","St. Lucia","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad &amp; Tobago","Tunisia","Turkey","Turkmenistan","Turks &amp; Caicos","Uganda","Ukraine","United Arab Emirates","United Kingdom","Uruguay","Uzbekistan","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];
            return view('website.account.address.edit-address')->with(['shipping_address' => $shipping_address, 'country_list' => $country_list]);
        }else{
            $validator = Validator::make($request->all(), [
                'country' => 'required',
                'street_address_1' => 'required',
                'street_address_2' => 'required',
                'town_or_city' => 'required',
                'zip_code' => 'required',
                'province' => 'required'
            ]);

            if($validator->fails()){
                
                return $this->error('Oops! '.$validator->errors()->first(), null, 400);
            }else{
                try{
                    ShippingAdress::where('user_id', Auth::user()->id)->update([
                        'company_name' => $request->company_name,
                        'country' => $request->country,
                        'address_1' => $request->street_address_1,
                        'address_2' => $request->street_address_2,
                        'town_or_city' => $request->town_or_city,
                        'zip_code' => $request->zip_code,
                        'province' => $request->province
                    ]);
                    return $this->success('Great! Address updated successfully', null, 200);
                }catch(\Exception $e){
                    return $this->error('Oops! Something went wrong while saving address', null, 500);
                }
                
            }

            
        }
        
    }

    public function accountDetails(){
        return view('website.account.details.details');
    }

    public function wishlist(){
        return view('website.account.wishlist.wishlist');
    }

    public function logout(){
        Auth::logout();
        Session::flush();
        return redirect('/');
    }
}
