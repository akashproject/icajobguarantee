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

            $enquiry = Enquiry::all();
            $name = Auth::user()->name;
            $center = Center::where('name',$name)->first();

            return view('administrator.enquiry.index',compact('enquiry','name','center'));

        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
        
    }


}
