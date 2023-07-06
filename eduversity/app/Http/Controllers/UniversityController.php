<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\University;

class UniversityController extends Controller
{

    public function view($slug,Request $request)
    {
        try {
            $center = ($request->has("center"))?$request->input('center'):null;
            $contentMain = University::where('slug', $slug)->where('status', 1);
            $contentMain = $contentMain->firstOrFail();
            $university = $contentMain->name;
            return view("university.view",compact('contentMain','university'));

        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
    }
}