<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adspage;
use App\Models\CourseType;
use Illuminate\Support\Facades\DB;

class AdPageController extends Controller
{
    public function index($slug)
    {
        try {
            //echo $slug; exit;
            $contentMain = Adspage::where('slug', $slug)->firstOrFail();
            $courseType = null;
            $courses = null;
            if ($contentMain->course_type_id) {
                # code...
                $courseType = CourseType::whereIn('id', json_decode($contentMain->course_type_id))->get();
                $courses = DB::table('courses')
                ->join('course_type', 'course_type.id', '=', 'courses.type_id')
                ->select('courses.*', 'courses.name as course_name','course_type.id as category_id','course_type.name as category','course_type.slug as categorySlug')
                ->distinct()
                ->orderBy('courses.id', 'asc')
                ->get();
            }
            // $contentMain = Adspage::all();
            // $contentMain = $contentMain->firstOrFail();
            //print_r($contentMain->template); exit;
            return view("adPage.".$contentMain->template,compact('contentMain','courseType','courses'));

        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
            var_dump($th);
        }
    }
}