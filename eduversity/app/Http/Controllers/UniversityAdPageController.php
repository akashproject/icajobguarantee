<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UniversityAdspage;
use App\Models\University;
use App\Models\UniversityCourse;
use App\Models\State;

class UniversityAdPageController extends Controller
{
    //
    public function index($slug,Request $request)
    {
        try {
            $contentMain = UniversityAdspage::where('slug', $slug)->firstOrFail();
            $university = null;
            $courses = null;
            
            if ($contentMain->university_id) {
                $university = University::where('id', $contentMain->university_id)->first();
                $courses = UniversityCourse::whereIn('id',json_decode($university->courses));
            }
            // $contentMain = Adspage::all();
            // $contentMain = $contentMain->firstOrFail();
            //print_r($contentMain->template); exit;
            return view("universityAdPage.".$contentMain->template,compact('university','contentMain','courses'));

        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
            var_dump($th);
        }
    }
}
