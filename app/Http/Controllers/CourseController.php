<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\CourseType;
use App\Models\Curriculum;
use App\Models\Review;
use App\Models\Tag;
class CourseController extends Controller
{
    public function __construct()
    {
        $this->layout = (check_device('mobile'))?"mobile.":'';
    }
    public function courseListByCategory($slug)
    {
        try {
            $contentMain = CourseType::where('slug', $slug)->first();

            $courses = DB::table('courses')
            ->join('course_type', 'course_type.id', '=', 'courses.type_id')
            ->select('courses.*', 'courses.name as course_name','course_type.name as category','course_type.id as category_id')
            ->where('course_type.slug', $slug)
            ->distinct()
            ->orderBy('courses.id', 'asc')
            ->get();

            
            $course_id = $contentMain->id;
            $courseTypes = CourseType::where('status', 1)->get();
            $model = "CourseType";
            return view('courses.index',compact('model','courses','course_id','courseTypes','contentMain'));

        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
    }

    public function viewCourse($slug)
    {
        try {

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
