<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Center;
use App\Models\Course;
use App\Models\Enquiry;

class StudentController extends Controller
{
    //

    public function index($step = null)
    {
        $center = (request()->has('center'))?request()->get('center'):"";
        $enquiry = (request()->has('enquiry'))?base64_decode(request()->get('enquiry')):"";

        $centerModel = Center::select('courses')->where('id',$center)->first();
        $courses = Course::whereIn('id',json_decode($centerModel->courses))->get();
        
        
        return view('page.student-enquiry-form',compact('step','center','enquiry'));
    }

    public function enquiryFormSubmit(Request $request)
    {
        try {
            $postData = $request->all();
            
            $validatedData = $request->validate([
                "center_id" => "required",
            ]);

            $step = ($postData['step'] != '')?$postData['step'] += 1:"1";
            if($postData['enquiry'] <= 0){
                $enq = Enquiry::create($postData);
            } else {
                $enq = Enquiry::findOrFail($postData['enquiry']);
                $enq->update($postData);
            }
            if ($step <= 4) {
                return redirect()->route('student-enquiry-form-with-slug', [$step,'center' => '20','enquiry'=> base64_encode($enq->id)]);
            } else {
                return redirect("/walkin-form-thank-you");
            }
            
        } catch (\Illuminate\Database\QueryException $e) {
            var_dump($e);
        }
    }


}
