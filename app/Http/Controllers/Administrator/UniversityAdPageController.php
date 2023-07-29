<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UniversityAdspage;
use App\Models\University;
use App\Models\UniversityCourse;

class UniversityAdPageController extends Controller
{
    //
    public function index()
    {
        try {
            $universityAdpages = UniversityAdspage::all();
            
            return view('administrator.universityAdpages.index',compact('universityAdpages'));

        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }        
    }

    public function add() {
        try {
            $universities = University::all();
            return view('administrator.universityAdpages.add',compact('universities'));
        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
    }

    public function show($id)
    {
        try {
            $universities = University::all();
            $adPage = UniversityAdspage::findorFail($id);
            return view('administrator.universityAdpages.show',compact('adPage','universities'));
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
                UniversityAdspage::create($data);
            } else {
                $adPage = UniversityAdspage::findOrFail($data['adPage_id']);
                $adPage->update($data);
            }
            return redirect()->back()->with('message', 'Ad Page updated successfully!');
        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e->getMessage()); 
        }
    }

    public function delete($id) {
        $course = UniversityAdspage::findOrFail($id);
        $course->delete();
        return redirect('/administrator/ad-pages');
    }
}
