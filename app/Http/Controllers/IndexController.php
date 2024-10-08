<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Course;
use App\Models\CourseType;
use App\Models\Center;
use App\Models\City;
use App\Models\State;
use App\Models\Pincode;
use App\Models\Lead;
use App\Models\Enquiry;
use App\Models\Brochure;
use App\Jobs\SendEmailJob;
use App\Mail\NotifyMail;
use App\Jobs\ExtraaedgeApiRequest;
use App\Models\LeadRefer;
use Mail;
use Cookie;
use Session;

class IndexController extends Controller
{
    public $_statusOK = 200;
    public $_statusErr = 500;

    public function __construct()
    {
        $this->layout = check_device("mobile") ? "mobile." : "";
    }

    public function index(Request $request)
    {
        try {
            $request->session()->get("userData");
            $courses = Cache::rememberForever('accounting-courses', function (){
                return DB::table("courses")
                ->join("course_type", "course_type.id", "=", "courses.type_id")
                ->select(
                    "courses.*",
                    "courses.name as course_name",
                    "course_type.id as category_id",
                    "course_type.name as category",
                    "course_type.slug as categorySlug"
                )
                ->distinct()
                ->orderBy("courses.id", "asc")
                ->get();
            });
            
            $courseTypes = Cache::rememberForever('course-type', function (){
                CourseType::where("status", 1)->get();
            });

            $blogs = getBlogs('["5765","5555"]');
            $contentMain = (object)['enable_otp'=>1];
            return view($this->layout . "index",compact("courses", "courseTypes", "blogs", "contentMain"));

        } catch (\Illuminate\Database\QueryException $e) {
            //throw $th;
        }
    }

    public function getCenter(Request $request)
    {
        try {
            $data = $request->all();
            $center = Center::where("id", $data["center_id"])->first()->name;
            return response()->json($center, $this->_statusOK);
        } catch (\Illuminate\Database\QueryException $e) {
            //throw $th;
            return response()->json($response, $this->_statusErr);
        }
    }

    public function getCenterByPincode(Request $request)
    {
        $data = $request->all();
        $response = [];
        $pincode = DB::table("pincodes")
            ->select("group_concat(pincodes.name)")
            ->get()
            ->toArray();

        // if (!$pincode) {
        //     return response()->json(false, $this->_statusOK);
        // }
        // $response['pincode'] = $data['pincode'];
        // if ($pincode->center_id !== null) {
        //     $center = DB::table('centers')->select('name')->where('id',$pincode->center_id)->first();

        //     if($center){
        //         $response['center'] = $center->name;

        //     }

        // }

        return response()->json($pincode, $this->_statusOK);
    }

    public function submitMobileOtp(Request $request)
    {
        try {
            $data = $request->all();
            $otpvalue = rand(1111, 9999);
            $lastdigit = substr($_POST["mobile"], -4);
            $url = "https://mysmsshop.in/V2/http-api.php?apikey=8bhPdcPVJabXWdla&senderid=ICAEDU&number=".$_POST["mobile"]."&message=".$otpvalue."%20is%20your%20One%20Time%20Password%20(OTP)%20for%20online%20course%20enquiry%20at%20ICA%20Edu%20Skills%20Pvt%20Ltd.%20for%20the%20mobile%20number%20xxxxxx".$lastdigit.".%20Thank%20you%20for%20your%20inquiry.%20PLS%20DO%20NOT%20SHARE%20IT%20WITH%20ANYONE%20APART%20FROM%20ICA%20representative.";

            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

            $headers = array(
            "Accept: */*",
            );
            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
            //for debug only!
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

            $response = curl_exec($curl);
            $data = [
                "lastdigit" => $lastdigit,
                "otp_value" => $otpvalue,
            ];

            
            if ($response) {
                $data["status"] = "success";
            } else {
                $data["status"] = "failed";
            }

            return response()->json($data, $this->_statusOK);
        } catch (\Illuminate\Database\QueryException $e) {
            //throw $th;
        }
    }

