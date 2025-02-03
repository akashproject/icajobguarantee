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

            $nameArray = explode(" ", $postData["name"]);
            $postData["firstname"] = current(explode(" ", $postData["name"]));
            unset($nameArray["0"]);
            $postData["lastname"] = implode(" ", $nameArray);

            if(isset($postData["center"]) && $postData["center"] != "") {
                $city = Center::select("city_id")
                    ->where("name", $postData["center"])
                    ->first();
                $postData["city"] = City::where(
                    "id",
                    $city->city_id
                )->first()->name;
            } else {
                //center by pincode
                $pincode = DB::table("pincodes")
                    ->leftjoin(
                        "centers",
                        "pincodes.center_id",
                        "=",
                        "centers.id"
                    )
                    ->leftjoin("cities", "pincodes.city_id", "=", "cities.id")
                    ->select("centers.name as center", "cities.name as city")
                    ->where("pincodes.name", $postData["pincode"])
                    ->where("centers.status", 1)
                    ->inRandomOrder()
                    ->first();
                $postData["city"] = $pincode ? $pincode->city : "";
                $postData["center"] = $pincode ? $pincode->center : "unknown";
            }
            $postData["role"] = "b2c";

            if($postData["lead_id"] != '') {
                $leadFromdb = Lead::findOrFail($postData["lead_id"]);
                $leadFromdb->update(['otp_status' => "1"]);
            } else {
                $leadFromdb = $this->captureLeadToDB($postData);
            }
            Session::put('lead_id',$leadFromdb->id);

            $this->classroomLeadCaptureToExtraage($postData);
            $this->sendJobFairEmailNotification($postData);
            $this->jobFairCognoai_api_calling($postData); //Email Notification

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

            $nameArray = explode(" ", $postData["name"]);
            $postData["firstname"] = current(explode(" ", $postData["name"]));
            unset($nameArray["0"]);
            $postData["lastname"] = implode(" ", $nameArray);

            if(isset($postData["center"]) && $postData["center"] != "") {
                $city = Center::select("city_id")
                    ->where("name", $postData["center"])
                    ->first();
                $postData["city"] = City::where(
                    "id",
                    $city->city_id
                )->first()->name;
            } else {
                //center by pincode
                $pincode = DB::table("pincodes")
                    ->leftjoin(
                        "centers",
                        "pincodes.center_id",
                        "=",
                        "centers.id"
                    )
                    ->leftjoin("cities", "pincodes.city_id", "=", "cities.id")
                    ->select("centers.name as center", "cities.name as city")
                    ->where("pincodes.name", $postData["pincode"])
                    ->where("centers.status", 1)
                    ->inRandomOrder()
                    ->first();
                $postData["city"] = $pincode ? $pincode->city : "";
                $postData["center"] = $pincode ? $pincode->center : "unknown";
            }
            $postData["role"] = "b2c";

            if($postData["lead_id"] != '') {
                $leadFromdb = Lead::findOrFail($postData["lead_id"]);
                $leadFromdb->update(['otp_status' => "1"]);
            } else {
                $leadFromdb = $this->captureLeadToDB($postData);
            }
            Session::put('lead_id',$leadFromdb->id);
            $this->leadCaptureToExtraage($postData);
            $this->cognoai_api_calling($postData,"147222"); //Email Notification
            return redirect("/job-fair-thank-you");
        } catch (\Illuminate\Database\QueryException $e) {
            return response()->json($e, $this->_statusOK);
        }
    }
}