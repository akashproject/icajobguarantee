<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Traits\LeadSubmitAfterProcess;
use App\Models\Lead;
use Cookie;
use Session;
use App\Models\Brochure;
use App\Models\Center;
use App\Models\City;
use App\Models\State;
use App\Models\Pincode;

class JobFairController extends Controller
{
    //
    use LeadSubmitAfterProcess;
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
                dd($postData);
                $crmResponse = $this->b2cLeadCaptureToExtraage($postData);
                $leadFromdb->update(['crm_status' => "1","crm_response"=>$crmResponse]);
            }
            $this->cognoai_api_calling($postData,"225974"); 

            return redirect("/job-fair-thank-you");
        } catch (\Illuminate\Database\QueryException $e) {
            return response()->json($e, $this->_statusOK);
        }
    }

    public function jobFairAmbedkarCollege(Request $request) {
        try {

            $postData = $request->all();
            $validatedData = $request->validate([
                "name" => "required",
                "mobile" => "required",
            ]);

            if($postData["lead_id"] != '') {
                $leadFromdb = Lead::findOrFail($postData["lead_id"]);
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
                $crmResponse = $this->b2cLeadCaptureToExtraage($postData);
                $leadFromdb->update(['crm_status' => "1","crm_response"=>$crmResponse]);
            }
            $this->cognoai_api_calling($postData,"225630"); 
            return redirect("/job-fair-thank-you");
        } catch (\Illuminate\Database\QueryException $e) {
            return response()->json($e, $this->_statusOK);
        }
    }
    
    public function jobFairMotijheelRabindraMahavidyalayaCollege(Request $request) {
        try {
            $postData = $request->all();
            $validatedData = $request->validate([
                "name" => "required",
                "mobile" => "required",
            ]);

            if($postData["lead_id"] != '') {
                $leadFromdb = Lead::findOrFail($postData["lead_id"]);
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
                $crmResponse = $this->b2cLeadCaptureToExtraage($postData);
                $leadFromdb->update(['crm_status' => "1","crm_response"=>$crmResponse]);
            }
        } catch (\Illuminate\Database\QueryException $e) {
            return response()->json($e, $this->_statusOK);
        }
    }
}