    function insertLeadRecord(Request $request){
        try {
            $postData = $request->all();
            $nameArray = explode(" ", $postData["name"]);
            $postData["firstname"] = current(explode(" ", $postData["name"]));
            unset($nameArray["0"]);
            $postData["lastname"] = implode(" ", $nameArray);

            if (isset($postData["center"]) && $postData["center"] != "") {
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
            $leadFromdb = $this->captureLeadToDB($postData);
            return response()->json($leadFromdb, $this->_statusOK);
        } catch (\Illuminate\Database\QueryException $e) {
            return response()->json($e, $this->_statusOK);
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
            if ($postData["store_area"] == 1) {
                $this->classroomLeadCaptureToExtraage($postData);
            }        
            $this->classroomCognoai_api_calling($postData);

            // Send Brochure
            $brochure_id = $postData["brochure_id"]
            ? $postData["brochure_id"]
            : get_theme_setting("brochure_id");
            $mediaId = Brochure::select("attachment")
            ->where("id", $brochure_id)
            ->first()->attachment;
            $brochure_path = getAttachmentUrl($mediaId);

            //$this->sendEmailBrochure($postData);
            if(isset($postData["assessment"]) && $postData["assessment"] != ''){
                DB::table("leadmeta")->insert([
                    "lead_id" => $leadFromdb->id,
                    "meta_key" => "assessment",
                    "meta_value" => $postData["assessment"],
                ]);
                return redirect()->route('instruction', [$postData["assessment"]]);
            }
            

            if(get_theme_setting("ajax_submit") == 1) {
                return response()->json($brochure_path, $this->_statusOK);
            } else {
                return redirect("/thank-you");
            }
        } catch (\Illuminate\Database\QueryException $e) {
            return response()->json($e, $this->_statusOK);
        }
    }

    public function weabinerCaptureLead(Request $request)
    {
        try {
            $postData = $request->all();
            $validatedData = $request->validate([
                "name" => "required",
                "mobile" => "required",
                "email" => "required",
            ]);

            $nameArray = explode(" ", $postData["name"]);
            $postData["firstname"] = current(explode(" ", $postData["name"]));
            unset($nameArray["0"]);
            $postData["lastname"] = implode(" ", $nameArray);

            $postData["role"] = "b2c";
            $this->captureLeadToDB($postData);
            if ($postData["store_area"] == 1) {
                $this->classroomLeadCaptureToExtraage($postData);
            }
            $data = [];
            $mail = Mail::send(
                "email.webinarLeadCaptureTemplate",
                $data,
                function ($m) use ($postData) {
                    $m->from("connect@icajobguarantee.com", "ICA Edu Skils");
                    $m->to($postData["email"], $postData["name"])->subject(
                        "Confirmation and Joining Instructions for Stock Market Webinar on 23rd January’24"
                    );
                }
            );
            //$this->sendEmailBrochure($postData);

            if (get_theme_setting("ajax_submit") == 1) {
                return response()->json($brochure_path, $this->_statusOK);
            } else {
                return redirect("/thank-you");
            }
        } catch (\Illuminate\Database\QueryException $e) {
            return response()->json($e, $this->_statusOK);
        }
    }

    public function captureJobApplication(Request $request)
    {
        try {
            $postData = $request->all();
            $validatedData = $request->validate([
                "name" => "required",
                "mobile" => "required",
            ]);

            $mail = Mail::send(
                "email.jobApplicationTemplate",
                $postData,
                function ($m) use ($postData) {
                    $m->from("connect@icajobguarantee.com", "ICA Edu Skils");
                    $m->to("akash.dutta@icagroup.in", "HR Manager")->subject(
                        "New Job has been submitted"
                    );
                }
            );

            return response()->json($postData, $this->_statusOK);
        } catch (\Illuminate\Database\QueryException $e) {
            return response()->json($e, $this->_statusOK);
        }
    }

    public function franchiseCaptureLead(Request $request)
    {
        try {
            $data = $request->all();
            $postData = $data;
            $nameArray = explode(" ", $data["name"]);
            $postData["firstname"] = current(explode(" ", $data["name"]));
            unset($nameArray["0"]);
            $postData["lastname"] = implode(" ", $nameArray);
            $postData["role"] = "b2b";
            if (!isset($data["state"])) {
                $city = DB::table("cities")
                    ->where("name", $data["city"])
                    ->first();
                $postData["state"] = getStateById($city->state_id)->name;
            }

            $response = $this->captureLeadToDB($postData);
            $response = $this->franchiseLeadCaptureToExtraage($postData);
            $this->franchiseCognoai_api_calling($postData);

            // Send Brochure

            $brochure_id = $postData["brochure_id"]
                ? $postData["brochure_id"]
                : get_theme_setting("brochure_id");

            $mediaId = Brochure::select("attachment")
                ->where("id", $brochure_id)
                ->first()->attachment;

            $brochure_path = getAttachmentUrl($mediaId);

            if (get_theme_setting("ajax_submit") == 1) {
                return response()->json($brochure_path, $this->_statusOK);
            } else {
                return redirect("/thank-you");
            }
        } catch (\Illuminate\Database\QueryException $e) {
            //throw $th;
            return response()->json($response, $this->_statusErr);
        }
    }

    public function enquiryFormSubmit(Request $request)
    {
        try {
            $postData = $request->all();

            if ($postData["qualification"]) {
                $postData["qualification"] = json_encode(
                    $postData["qualification"]
                );
            }

            if ($postData["professional_qualification"]) {
                $postData["professional_qualification"] = json_encode(
                    $postData["professional_qualification"]
                );
            }

            if ($postData["experience"]) {
                $postData["experience"] = json_encode($postData["experience"]);
            }

            if (isset($postData["know_from"])) {
                $postData["know_from"] = json_encode($postData["know_from"]);
            }

            if (isset($postData["slot_day"])) {
                $postData["slot_day"] = json_encode($postData["slot_day"]);
            }

            if (isset($postData["slot_time"])) {
                $postData["slot_time"] = json_encode($postData["slot_time"]);
            }

            $postData["center_id"] = 1;

            $enq = Enquiry::create($postData);

            $this->walkingLeadCaptureToExtraage($postData);

            return redirect("/thank-you");
        } catch (\Illuminate\Database\QueryException $e) {
            var_dump($e);
        }
    }

    public function classroomLeadCaptureToExtraage($postData)
    {
        $apiData = [
            "AuthToken" => "ICA-06-12-2017",
            "Source" => "ica",
            "FirstName" => $postData["firstname"],
            "LastName" => $postData["lastname"],
            "Email" => $postData["email"],
            "MobileNumber" => $postData["mobile"],
            "Center" => isset($postData["city"]) ? $postData["city"] : "",
            "Location" => isset($postData["center"]) ? $postData["center"] : "",
            "Pincode" => isset($postData["pincode"])
                ? $postData["pincode"]
                : "",
            "LeadType" => $postData["LeadType"],
            "LeadSource" => $postData["utm_source"],
            "LeadName" => $postData["utm_campaign"],
            "SourceTo" => "offline",
            "Entity4" => isset($postData["course_id"])
                ? getErpCourseCode($postData["course_id"])->course_erp_code
                : "",
            "EducationalQualification" => $postData["source_url"],
            "Textb1" => $postData["utm_term"],
            "Field3" => $postData["utm_device"],
            "Textb2" => $postData["utm_adgroup"],
            "Textb3" => $postData["utm_content"],
            "BatchApplied" => isset($postData["qualification"])
                ? $postData["qualification"]
                : "",
            "Textb4" => isset($postData["institute"])
                ? $postData["institute"]
                : "",
            "Remarks" => isset($postData["occupation"])
                ? $postData["occupation"]
                : "",
        ];
        //ExtraaedgeApiRequest::dispatch($apiData);

        $url = "https://prodivrapi.extraaedge.com/api/WebHook/addLead";
        $curl = curl_init();

        $data = json_encode($apiData);
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $headers = ["Content-Type: application/json"];

        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        $resp = curl_exec($curl);
        curl_close($curl);

        return response()->json($resp, $this->_statusOK);
    }

    public function franchiseLeadCaptureToExtraage($postData)
    {
        $url = "https://thirdpartyapi.extraaedge.com/api/SaveRequest";

        $curl = curl_init();

        $data = [
            "AuthToken" => "ICA-IDCMEXPANSION-22-09-2021",
            "Source" => "ica-idcmexpansion",
            "Course" => "CIA",
            "FirstName" => $postData["firstname"],
            "LastName" => $postData["lastname"],
            "Email" => $postData["email"],
            "MobileNumber" => $postData["mobile"],
            "Country" => "India",
            "Location" => $postData["state"],
            "City" => $postData["city"],
            "Field15" => $postData["occupation"],
            "Field6" => $postData["invest"],
            "LeadType" => "DM",
            "LeadSource" => $postData["utm_source"],
            "LeadName" => $postData["utm_campaign"],
            "textb9" => isset($postData["utm_adset"]) ? $postData["utm_adset"] : "",
        ];

        $data = json_encode($data);
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $headers = ["Content-Type: application/json"];
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        $resp = curl_exec($curl);
        curl_close($curl);
        return json_decode($resp);
    }

    public function walkingLeadCaptureToExtraage($postData)
    {
        //qualification

        $qualification = json_decode($postData["qualification"]);
        $batchApplied = current($qualification->degree);
        $university = current($qualification->board);
        //experience

        $experience = json_decode($postData["experience"]);
        $experience = current($experience->duration);
        $know_from = implode(",", json_decode($postData["know_from"]));
        $apiData = [
            "AuthToken" => "ICA-06-12-2017",
            "Source" => "ica",
            "FirstName" => $postData["name"],
            "Email" => $postData["email"],
            "MobileNumber" => $postData["mobile"],
            "DateOfBirth" => $postData["dob"],
            "Address" => $postData["address"],
            "PinCode" => $postData["pincode"],
            "State" => $postData["state"],
            "City" => $postData["city"],
            "FathersName" => $postData["parent_name"],
            "FathersPhoneNumber" => $postData["parent_mobile"],
            "BatchApplied" => $batchApplied, //Degree
            "Textb4" => $university, //College/University
            "Experience" => $experience, //Work Duration
            "Field14" => $know_from, //WHERE DO YOU COME TO KNOW ABOUT ICA
        ];

        $url = "https://prodivrapi.extraaedge.com/api/WebHook/addLead";
        $curl = curl_init();
        $data = json_encode($apiData);
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $headers = ["Content-Type: application/json"];
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        $resp = curl_exec($curl);
        curl_close($curl);
        return response()->json($resp, $this->_statusOK);
    }

    function classroomCognoai_api_calling($postData)
    {
        $whatsappArray = (object) [
            "authorization" => "5a1a48f7-f10f-47bd-becc-6b092dfcc2bb",
            "campaign_id" => "147222",
            "whatsapp_bsp" => "1",
            "client_data" => [
                "phone_number" => "+91" . $postData["mobile"],
                "name" => $postData["name"],
                "dynamic_data" => [
                    "1" => $postData["name"],
                ],
            ],
        ];

        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => "https://app.cognocart.com/campaign/external/send-event-based-triggered-whatsapp-campaign/",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode($whatsappArray),
            CURLOPT_HTTPHEADER => ["Content-Type: application/json"],
        ]);

