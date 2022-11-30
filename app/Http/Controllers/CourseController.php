<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    //

    public function index()
    {
        try {

            $courses = Course::where('status', 1)->get();
            return view('courses.index',compact('courses'));

        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
        
    }

    public function viewCourse($slug)
    {
        try {
            //$course = Course::where('slug', $slug)->where('status', 1);
            //$course = $course->firstOrFail();
            $course = array();
            return view('courses.view',compact('course'));
        } catch(\Illuminate\Database\QueryException $e){
        }
       
    }

}
