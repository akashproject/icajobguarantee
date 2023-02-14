<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\CourseType;

class IndexController extends Controller
{
    //

    public function index() {
        # code...
        try {
            $courses = DB::table('courses')
            ->join('course_type', 'course_type.id', '=', 'courses.type_id')
            ->select('courses.*', 'courses.name as course_name','course_type.name as category','course_type.slug as categorySlug')
            ->distinct()
            ->orderBy('courses.id', 'asc')
            ->get();
            $courseTypes = CourseType::where('status', 1)->get();
            return view('index',compact('courses','courseTypes'));
        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
        
    }
}
