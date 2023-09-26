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

            $contentMain = CenterCourse::where('slug',$course_slug)->where('center_id',$centerMain->id)->first();
            if(!$contentMain){
                abort(404);
            }
            $center = $centerMain->name;
            //Related Courses
            $courses = DB::table('courses')
            ->whereIn('id', json_decode($contentMain->course_id))
            ->get();

            return view('centers.course',compact('centerMain','courses','center','contentMain'));
        } catch(\Illuminate\Database\QueryException $e){
        }
    }
}