        $response = curl_exec($curl);
        curl_close($curl);
        return true;
    }

    function franchiseCognoai_api_calling($postData)
    {
        $whatsappArray = (object) [
            "authorization" => "5a1a48f7-f10f-47bd-becc-6b092dfcc2bb",
            "campaign_id" => "147280",
            "whatsapp_bsp" => "1",
            "client_data" => [
                "phone_number" => "+91" . $postData["mobile"],
                "name" => $postData["name"],
                "dynamic_data" => [
                    "1" => $postData["name"],
                ],
            ],
        ];

        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://app.cognocart.com/campaign/external/send-event-based-triggered-whatsapp-campaign/",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode($whatsappArray),
            CURLOPT_HTTPHEADER => ["Content-Type: application/json"],
        ]);

        $response = curl_exec($curl);
        curl_close($curl);
        return true;
    }

    public function captureLeadToDB($postData)
    {
        try {
            $data = [
                "role" => $postData["role"],
                "name" => $postData["name"],
                "email" => $postData["email"],
                "mobile" => $postData["mobile"],
                "center" => isset($postData["center"])
                    ? $postData["center"]
                    : "",
                "pincode" => isset($postData["pincode"])
                    ? $postData["pincode"]
                    : "",

                "latitude" => isset($_COOKIE["lat"]) ? $_COOKIE["lat"] : "",
                "longitude" => isset($_COOKIE["lng"]) ? $_COOKIE["lat"] : "",
                "utm_source" => $postData["utm_source"],
                "utm_campaign" => $postData["utm_campaign"],
                "otp_status" => "0",
                "crmStatus" => "0",
                "mailStatus" => "0",
            ];

            $lead = Lead::create($data);

            DB::table("leadmeta")->insert([
                "lead_id" => $lead->id,
                "meta_key" => "source",
                "meta_value" => "cia",
            ]);

            return $lead;
        } catch (\Illuminate\Database\QueryException $e) {
            //throw $th;

            return response()->json($e, $this->_statusOK);
        }
    }

    public function thankyou()
    {
        try {
            return view("thank-you");
        } catch (\Illuminate\Database\QueryException $e) {
            //throw $th;
        }
    }

    public function sendEmailBrochure($postData)
    {
        try {
            if ($postData["course_id"]) {
                $course = Course::select("brochure_id")
                    ->where("id", $postData["course_id"])
                    ->first();

                $brochure_path = getAttachmentUrl($course->brochure_id);
            } else {
                $brochure_path = getAttachmentUrl(23);
            }

            $data = [
                "brochure_path" => $brochure_path,
            ];

            $mail = Mail::send("email.leadCaptureTemplate", $data, function (
                $m
            ) use ($postData) {
                $m->from("connect@icajobguarantee.com", "ICA Edu Skils");

                $m->to($postData["email"], $postData["name"])->subject(
                    "Here's your Brochure for Success"
                );
            });
        } catch (\Illuminate\Database\QueryException $e) {
            //throw $th;

            var_dump($e);
        }
    }

    public function testCode()
    {
        try {
            $starttime = microtime(true); // Top of page

            //echo mail("akash.dutta@icagroup.in","My subject","test mail");

            $data = [
                "name" => "Akash Dutta",
                "email" => "akash.dutta@icagroup.in",
                "brochure_path" => "",
            ];

            // $email = new NotifyMail();

            // Mail::to($data['email'])->send($email);
            SendEmailJob::dispatch($data);
            // dispatch(function () {

            //     new \App\Jobs\SendEmailJob($data);

            // })->afterResponse();

            //SendEmailJob::dispatchSync($data)->afterResponse();

            //dispatch_now(new \App\Jobs\SendEmailJob($data));

            //print_r($mail);

            //echo $mail = mail("akash.dutta@icagroup.in","My subject","i am here index");

            // $mail = Mail::send('email.leadCaptureTemplate', $data, function ($m) use ($data) {

            //     $m->from('connect@icajobguarantee.com', 'ICA Edu Skils');

            //     $m->to($data['email'], $data['name'])->subject('Request Submitted Index!');

            // });

            // Code

            $endtime = microtime(true); // Bottom of page
            printf("Page loaded in %f seconds", $endtime - $starttime);
            exit();
        } catch (\Illuminate\Database\QueryException $e) {
            print_r($e);
        }
    }

    public function globalFormSubmit(Request $request)
    {
        try {
            $postData = $request->all();
            $data = [
                "name" => $postData["name"],
                "mobile" => $postData["mobile"],
                "email" => $postData["email"],
                "pincode" => $postData["pincode"],
                "amount" => "1",
                "order_id" => "ragistration_" . $this->random_strings(8),
                "payment_status" => "pending",
            ];
            $ragistration = DB::table("nks_webinar")->insert($data);
            $merchant_data = "";
            $working_key = "BE3CFB0CFCFA73C7989C65A12957B6CA"; //Shared by CCAVENUES
            $access_code = "AVEV11IG91BE22VEEB"; //Shared by CCAVENUES
            $ccAvenueBillingData = [
                "merchant_id" => "415669",
                "order_id" => $data["order_id"],
                "language" => "EN",
                "amount" => 1, //(isset($_POST['extanded_stay']) && $_POST['extanded_stay'] !='')?$_POST['extanded_stay']+5000:5000
                "currency" => "INR",
                "redirect_url" =>
                    "https://www.icajobguarantee.com/index/payment-success",
                "cancel_url" =>
                    "https://www.icajobguarantee.com/index/payment-failed",
                "billing_name" => $data["name"],
                "billing_address" =>
                    "Unit No. ECSL1401, EcoCentre Business Park, EM Block, Sector V, Salt Lake",
                "billing_state" => "West Bengal",
                "billing_city" => "Kolkata",
                "billing_zip" => "700091",
                "billing_country" => "India",
                "billing_tel" => $data["mobile"],
                "billing_email" => $data["email"],
            ];

            //echo "<pre>"; print_r($ccAvenueBillingData); exit;

            foreach ($ccAvenueBillingData as $key => $value) {
                $merchant_data .= $key . "=" . urlencode($value) . "&";
            }

            $encrypted_data = encryption($merchant_data, $working_key);
            ?>

            <form method="post" name="redirect" action="https://secure.ccavenue.com/transaction/transaction.do?command=initiateTransaction"> 
            <?php
            echo "<input type=hidden name=encRequest value=$encrypted_data>";
            echo "<input type=hidden name=access_code value='AVEV11IG91BE22VEEB'>";?>
            </form>
            </center>
            <script language='javascript'>document.redirect.submit();</script>
            <?php
        } catch (\Illuminate\Database\QueryException $e) {
            var_dump($e);

            //throw $th;

            // return response()->json($response, $this->_statusErr);
        }
    }

    public function updateLeadStatus($id){
        try {
            $data = [
                'status' => "1"
            ];
            $event = LeadRefer::findOrFail($id);
            $event->update($data);
            $thankYouMsg = "Thank You Lead Will be added to your account shortly";

            return view("thank-you",compact('thankYouMsg'));
        } catch (\Illuminate\Database\QueryException $e) {
            print_r($e);
        }
    }

    public function paymentSuccess(Request $request)
    {
        try {
            $workingKey = "BE3CFB0CFCFA73C7989C65A12957B6CA"; //Working Key should be provided here.
            $encResponse = $_POST["encResp"]; //This is the response sent by the CCAvenue Server
            $rcvdString = decryption($encResponse, $workingKey);
            //Crypto Decryption used as per the specified working key.
            $order_status = "";
            $decryptValues = explode("&", $rcvdString);
            $dataSize = sizeof($decryptValues);
            $responseData = [];
            for ($i = 0; $i < $dataSize; $i++) {
                $payment = explode("=", $decryptValues[$i]);
                $responseData[$payment[0]] = $payment[1];
                if ($i == 3) {
                    $order_status = $payment[1]; 
                }
            }

            if ($order_status === "Success") {
                $ragistration = DB::table("nks_webinar")
                    ->where("order_id", $responseData["order_id"])
                    ->update([
                        "payment_id" => $responseData["tracking_id"],
                        "payment_status" => "success",
                    ]);
            } else {
                $ragistration = DB::table("nks_webinar")
                    ->where("order_id", $responseData["order_id"])
                    ->update(["payment_status" => "failed"]);
            }

            return view("payments.payment-success");
        } catch (\Illuminate\Database\QueryException $e) {
            var_dump($e);

            //throw $th;

            // return response()->json($response, $this->_statusErr);
        }
    }

    public function paymentFailed(Request $request)
    {
        try {
            return view("payments.payment-failed");
        } catch (\Illuminate\Database\QueryException $e) {
            var_dump($e);
            //throw $th;
            // return response()->json($response, $this->_statusErr);
        }
    }

    function createCenterLogin()
    {
        $center = Center::select("name", "email", "mobile")->get();

        DB::table("users")
            ->where("role", "center")
            ->delete();

        foreach ($center as $key => $value) {
            $centerData = [
                "name" => $value->name,
                "email" => $value->email,
                "mobile" => $value->mobile,
                "password" => Hash::make("IcaEduSkills@2023"),
                "is_admin" => "0",
                "status" => "1",
            ];
            $user = User::create($centerData);
            echo $user->id . "<br>";
        }
    }

    function createUniversityLogin()
    {
        return User::create([
            "name" => "Eduversity HO",
            "email" => "eduversity@icajobguarantee.com",
            "password" => Hash::make("eduversity@1234"),
        ]);
    }

    function random_strings($length_of_string)
    {
        // String of all alphanumeric character
        $str_result =
            "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";

        // Shuffle the $str_result and returns substring
        // of specified length
        return substr(str_shuffle($str_result), 0, $length_of_string);
    }
}