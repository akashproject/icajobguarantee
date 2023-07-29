<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Enquiry;


class EnquiryController extends Controller
{
    //
    public function index()
    {
        try {

            $enquiry = Enquiry::all();
            return view('administrator.enquiry.index',compact('enquiry'));

        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
        
    }


}
