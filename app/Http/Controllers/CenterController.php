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
    //
    public function index()
    {
        try {
            $pincode = (request()->has('pincode'))?request()->get('pincode'):"";
            $centers = Center::where('status', 1);
            if($pincode){
                $centers->where('center_pincode', 'like', '%"' . $pincode . '"%');
            }
            $centers = $centers->get();
            $states = State::where('status', 1)->orderBy("name","asc")->get();
            $courseTypes = CourseType::where('status', 1)->get();
            return view('centers.index',compact('centers','states','pincode','courseTypes'));

        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
        
    }

    public function state($slug)
    {
        try {
            $state = State::where('slug', $slug)->first();
            $centers = Center::where('state_id', $state->id)->where('status', 1)->get();
            $states = State::where('status', 1)->get();
            $cities = City::where('state_id', $state->id)->where('status', 1)->orderBy("name","asc")->get();
            return view('centers.index',compact('centers','states','state','cities'));

        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
        
    }

    public function city($slug)
    {
        try {
            
            $city = City::where('slug', $slug)->first();
            $state = State::where('id',$city->state_id)->first();
            $centers = Center::where('city_id', $city->id)->where('status', 1)->get();
            $states = State::where('status', 1)->get();
            $cities = City::where('state_id', $city->state_id)->where('status', 1)->orderBy("name","asc")->get();
            return view('centers.city',compact('centers','states','state','city','cities'));

        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
        
    }

    public function viewCenters($slug)
    {
        try {
            $contentMain = Center::where('slug', $slug)->first();
            $courses = Course::where('status', 1)->get();
            $states = State::where('status', 1)->get();
            $center_id = $contentMain->id;
            $gallery = DB::table('gallery')->where("center_id",$contentMain->id)->get();
            $utm_campaign = $contentMain->utm_campaign;
            $utm_source = $contentMain->utm_source;
            return view('centers.view',compact('contentMain','center_id','courses','gallery','states','utm_campaign','utm_source'));
        } catch(\Illuminate\Database\QueryException $e){
        }
       
    }

    
}
