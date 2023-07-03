<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\UniversityCourse;
use App\Models\University;
use App\Models\Curriculum;
use App\Models\Review;
use App\Models\Tag;

class CourseController extends Controller
{
    //
    public function __construct()
    {
        $this->layout = (check_device('mobile'))?"mobile.":'';
    }
    
    public function courseListByCategory($slug)
    {
        try {
            $contentMain = University::where('slug', $slug)->first();

            $courses = DB::table('university_courses')
            ->join('universities', 'universities.id', '=', 'university_courses.university_id')
            ->select('university_courses.*', 'university_courses.name as course_name','universities.name as category','universities.id as category_id')
            ->where('universities.slug', $slug)
            ->distinct()
            ->orderBy('university_courses.id', 'asc')
            ->get();

            
            $course_id = $contentMain->id;
            $universities = University::where('status', 1)->get();
            $model = "University";
            return view('courses.index',compact('model','courses','course_id','universities','contentMain'));

        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
    }

    public function viewCourse($slug)
    {
        try {

            $contentMain = UniversityCourse::where('slug', $slug)->first();
            if ($contentMain->tags) {
                $contentMain->tags = Tag::select('name','slug')->whereIn("id",json_decode($contentMain->tags))->get();
            }
            $course_id = $contentMain->university_id;
            $carriculams = Curriculum::where('course_id',$contentMain->id)->get();

            //Related UniversityCourses
            $courses = DB::table('university_courses')
            ->join('universities', 'universities.id', '=', 'university_courses.university_id')
            ->select('university_courses.*', 'university_courses.name as course_name','universities.name as category','universities.id as category_id')
            ->where('university_courses.id', '!=', $contentMain->id)
            ->where('university_id', $contentMain->university_id)->get();

            $model = "UniversityCourse";
            $utm_campaign = $contentMain->utm_campaign;
            $utm_source = $contentMain->utm_source;

            return view($this->layout.'courses.view',compact('model','contentMain','course_id','carriculams','courses'));
        } catch(\Illuminate\Database\QueryException $th){
            throw $th;
        }
    }
}
