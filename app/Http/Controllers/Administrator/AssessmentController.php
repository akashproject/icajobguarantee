<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Assessment;
use App\Models\Question;
use App\Models\Course;

class AssessmentController extends Controller
{
    //

    public function index(){
        try {
            $assessments = Assessment::all();
            return view('administrator.assessments.index',compact('assessments'));
        } catch(\Illuminate\Database\QueryException $e){
        }
    }

    public function question($id){
        try {
            $questions = Question::where('assessment_id',$id)->get();
            return view('administrator.questions.index',compact('questions'));
        } catch(\Illuminate\Database\QueryException $e){
        }
    }

    public function add(){
        try {
            $courses = Course::all();

            return view('administrator.assessments.add',compact('courses'));
        } catch(\Illuminate\Database\QueryException $e){
        } 
    }

    public function show($id){
        try {
            $assessment = Assessment::findOrFail($id);
            $courses = Course::all();
            return view('administrator.assessments.show',compact('assessment','courses'));
        } catch(\Illuminate\Database\QueryException $e){
        } 
    }

    public function save(Request $request) {
        try {
            $data = $request->all();
            $validatedData = $request->validate([
                'name' => 'required',
                'description' => 'required',
                'total_mark' => 'required',
                'duration' => 'required',
                'status' => 'required',
            ]);
            if(!isset($data['assessment_id']) && ($data['assessment_id'] == '')){
                Assessment::create($data);
            } else {
                $assessment = Assessment::findOrFail($data['assessment_id']);
                $assessment->update($data);
            }
            return redirect()->back()->with('message', 'Page updated successfully!');
        } catch(\Illuminate\Database\QueryException $e){
        } 
    }

    public function delete($id){
        try {
            $assessment = Assessment::findOrFail($id);
            $assessment->delete();
            return redirect()->back();
        } catch(\Illuminate\Database\QueryException $e){

        } 
    }

}
