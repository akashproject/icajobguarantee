<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\CourseType;

class CourseController extends Controller
{
    //

    public function index(Request $request)
    {
        try {

            $courses = DB::table('courses')
            ->join('course_type', 'course_type.id', '=', 'courses.type_id')
            ->select('courses.*', 'courses.name as course_name','course_type.name as category')
            ->distinct()
            ->orderBy('courses.id', 'asc')
            ->get();
            $courseTypes = CourseType::where('status', 1)->get();
            return view('courses.index',compact('courses','courseTypes'));

        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
        
    }

    public function courseListByCategory($slug)
    {
        try {


            $courses = DB::table('courses')
            ->join('course_type', 'course_type.id', '=', 'courses.type_id')
            ->select('courses.*', 'courses.name as course_name','course_type.name as category')
            ->where('course_type.slug', $slug)
            ->distinct()
            ->orderBy('courses.id', 'asc')
            ->get();

            $courseTypes = CourseType::where('status', 1)->get();

            $category = CourseType::where('slug', $slug)->first();
            return view('courses.index',compact('courses','courseTypes','category'));

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
