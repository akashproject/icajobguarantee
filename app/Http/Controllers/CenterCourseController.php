<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Center;
use App\Models\State;
use App\Models\City;
use App\Models\Course;
use App\Models\Curriculum;
use App\Models\Gallery;
use App\Models\CourseType;
use App\Models\CenterCourse;
use Illuminate\Support\Facades\DB;

class CenterCourseController extends Controller
{
    //
    public function viewCenterCourse($center_slug,$course_slug,Request $request)
    {
        try {
            $centerMain = Center::where('slug', $center_slug)->first(); 
            $courseMain = Course::where('slug', $course_slug)->first(); 

            $contentMain = CenterCourse::where('center_id',$centerMain->id)->where('course_id',$courseMain->id)->first();
            if(!$contentMain){
                abort(404);
            }
            $carriculams = Curriculum::where('course_id',$courseMain->id)->get();
            
            //Related Courses
            $courses = DB::table('courses')
            ->join('course_type', 'course_type.id', '=', 'courses.type_id')
            ->join('center_courses', 'center_courses.course_id', '=', 'courses.id')
            ->select('courses.*', 'courses.name as course_name','course_type.name as category','course_type.id as category_id')
            ->where('courses.id', '!=', $courseMain->id)
            ->where('courses.type_id', $courseMain->type_id)
            ->where('courses.status', 1)
            ->get();

            return view('centers.course',compact('centerMain','courseMain','courses','carriculams','contentMain'));
        } catch(\Illuminate\Database\QueryException $e){
        }
    }
}
