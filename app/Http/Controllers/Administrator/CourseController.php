<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\CourseType;

class CourseController extends Controller
{
    //
    public function index()
    {
        try {

            $courses = Course::where('status', 1)->get();
            return view('administrator.courses.index',compact('courses'));

        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
        
    }

    public function add() {
        $courseType = CourseType::all();
        return view('administrator.courses.add',compact('courseType'));
    }

    public function show($id)
    {
        try {
            $course = Course::find($id);
            $courseType = CourseType::all();
            return view('administrator.courses.show',compact('course','courseType'));
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
                'duration' => 'required',
                'no_of_module' => 'required',
                'status' => 'required',
                'utm_campaign' => 'required',
                'utm_source' => 'required',
                'robots' => 'required',
            ]);

            if($data['course_id'] <= 0){
                Course::create($data);
            } else {
                $institute = Course::findOrFail($data['course_id']);
                $institute->update($data);
            }
            return redirect()->back()->with('message', 'Page updated successfully!');
        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e->getMessage()); 
        }
    }

    
    public function delete($id) {
        $course = Course::findOrFail($id);
        $course->delete();
        return redirect('/administrator/courses');
    }

}
