<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Center;
use App\Models\State;
use App\Models\City;
use App\Models\Course;
use App\Models\Gallery;
use App\Models\CourseType;
use Illuminate\Support\Facades\DB;

class CenterController extends Controller
{
    public function state($slug)
    {
        try {
            $contentMain = State::where('slug', $slug)->first();
            $centers = Center::where('state_id', $contentMain->id);
            $centers->where('status', 1);
            if(isset($_COOKIE['lng']) && isset($_COOKIE['lat'])){
                $centers->orderBy(DB::raw('POW((lng-'."22.707401".'),2) + POW((lat-'."88.387015".'),2)'));
            }
            $centers = $centers->get();
            $states = State::where('status', 1)->get();
            $cities = City::where('state_id', $contentMain->id)->where('status', 1)->orderBy("name","asc")->get();
            return view('centers.index',compact('centers','states','contentMain','cities'));

        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
        
    }

    public function city($slug)
    {
        try {
            
            $contentMain = City::where('slug', $slug)->first();
            $state = State::where('id',$contentMain->state_id)->first();
            $centers = Center::where('city_id', $contentMain->id)->where('status', 1)->get();
            $states = State::where('status', 1)->get();
            $cities = City::where('state_id', $contentMain->state_id)->where('status', 1)->orderBy("name","asc")->get();
            return view('centers.city',compact('centers','states','state','contentMain','cities'));

        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
        
    }

    public function viewCenters($slug)
    {
        try {
            $contentMain = Center::where('slug', $slug)->first();
            $courseType = CourseType::whereIn('id', json_decode($contentMain->courses))->get();
            $courses = DB::table('courses')
            ->join('course_type', 'course_type.id', '=', 'courses.type_id')
            ->select('courses.*', 'courses.name as course_name','course_type.id as category_id','course_type.name as category','course_type.slug as categorySlug')
            ->distinct()
            ->orderBy('courses.id', 'asc')
            ->get();
           
            //$courses = Course::where('status', 1)->get();
            $states = State::where('status', 1)->get();
            $center = $contentMain->name;
            $gallery = DB::table('gallery')->where("center_id",$contentMain->id)->get();
            return view('centers.view',compact('contentMain','center','courses','courseType','gallery','states'));
        } catch(\Illuminate\Database\QueryException $e){
        }
       
    }

    public function getCitiesByStateId(Request $request){
        try {
            $data = $request->all();
            $cities = City::where('state_id', $data['state_id'])->orderBy('name', 'asc')->get();
            return response()->json($cities,$this->_statusOK);
        } catch(\Illuminate\Database\QueryException $e){
        
        }
    }
}
