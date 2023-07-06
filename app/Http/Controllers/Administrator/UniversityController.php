<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\University;
use App\Models\State;
use App\Models\City;
use App\Models\UniversityCourse;

class UniversityController extends Controller
{
    //
    public function index(Request $request)
    {
        try {

            $universities = University::all();
            return view('administrator.university.index',compact('universities'));
            
        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
    }

    public function add() {
        try {
            $states = State::all();
            $courses = UniversityCourse::all();
            return view('administrator.university.add',compact('states','courses'));
        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
        
    }

    public function show($id)
    {
        try {
            $university = University::find($id);
            $university->courses = json_decode($university->courses);
            $states = State::all();
            $cities = City::where('state_id', $university->state_id)->orderBy('name', 'asc')->get();
            $courses = UniversityCourse::all();
            return view('administrator.university.show',compact('university','states','cities','courses'));
        } catch(\Illuminate\Database\QueryException $e){
        }        
    }

    public function save(Request $request) {
        try {
            $data = $request->all();
            $validatedData = $request->validate([
                'title' => 'required',
                'slug' => 'required',
                'description' => 'required',
                'state_id' => 'required',
            ]);
            $data['courses'] = json_encode($data['courses']);
            if($data['university_id'] <= 0){
                University::create($data);
            } else {
                $institute = University::findOrFail($data['university_id']);
                $institute->update($data);
            }
            return redirect()->back()->with('message', 'Page updated successfully!');
        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e->getMessage()); 
        }
    }

    public function delete($id) {
        echo $id; exit;
        $center = University::findOrFail($id);
        $center->delete();
        return redirect('/administrator/universities');
    }
}
