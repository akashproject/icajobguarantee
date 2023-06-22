<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AffiliateUser;
class AffiliateController extends Controller
{
   //
    public function users()
    {
        try {
            $affiliateUsers = AffiliateUser::all();
            return view('administrator.affiliates.affiliate-users',compact('affiliateUsers'));

        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }        
    }

    public function addUser() {
        try {

            return view('administrator.affiliates.add');
        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
        
    }

    public function showUser($id)
    {
        try {
            $affiliateUser = AffiliateUser::findorFail($id);
            return view('administrator.affiliates.show',compact('affiliateUser'));
        } catch(\Illuminate\Database\QueryException $e){
        }        
    }

    public function saveUser(Request $request) {
        try {
            $data = $request->all();
            $validatedData = $request->validate([
                'name' => 'required',
                'mobile' => 'required',
                'pan_photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'aadhar_photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'cheque' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            // if ($request->hasFile('pan_photo')) {
            //     $panPhoto = strtolower($data['name']).'_logo_'.time().'.'.$request->image->extension();  
                
            //     $request->image->move(public_path('images/brand'), $imageFile);
            //     $data['pan_photo'] = "brand/".$imageFile;
            // }
            
            if($data['affiliate_user_id'] <= 0){
                $data['code'] = "Vendor-ICA_".$this->random_strings(6);
                AffiliateUser::create($data);
            } else {
                $affiliateUser = AffiliateUser::findOrFail($data['affiliate_user_id']);
                $affiliateUser->update($data);
            }
            return redirect()->back()->with('message', 'Affiliate user updated successfully!');
        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e->getMessage()); 
        }
    }

    public function random_strings($length_of_string)
    {
    
        // String of all alphanumeric character
        $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    
        // Shuffle the $str_result and returns substring
        // of specified length
        return substr(str_shuffle($str_result),
                        0, $length_of_string);
    }
}
