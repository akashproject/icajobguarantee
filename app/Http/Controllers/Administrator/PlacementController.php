<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Placement;
use App\Models\Course;
use App\Models\Recruiter;
use App\Models\Center;
class PlacementController extends Controller
{
    //
    //
    public function index()
    {
        try {
            $placements = Placement::all();
            return view('administrator.placements.index',compact('placements'));
        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }        
    }

    public function add() {
        try {
            
            $courses = Course::all();
            $recruiters = Recruiter::all();
            $centers = Course::all();
            return view('administrator.placements.add',compact('centers','courses','recruiters'));
        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
    }

    public function show($id)
    {
        try {
            $placement = Placement::findOrFail($id);
            $courses = Course::all();
            $recruiters = Recruiter::all();
            $centers = Course::all();
            return view('administrator.placements.show',compact('placement','courses','centers','recruiters'));
        } catch(\Illuminate\Database\QueryException $e){
        }        
    }

    public function save(Request $request) {
        try {
            $data = $request->all();
            $validatedData = $request->validate([
                'name' => 'required',
                'bio' => 'required',
                'course_id' => 'required',
                'placed_at' => 'required',
            ]);
            if($data['placement_id'] <= 0){
                Placement::create($data);
            } else {
                $placement = Placement::findOrFail($data['placement_id']);
                $placement->update($data);
            }
            return redirect()->back()->with('message', 'Placement updated successfully!');
        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e->getMessage()); 
        }
    }
}
