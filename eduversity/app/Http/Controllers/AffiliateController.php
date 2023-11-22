<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AffiliateUser;
use Mail;

class AffiliateController extends Controller
{
    //

    public function dashboard()
    {
        
        try {

            $affiliateUser = AffiliateUser::find(1);
            return view('affiliates.dashboard',compact('affiliateUser'));
        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
            var_dump($th);
        }
    }   

    public function registration(Request $request)
    {
        try {
            $data = $request->all();
            $data['code'] = "Vendor-ICA_".$this->random_strings(6);
            $data['center_id'] = "103";
            $data['model'] = "University";
            $affiliateUser = AffiliateUser::create($data);
            return redirect()->back()->with('message', 'You have registerd successfully! Confirmation will be sent to you email address');
        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
            var_dump($th);
        }
    }

    public function affliateProfile()
    {
        
        try {

            $affiliateUser = AffiliateUser::find(1);
            return view('affiliates.profile',compact('affiliateUser'));
        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
            var_dump($th);
        }
    } 
    
    public function referralLinks()
    {
        
        try {

            $affiliateUser = AffiliateUser::find(1);
            return view('affiliates.referral-links',compact('affiliateUser'));
        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
            var_dump($th);
        }
    } 

    public function referralSupport()
    {
        
        try {

            $affiliateUser = AffiliateUser::find(1);
            return view('affiliates.dashboard',compact('affiliateUser'));
        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
            var_dump($th);
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
            
            $affiliateUser = AffiliateUser::findOrFail($data['affiliate_user_id']);
            $affiliateUser->update($data);
            
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
