<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Center;
use App\Models\Course;

class StudentController extends Controller
{
    //

    public function index($step = null)
    {
        //
        $center = (request()->has('center'))?request()->get('center'):"";
        $enquiry = (request()->has('enquiry'))?base64_decode(request()->get('enquiry')):"";

        $centerModel = Center::select('courses')->where('id',$center)->first();
        $courses = Course::whereIn('id',json_decode($centerModel->courses))->get();
        
        $courseByCategory = [];
        $count = 0;
        foreach ($courses as $key => $value) {
            if($value->type_id == 1) {
                $courseByCategory['career_course'][$count] = $value->name;
            } else {
                $courseByCategory['skill_course'][$count] = $value->name;
            }
            $count++;
        }
        return view('page.student-enquiry-form',compact('step','center','enquiry','courseByCategory'));
    }
}
