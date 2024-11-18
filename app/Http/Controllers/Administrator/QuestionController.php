<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Assessment;
use App\Models\Answer;

class QuestionController extends Controller
{
    //
    public function index(){
        try {
            $questions = Question::all();
            return view('administrator.questions.index',compact('questions'));
        } catch(\Illuminate\Database\QueryException $e){
        }
    }

    public function add(){
        try {
            $assessments = Assessment::all();
            return view('administrator.questions.add',compact('assessments'));
        } catch(\Illuminate\Database\QueryException $e){
        } 
    }

    public function show($id){
        try {
            $assessments = Assessment::all();
            $question = Question::findOrFail($id);
            $answers = Answer::where('question_id',$id)->get();
            return view('administrator.questions.show',compact('assessments','question','answers'));
        } catch(\Illuminate\Database\QueryException $e){
        } 
    }


    public function save(Request $request) {
        try {
            $data = $request->all();
            
            $validatedData = $request->validate([
                'question' => 'required',
                'description' => 'required',
                'score' => 'required',
                'status' => 'required',
            ]);
            if(!isset($data['question_id']) && ($data['question_id'] == '')){
                $question = Question::create($data);
                foreach ($data['answer'] as $key => $value) {
                    $value['question_id'] = $question->id;
                    $value['is_true'] = (isset($value['is_true']))?$value['is_true']:null;
                    $answer = Answer::create($value);
                }
            } else {
                $institute = Question::findOrFail($data['question_id']);
                $institute->update($data);
                foreach ($data['answer'] as $key => $value) {
                    $value['is_true'] = (isset($value['is_true']))?$value['is_true']:null;
                    $answer = Answer::findOrFail($key);
                    $answer->update($value);
                }

            }
            return redirect()->back()->with('message', 'Page updated successfully!');
        } catch(\Illuminate\Database\QueryException $e){
        } 
    }

    public function delete($id){
        try {
            $question = Question::findOrFail($id);
            if($question->delete()){
                DB::table('answers')->where('question_id', $id)->delete();
            }
            return redirect()->back()->with('message', 'Question deleted successfully!');
        } catch(\Illuminate\Database\QueryException $e){
        } 
    }

}
