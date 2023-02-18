<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Models\Course;

class TestimonialController extends Controller
{
    //
    public function index()
    {
        try {
            $testimonials = Testimonial::all();
            return view('administrator.testimonials.index',compact('testimonials'));
        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }        
    }

    public function add() {
        try {
            $courses = Course::all();
            return view('administrator.testimonials.add',compact('courses'));
        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
    }

    public function show($id)
    {
        try {
            $testimonial = Testimonial::findOrFail($id);
            $courses = Course::all();
            return view('administrator.testimonials.show',compact('testimonial','courses'));
        } catch(\Illuminate\Database\QueryException $e){
        }        
    }

    public function save(Request $request) {
        try {
            $data = $request->all();
            $validatedData = $request->validate([
                'name' => 'required',
                'comment' => 'required',
                'course_id' => 'required',
            ]);

            if($data['testimonial_id'] <= 0){
                Testimonial::create($data);
            } else {
                $testimonial = Testimonial::findOrFail($data['testimonial_id']);
                $testimonial->update($data);
            }
            return redirect()->back()->with('message', 'Testimonial updated successfully!');
        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e->getMessage()); 
        }
    }
}
