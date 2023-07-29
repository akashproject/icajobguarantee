<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\University;
use App\Models\UniversityCourse;
use App\Models\Brochure;
use App\Models\UniversityCourseCurriculum;

class UniversityCourseController extends Controller
{
    public function index()
    {
        try {
            $universityCourses = UniversityCourse::all();
            return view('administrator.universityCourses.index',compact('universityCourses'));

        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
        
    }

    public function add() {
        $brochures = Brochure::all();
        return view('administrator.universityCourses.add',compact('university','brochures'));
    }

    public function show($id)
    {
        try {
            $universityCourse = UniversityCourse::find($id);
            if ($universityCourse->tags != '') {
                $universityCourse->tags = Tag::select('id','name')->whereIn("id",json_decode($universityCourse->tags))->get();
            }
            $brochures = Brochure::all();
            return view('administrator.universityCourses.show',compact('universityCourse','university','brochures'));
        } catch(\Illuminate\Database\QueryException $e){
        }        
    }

    public function curriculum($id){
        try {
            $carriculam = UniversityCourseCurriculum::where('course_id',$id)->get();
            return view('administrator.universityCourses.curriculum',compact('carriculam','id'));       
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
            if($data['course_id'] <= 0){
                $universityCourse = UniversityCourse::create($data);
                if($universityCourse->id){
                    $carriculam = array_fill(0,$data['no_of_module'],array('course_id'=>$universityCourse->id));
                    foreach ($carriculam as $key => $value) {
                        UniversityCourseCurriculum::create($value);
                    }
                }
            } else {
                $universityCourse = UniversityCourse::findOrFail($data['course_id']);
                $carriculam = UniversityCourseCurriculum::where('course_id',$data['course_id'])->get();
                if($carriculam->count() < $data['no_of_module']){
                    $carriculam = array_fill(0,$data['no_of_module'] - $carriculam->count(),array('course_id'=>$universityCourse->id));
                    foreach ($carriculam as $key => $value) {
                        UniversityCourseCurriculum::create($value);
                    }
                }
                $universityCourse->update($data);
            }
            return redirect()->back()->with('message', 'UniversityCourse updated successfully!');
        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e->getMessage()); 
        }
    }

    
    public function delete($id) {
        try {
            $universityCourse = UniversityCourse::findOrFail($id);
            $universityCourse->delete();
            return redirect('/administrator/university-courses');
        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e->getMessage()); 
        }
    }

    public function saveCurriculum(Request $request){
        try {
            $data = $request->all();
            foreach ($data['curriculum'] as $key => $value) {
                $value['lecture'] = (isset($value['lecture']))?json_encode($value['lecture']):'';
                $carriculam = UniversityCourseCurriculum::findOrFail($key);
                $carriculam->update($value);
            }
            return redirect()->back()->with('message', 'Page updated successfully!');
        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e->getMessage()); 
        }
    }
}
