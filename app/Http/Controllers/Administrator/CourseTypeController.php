<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CourseType;

class CourseTypeController extends Controller
{
    //Course Type
    public function index()
    {
        try {

            $courseType = CourseType::all();
            return view('administrator.coursetype.index',compact('courseType'));

        } catch(\Illuminate\Database\QueryException $e){
            throw $e;
        }
        
    }

    public function add() {
        return view('administrator.coursetype.add');
    }

    public function show($id)
    {
        try {
            $courseType = CourseType::find($id);
            $listCourseType = CourseType::all();
            return view('administrator.coursetype.show',compact('courseType','listCourseType'));
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

            if($data['course_id'] <= 0){
                CourseType::create($data);
            } else {
                $institute = CourseType::findOrFail($data['course_id']);
                $institute->update($data);
            }
            return redirect('/administrator/course-type');
        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e->getMessage()); 
        }
    }

    
    public function delete($id) {
        $course = CourseType::findOrFail($id);
        $course->delete();
        return redirect('/administrator/courses');
    }
}
