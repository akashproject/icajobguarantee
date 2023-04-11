<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TagController extends Controller
{
    //
    public function index($slug){
        try {
            $contentMain = DB::table('courses')
            ->join('blogs', 'course_type.id', '=', 'courses.type_id')
            ->select('courses.*', 'courses.name as course_name','course_type.name as category','course_type.id as category_id')
            ->where('course_type.slug', $slug)
            ->distinct()
            ->orderBy('courses.id', 'asc')
            ->get();
            return view('tags.index');
        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
    }
}
