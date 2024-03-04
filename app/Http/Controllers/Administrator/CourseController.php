<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\CourseType;
use App\Models\Curriculum;
use App\Models\Tag;
use App\Models\Brochure;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    //
    public function index()
    {
        try {
            $courses = Course::all();
            return view('administrator.courses.index',compact('courses'));

        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
        
    }

    public function add() {
        $courseType = CourseType::all();
        $brochures = Brochure::all();
        return view('administrator.courses.add',compact('courseType','brochures'));
    }

    public function show($id)
    {
        try {
            $course = Course::find($id);
            if ($course->tags != '') {
                $course->tags = Tag::select('id','name')->whereIn("id",json_decode($course->tags))->get();
            }
            $brochures = Brochure::all();
            
            $courseType = CourseType::all();

            $faq = DB::table('faq_meta')->select('faqs')->where('model','Course')->where('model_id',$course->id)->first();
            if($faq !== null){
                $faq = json_decode($faq->faqs,true);
            } else {
                $faq = [];
            }
            
            return view('administrator.courses.show',compact('course','courseType','brochures','faq'));
        } catch(\Illuminate\Database\QueryException $e){
        }        
    }

    public function curriculum($id){
        try {
            $carriculam = Curriculum::where('course_id',$id)->get();
            $course = Course::find($id);
            return view('administrator.courses.curriculum',compact('carriculam','id','course'));       
        } catch(\Illuminate\Database\QueryException $e){
        }     
    }

    public function save(Request $request) {
        try {
            $data = $request->all();
            $validatedData = $request->validate([
                'name' => 'required',
                'slug' => 'required',
                'no_of_module' => 'required',
            ]);

            if(isset($data['tags'])) {
                $data['tags'] = json_encode($data['tags']);
            }

            if (isset($data['blog']) && $data['blog']!='' ) {
                $data['blog'] = json_encode($data['blog']);  
            }

            if($data['course_id'] <= 0){
                $course = Course::create($data);
                if($course->id){
                    $carriculam = array_fill(0,$data['no_of_module'],array('course_id'=>$course->id));
                    foreach ($carriculam as $key => $value) {
                        Curriculum::create($value);
                    }
                }
            } else {
                $course = Course::findOrFail($data['course_id']);
                $carriculam = Curriculum::where('course_id',$data['course_id'])->get();
                if($carriculam->count() < $data['no_of_module']){
                    $carriculam = array_fill(0,$data['no_of_module'] - $carriculam->count(),array('course_id'=>$course->id));
                    foreach ($carriculam as $key => $value) {
                        Curriculum::create($value);
                    }
                }
                $course->update($data);
            }

            // Update Faq Meta
            if (isset($data['faq']) && $data['faq']!='' ) {

                $data['faq'] = json_encode($data['faq']);
                $faq = DB::table('faq_meta')->select('id')->where('model','Course')->where('model_id',$course->id)->first();
                if($faq === null){
                    DB::table('faq_meta')->insert(['model'=>'Course','model_id'=>$course->id,'faqs'=>$data['faq']]);
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
        $course = Course::findOrFail($id);
        $course->delete();
        return redirect('/administrator/courses');
    }

    public function saveCurriculum(Request $request){
        try {
            $data = $request->all();
            foreach ($data['curriculum'] as $key => $value) {
                $value['lecture'] = (isset($value['lecture']))?json_encode($value['lecture']):'';
                $carriculam = Curriculum::findOrFail($key);
                $carriculam->update($value);
            }
            return redirect()->back()->with('message', 'Page updated successfully!');
        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e->getMessage()); 
        }
    }

}
