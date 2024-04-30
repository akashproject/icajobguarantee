<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AffiliateUser;
use Illuminate\Support\Facades\Auth;
use App\Models\Center;
use Mail;

class AffiliateController extends Controller
{
   //
    public function users()
    {
        try {
            $status = 0;
            $userData = Auth::user();
            $model = ucfirst($userData->role);
            $affiliateUsers = AffiliateUser::where('center_id',$userData->id)->where('model',$model)->get();
            return view('administrator.affiliates.affiliate-users',compact('affiliateUsers','status'));

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
            $user = Auth::user();
            return view('administrator.affiliates.show',compact('affiliateUser','user'));
        } catch(\Illuminate\Database\QueryException $e){
        }        
    }

    public function ChangeUserStatus(Request $request,$id){
        try {
            $status = request()->get('status');
            $affiliates = AffiliateUser::findOrFail($id);
            $data = ['status'=>$status];
            $affiliates->update($data);
            if($status == 1){
                $data = [
                    'code' => $affiliates->code,
                    'center_id' => '103',
                    'model' => 'University',
                    'email' =>  $affiliates->email,
                    'name' =>  $affiliates->name,
                ];
                $this->sendRegistrationMail($data);
            }
            return true;
        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e);
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
                $userData = Auth::user();
                $data['center_id'] = $userData->id;
                $data['code'] = "Vendor-ICA_".random_strings(6);
                $data['model'] = ucfirst($userData->role);
                // echo "<pre>"; print_r($data);
                // exit;
                $affiliateUser = AffiliateUser::create($data);
                return redirect('/administrator/view-affiliate-user/'.$affiliateUser->id);
            } else {
                $affiliateUser = AffiliateUser::findOrFail($data['affiliate_user_id']);
                $affiliateUser->update($data);
            }
            return redirect()->back()->with('message', 'Affiliate user updated successfully!');
        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e->getMessage()); 
        }
    }

    public function deleteUser($id) {
        $course = AffiliateUser::findOrFail($id);
        $course->delete();
        return redirect()->back()->with('message', 'Affiliate user deleted successfully!');
    }

    public function sendRegistrationMail($postData){
        try {
            
            $mail = Mail::send('administrator.email.registrationMail', $postData, function ($m) use ($postData) {
                $m->from('connect@icajobguarantee.com', 'ICA Edu Skils');
                $m->to($postData['email'], $postData['name'])->subject("Registration has been completed successfully");
            });

        } catch(\Illuminate\Database\QueryException $e){

            
            //throw $th;
            var_dump($e);
        }
    }
    
}
