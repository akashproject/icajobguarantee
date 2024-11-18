<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    //

    public function index($step = null)
    {
        //
        $center = (request()->has('center'))?request()->get('center'):"";
        $enquiry = (request()->has('enquiry'))?base64_decode(request()->get('enquiry')):"";
        return view('page.student-enquiry-form',compact('step','center','enquiry'));
    }
}
