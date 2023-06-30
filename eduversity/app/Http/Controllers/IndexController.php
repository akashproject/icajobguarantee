<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\UniversityCourse;
use App\Models\University;

use Mail;
class IndexController extends Controller
{
    //
    public $_statusOK = 200;
    public $_statusErr = 500;

    public function __construct()
    {
        $this->layout = (check_device('mobile'))?"mobile.":'';
    }

    public function index(Request $request) {
        try {
            $courses = DB::table('university_courses')
            ->join('universities', 'universities.id', '=', 'university_courses.university_id')
            ->select('university_courses.*', 'university_courses.name as course_name','universities.id as university_id','universities.name as university','universities.slug as university_slug')
            ->distinct()
            ->orderBy('university_courses.id', 'asc')
            ->get();
            $universities = University::where('status', 1)->get();

            return view($this->layout.'index',compact('courses','universities'));
        } catch(\Illuminate\Database\QueryException $th){
            throw $th;
        }
        
    }

}