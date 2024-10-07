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
        return view('page.student-enquiry-form',compact('step'));
    }
}
