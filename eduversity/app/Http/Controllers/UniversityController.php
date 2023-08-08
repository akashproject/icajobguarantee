<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\University;
use App\Models\State;
use App\Models\City;

class UniversityController extends Controller
{

    public function state($slug)
    {
        try {
            $contentMain = State::where('slug', $slug)->first();
            $universities = University::where('state_id', $contentMain->id);
            $universities->where('status', 1);
            if(isset($_COOKIE['lng']) && isset($_COOKIE['lat'])){
                $universities->orderBy(DB::raw('POW((lng-'."22.707401".'),2) + POW((lat-'."88.387015".'),2)'));
            }
            $universities = $universities->get();
            //select * from `universities` where `state_id` = 35 and `status` = '1'
            $states = State::where('status', 1)->get();
            $cities = City::where('state_id', $contentMain->id)->where('status', 1)->orderBy("name","asc")->get();
            return view('university.index',compact('universities','states','contentMain','cities'));

        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
        
    }

    public function city($slug)
    {
        try {
            
            $contentMain = City::where('slug', $slug)->first();
            $state = State::where('id',$contentMain->state_id)->first();
            $universities = University::where('city_id', $contentMain->id)->where('status', 1)->get();
            $states = State::where('status', 1)->get();
            $cities = City::where('state_id', $contentMain->state_id)->where('status', 1)->orderBy("name","asc")->get();
            return view('university.city',compact('universities','states','state','contentMain','cities'));

        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
        
    }

    public function view($slug,Request $request)
    {
        try {
            $contentMain = University::where('slug', $slug)->where('status', 1);
            $contentMain = $contentMain->firstOrFail();
            $university = $contentMain->name;
            return view("university.view",compact('contentMain','university'));

        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
    }
}