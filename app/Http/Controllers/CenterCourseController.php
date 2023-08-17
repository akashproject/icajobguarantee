<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CenterCourseController extends Controller
{
    //
    public function viewCourse(Request $request)
    {
        try {
            $parameter = $request->parameter;
            print_r($parameter);exit;
            $contentMain = Course::where('slug', $slug)->first();
            if ($contentMain->tags) {
                $contentMain->tags = Tag::select('name','slug')->whereIn("id",json_decode($contentMain->tags))->get();
            }
            $course_id = $contentMain->type_id;
            $carriculams = Curriculum::where('course_id',$contentMain->id)->get();

            //Related Courses
            $courses = DB::table('courses')
            ->join('course_type', 'course_type.id', '=', 'courses.type_id')
            ->select('courses.*', 'courses.name as course_name','course_type.name as category','course_type.id as category_id')
            ->where('courses.id', '!=', $contentMain->id)
            ->where('type_id', $contentMain->type_id)->get();

            $model = "Course";
            $utm_campaign = $contentMain->utm_campaign;
            $utm_source = $contentMain->utm_source;

            return view($this->layout.'courses.view',compact('model','contentMain','course_id','carriculams','courses'));
        } catch(\Illuminate\Database\QueryException $e){
        }
    }
}
