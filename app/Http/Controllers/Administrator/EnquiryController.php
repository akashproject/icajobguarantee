<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Enquiry;
use Illuminate\Support\Facades\Auth;
use App\Models\Center;

class EnquiryController extends Controller
{
    //
    public function index()
    {
        try {
            $status = 0;
            $enquiry = Enquiry::all();
            $name = Auth::user()->name;
            $center = Center::where('name',$name)->first();

            return view('administrator.enquiry.index',compact('enquiry','name','center','status'));
        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
        
    }

    public function show($id)
    {
        try {
            $enquiry = Enquiry::findOrFail($id);
            if(isset($enquiry->qualification)){
                $qualification = [];
                $enquiry->qualification = json_decode($enquiry->qualification);
                foreach($enquiry->qualification as $key => $value){
                    for ($i=0; $i < count($value); $i++) { 
                        $qualification[$i] = $value[$i];
                    }
                }
                print_r($qualification);
            } else {
                $enquiry->qualification;
            }
            return view('administrator.enquiry.show',compact('enquiry'));
        } catch(\Illuminate\Database\QueryException $e){

        }
    }
}
