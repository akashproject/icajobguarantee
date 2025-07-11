<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lam;
use App\Models\CourseType;
use Illuminate\Support\Facades\DB;
use App\Traits\LamLeadSubmitAfterProcess;
use App\Models\Lead;
use Cookie;
use Session;
use App\Models\Brochure;
use App\Models\Center;
use App\Models\City;
use App\Models\State;
use App\Models\Pincode;
class LamController extends Controller
{
    use LamLeadSubmitAfterProcess;
    public function index($slug,Request $request)
    {
        try {
            $center = ($request->has("center"))?$request->input('center'):null;
            $contentMain = Lam::where('slug', $slug)->firstOrFail();
            $courseType = null;
            $courses = null;
            if ($contentMain->course_type_id) {
                $course_id = [];
                if($contentMain->course_id){
                    $course_id[] = $contentMain->course_id;
                } else {
                    $courses = DB::table('courses')->select('id')->whereIn('type_id',json_decode($contentMain->course_type_id))->get()->toArray();
                    foreach ($courses as $key => $value) {
                        $course_id[$key] = $value->id;
                    }
                }
                
                $courseType = CourseType::whereIn('id', json_decode($contentMain->course_type_id))->get();
                $courses = DB::table('courses')
                ->join('course_type', 'course_type.id', '=', 'courses.type_id')
                ->select('courses.*', 'courses.name as course_name','course_type.id as category_id','course_type.name as category','course_type.slug as categorySlug')
                ->whereIn('course_type.id', json_decode($contentMain->course_type_id))
                ->whereIn('courses.id', $course_id)
                ->where('courses.status', 1)
                ->distinct()
                ->orderBy('courses.id', 'asc')
                ->get();
            }
            return view("lams.".$contentMain->template,compact('center','contentMain','courseType','courses'));

        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
            var_dump($th);
        }
    }

    public function captureLead(Request $request)
    {
        try {
            $postData = $request->all();
            $validatedData = $request->validate([
                "name" => "required",
                "mobile" => "required",
            ]);
            if($postData["lead_id"] != '') {
                $leadFromdb = Lead::findOrFail($postData["lead_id"]);
                $leadFromdb->update($postData);
            }
            // is lead input otp
            if($postData["verify_otp"] != ''){
                $leadFromdb->update(['otp_status' => "1"]);
            }
            
            if($postData["store_area"] == 1) {
                $nameArray = explode(" ", $postData["name"]);
                $postData["firstname"] = current(explode(" ", $postData["name"]));
                unset($nameArray["0"]);
                $postData["lastname"] = implode(" ", $nameArray);
                $crmResponse = $this->leadCaptureToExtraageRawList($postData);
                $leadFromdb->update(['crm_status' => "1","crm_response"=>$crmResponse]);
            }

            if ($postData['whatsapp_campaign_id'] != '') {
                $this->cognoai_api_calling($postData,$postData['whatsapp_campaign_id']);
            }
            
            return redirect("/thank-you");
        } catch (\Illuminate\Database\QueryException $e) {
            return response()->json($e, $this->_statusOK);
        }
    }


}
