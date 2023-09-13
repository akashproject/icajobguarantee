<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Center;
use App\Models\CenterCourse;
use Illuminate\Support\Facades\DB;

class CenterCourseController extends Controller
{
    //
    public function index($id)
    {
        try {
            $centerCourses = CenterCourse::where('center_id',$id)->get();
            return view('administrator.centerCourses.index',compact('centerCourses','id'));
        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
        
    }

    public function add($id) {
        $course = Course::all();
        $center = Center::all();
        return view('administrator.centerCourses.add',compact('course','center','id'));
    }

    public function show($id)
    {
        try {
            $centerCourse = CenterCourse::find($id);
            $course = Course::all();
            $center = Center::all();
            return view('administrator.centerCourses.show',compact('centerCourse','course','center'));
        } catch(\Illuminate\Database\QueryException $e){
        }        
    }

    public function save(Request $request) {
        try {
            $data = $request->all();
            $validatedData = $request->validate([
                'center_id' => 'required',
                'course_id' => 'required',
            ]);

            if($data['centerCourse_id'] <= 0){
                $centerCourse = CenterCourse::create($data);
            } else {
                $centerCourse = CenterCourse::findOrFail($data['centerCourse_id']);
                $centerCourse->update($data);
            }

            // Update Faq Meta
            if (isset($data['faq']) && $data['faq']!='' ) {
                $data['faq'] = json_encode($data['faq']);
                $faq = DB::table('faq_meta')->select('id')->where('model','CenterCourse')->where('model_id',$centerCourse->id)->first();
                if($faq === null){
                    DB::table('faq_meta')->insert(['model'=>'CenterCourse','model_id'=>$centerCourse->id,'faqs'=>$data['faq']]);
                } else {
                    DB::table('faq_meta')->where('id', $faq->id)->update(['faqs'=>$data['faq']]);
                }
                
            }

            return redirect()->back()->with('message', 'Course updated successfully!');
        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e->getMessage()); 
        }
    }

    
    public function delete($id) {
        $centerCourse = CenterCourse::findOrFail($id);
        $centerCourse->delete();
        return redirect('/administrator/centerCourses');
    }

}
