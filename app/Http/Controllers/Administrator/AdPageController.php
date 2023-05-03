<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Adspage;
use App\Models\CourseType;
use App\Models\Center;

class AdPageController extends Controller
{
    public function index()
    {
        try {
            $adPages = Adspage::all();
            
            return view('administrator.adPages.index',compact('adPages'));

        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }        
    }

    public function add() {
        try {
            $courseType = CourseType::all();
            $centers = Center::all();
            return view('administrator.adPages.add',compact('courseType','centers'));
        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
    }

    public function show($id)
    {
        try {
            $courseType = CourseType::all();
            $centers = Center::all();
            $adPage = Adspage::findorFail($id);
            return view('administrator.adPages.show',compact('adPage','courseType','centers'));
        } catch(\Illuminate\Database\QueryException $e){
        }        
    }

    public function save(Request $request) {
        try {
            $data = $request->all();
            $validatedData = $request->validate([
                'title' => 'required',
                'slug' => 'required',
            ]);
           
            if($data['adPage_id'] <= 0){
                Adspage::create($data);
            } else {
                $adPage = Adspage::findOrFail($data['adPage_id']);
                $adPage->update($data);
            }
            return redirect()->back()->with('message', 'Ad Page updated successfully!');
        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e->getMessage()); 
        }
    }
}
