<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\CourseType;
use App\Models\Curriculum;
use App\Models\Review;

class CourseController extends Controller
{
    //

    public function index(Request $request)
    {
        try {
            $search = (request()->has('search'))?request()->get('search'):"";
            $courses = DB::table('courses')
            ->join('course_type', 'course_type.id', '=', 'courses.type_id')
            ->select('courses.*', 'courses.name as course_name','course_type.name as category','course_type.id as category_id');
            if($search){
                $courses->where('courses.name', 'like', '%' . $search . '%');
                $courses->where('courses.description', 'like', '%' . $search . '%');
                $courses->orWhere('course_type.name', 'like', '%' . $search . '%');
                $courses->orWhere('course_type.slug', 'like', '%' . $search . '%');
            }
            $courses = $courses->distinct()
            ->orderBy('courses.id', 'asc')
            ->get();
            $courseTypes = CourseType::where('status', 1)->get();
            $model = "Course";
            return view('courses.index',compact('model','courses','courseTypes'));
        } catch(\Illuminate\Database\QueryException $e){
            throw $e;
        }
        
    }

    public function courseListByCategory($slug)
    {
        try {
            $courses = DB::table('courses')
            ->join('course_type', 'course_type.id', '=', 'courses.type_id')
            ->select('courses.*', 'courses.name as course_name','course_type.name as category','course_type.id as category_id')
            ->where('course_type.slug', $slug)
            ->distinct()
            ->orderBy('courses.id', 'asc')
            ->get();

            $category = CourseType::where('slug', $slug)->first();
            $course_id = $category->id;
            $courseTypes = CourseType::where('status', 1)->get();
            $model = "CourseType";
            $utm_campaign = $category->utm_campaign;
            $utm_source = $category->utm_source;
            return view('courses.index',compact('model','courses','course_id','courseTypes','category','utm_campaign','utm_source'));

        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
    }


    public function viewCourse($slug)
    {
        try {
            $course = Course::where('slug', $slug)->first();
            $course_id = $course->type_id;
            $carriculams = Curriculum::where('course_id',$course->id)->get();
            $courses = DB::table('courses')
            ->join('course_type', 'course_type.id', '=', 'courses.type_id')
            ->select('courses.*', 'courses.name as course_name','course_type.name as category','course_type.id as category_id')
            ->where('courses.id', '!=', $course->id)
            ->where('type_id', $course->type_id)->get();
            $model = "Course";
            $utm_campaign = $course->utm_campaign;
            $utm_source = $course->utm_source;
            return view('courses.view',compact('model','course','course_id','carriculams','courses','utm_campaign','utm_source'));
        } catch(\Illuminate\Database\QueryException $e){
        }
    }

}
