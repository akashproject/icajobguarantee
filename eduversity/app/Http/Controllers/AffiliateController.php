<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AffiliateUser;

class AffiliateController extends Controller
{
    //
    public function dashboard($slug)
    {

        return view('affiliates.dashboard');
    }

    public function registration(Request $request)
    {
        try {
            $data = $request->all();
            $data['code'] = "Vendor-ICA_".$this->random_strings(6);
            $data['center_id'] = "103";
            $affiliateUser = AffiliateUser::create($data);
            $request->session()->put('user',$affiliateUser);
            return redirect()->back()->with('message', 'You have registerd successfully! Confirmation will be sent to you email address');
        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
            var_dump($th);
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
