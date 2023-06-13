<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\CourseType;
use App\Models\Center;
use App\Models\City;
use App\Models\State;
use App\Models\Pincode;
use App\Models\Lead;
use App\Jobs\SendEmailJob; 
use App\Mail\NotifyMail;
use App\Jobs\ExtraaedgeApiRequest;
use Mail;
class IndexController extends Controller
{
    //
    public $_statusOK = 200;
    public $_statusErr = 500;

    public function __construct()
    {
        $this->layout = (check_device('mobile'))?"mobile.":'';
    }

    public function index(Request $request) {
        try {
           
            $request->session()->get('userData');
            $courses = DB::table('courses')
            ->join('course_type', 'course_type.id', '=', 'courses.type_id')
            ->select('courses.*', 'courses.name as course_name','course_type.id as category_id','course_type.name as category','course_type.slug as categorySlug')
            ->distinct()
            ->orderBy('courses.id', 'asc')
            ->get();
            $courseTypes = CourseType::where('status', 1)->get();

            return view($this->layout.'index',compact('courses','courseTypes'));
        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
        
    }

    public function getCenter(Request $request) {
        try {
            $data = $request->all();
            $center = Center::where('id', $data['center_id'])->first()->name;
            return response()->json($center, $this->_statusOK);
        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
            return response()->json($response, $this->_statusErr);
        }
    }

    public function getCenterByPincode(Request $request) {
        $data = $request->all();
        $response = array();
        $pincode = DB::table('pincodes')->select('group_concat(pincodes.name)')->get()->toArray();
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

    public function submitMobileOtp(Request $request){
        try {
            $data = $request->all();
            $otpvalue = rand(1111,9999);
            $lastdigit = substr($_POST['mobile'], -4);

            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://new.icaerp.com/api/data/internalsms?refUser=learnersmallapp&refToken=651145731&Phone='.$data['mobile'].'&textMsg='.$otpvalue.'%20is%20your%20One%20Time%20Password%20(OTP)%20for%20online%20course%20enquiry%20at%20ICA%20Edu%20Skills%20Pvt%20Ltd.%20for%20the%20mobile%20number%20xxxxxx'.$lastdigit.'.%20Thank%20you%20for%20your%20inquiry.%20PLS%20DO%20NOT%20SHARE%20IT%20WITH%20ANYONE%20APART%20FROM%20ICA%20representative.',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            ));

            $response = curl_exec($curl);
            curl_close($curl);

            $data = array(
                "lastdigit" => $lastdigit,
                "otp_value" => $otpvalue,
            ); 

            if($response){
                $data['status'] = "success";
            } else {
                $data['status'] = "failed";
            }

            return response()->json($data, $this->_statusOK);

        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
    }

    public function captureLead(Request $request){
        try {
            
            $postData = $request->all();

            $validatedData = $request->validate([
                'name' => 'required',
                'mobile' => 'required',
            ]);

            $nameArray = explode(" ",$postData['name']);
            $postData['firstname'] = current(explode(" ",$postData['name']));
            unset($nameArray['0']);
            $postData['lastname'] = implode(" ",$nameArray);


            if (isset($postData['center']) && $postData['center'] != ''){
                $city  = Center::select("city_id")->where("name",$postData['center'])->first();
                $postData['city'] = City::where("id",$city->city_id)->first()->name;
            } else {
                //center by pincode
                $pincode = DB::table('pincodes')
                ->leftjoin('centers', 'pincodes.center_id', '=', 'centers.id')
                ->leftjoin('cities', 'pincodes.city_id', '=', 'cities.id')
                ->select('centers.name as center','cities.name as city')
                ->where('pincodes.name', $postData['pincode'])
                ->where('centers.status', 1)
                ->inRandomOrder()
                ->first();
                $postData['city'] = ($pincode)?$pincode->city:"";
                $postData['center'] = ($pincode)?$pincode->center:"";
            }
            $postData['role'] = "b2c";
            $this->captureLeadToDB($postData);

            if($postData['store_area'] == 1) {
                $this->classroomLeadCaptureLeadToExtraage($postData);
            }

            // Send Brochure
            if($postData['course_id']){
                $course  = Course::select("brochure_id")->where("id",$postData['course_id'])->first();
                $brochure_path = getAttachmentUrl($course->brochure_id);
            } else {
                $brochure_path = getAttachmentUrl(23);
            }




            //$this->sendEmailBrochure($postData);

            if(get_theme_setting('ajax_submit') == 1) {
                return response()->json($brochure_path, $this->_statusOK);
            } else {
                return redirect('/thank-you');
            }
            
        } catch(\Illuminate\Database\QueryException $e){
            return response()->json($e, $this->_statusOK);
        }
    }

    public function classroomLeadCaptureLeadToExtraage($postData){

        $apiData = array(
            'AuthToken' => 'ICA-06-12-2017',
            'Source' => 'ica',
            'FirstName' => $postData['firstname'],
            'LastName' => $postData['lastname'],
            'Email' => $postData['email'],
            'MobileNumber' => $postData['mobile'],
            'Center' => $postData['city'],
            'Location' => $postData['center'],
            'Pincode' => (isset($postData['pincode']))?$postData['pincode']:"",
            'LeadType' => $postData['LeadType'],
            'LeadSource' => $postData['utm_source'],
            'LeadName' => $postData['utm_campaign'],
            'SourceTo' => "offline",
            'Entity4' => (isset($postData['course']))?$postData['course']:'',
            'EducationalQualification' => $postData['source_url'],
            'Textb1' => $postData['utm_term'],
            'Field3' => $postData['utm_device'],
            'Textb2' => $postData['utm_adgroup'],
            'Textb3' => $postData['utm_content'],
            'BatchApplied' => (isset($postData['qualification']))?$postData['qualification']:'',
            'Textb4' => (isset($postData['institute']))?$postData['institute']:'',
        );

        //ExtraaedgeApiRequest::dispatch($apiData);

        $url = "https://prodapi.extraaedge.com/api/WebHook/addLead"; 		
        $curl = curl_init();
        
        $data = json_encode($apiData);
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $headers = array(
            "Content-Type: application/json",
        );
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        $resp = curl_exec($curl);
        curl_close($curl);

        return response()->json($resp, $this->_statusOK);
    }

    public function franchiseCaptureLead(Request $request){
        try {
            
            $data = $request->all();
            $postData = $data;
            $nameArray = explode(" ",$data['name']);
            $postData['firstname'] = current(explode(" ",$data['name']));
            unset($nameArray['0']);
            $postData['lastname'] = implode(" ",$nameArray);
            $postData['role'] = "b2b";

            $response = $this->captureLeadToDB($postData);
            $response = $this->franchiseLeadCaptureLeadToExtraage($postData);
            

            if(get_theme_setting('ajax_submit') == 1) {
                return response()->json($response, $this->_statusOK);
            } else {
                return redirect('/thank-you');
            }
            
        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
            return response()->json($response, $this->_statusErr);
        }
    }

    public function franchiseLeadCaptureLeadToExtraage($postData){
        $url = "https://thirdpartyapi.extraaedge.com/api/SaveRequest"; 		
        $curl = curl_init();
        $data = array(
            "AuthToken" => 'ICA-IDCMEXPANSION-22-09-2021',
			"Source" => 'ica-idcmexpansion',
			"Course" => 'CIA',
			'FirstName' => $postData['firstname'],
            'LastName' => $postData['lastname'],
			'Email' => $postData['email'],
			'MobileNumber' => $postData['mobile'],
			'State' => $postData['state'],
			'City' => $postData['city'],	
			'Field15' => $postData['occupation'],
			'Field6' => $postData['invest'],
			'LeadType' => 'DM',
        );
        
        $data = json_encode($data);
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $headers = array(
            "Content-Type: application/json",
        );
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        $resp = curl_exec($curl);
        curl_close($curl);
        return json_decode($resp);
    }

    public function captureLeadToDB($postData){
        try {
            $data = array(
                'role' => $postData['role'],
                'name' => $postData['name'],
                'email' => $postData['email'],
                'mobile' => $postData['mobile'],
                'center' => (isset($postData['center']))?$postData['center']:'',
                'pincode' => (isset($postData['pincode']))?$postData['pincode']:'',
                'latitude' => (isset($_COOKIE['lat']))?$_COOKIE['lat']:'',
                'longitude' => (isset($_COOKIE['lng']))?$_COOKIE['lat']:'',
                'utm_source' => $postData['utm_source'],
                'utm_campaign' => $postData['utm_campaign'],
                'crmStatus' => "0",
                'mailStatus' => "0",
            );
            $lead = Lead::create($data);
            return response()->json($lead, $this->_statusOK);
        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
            return response()->json($e, $this->_statusOK);
        }
    }

    public function thankyou(){
        try {
            return view('thank-you');
        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
    }

    public function sendEmailBrochure($postData){
        try {
            
            if($postData['course_id']){
                $course  = Course::select("brochure_id")->where("id",$postData['course_id'])->first();
                $brochure_path = getAttachmentUrl($course->brochure_id);
            } else {
                $brochure_path = getAttachmentUrl(23);
            }

            $data = array(
                'brochure_path' => $brochure_path
            );
            
            $mail = Mail::send('email.leadCaptureTemplate', $data, function ($m) use ($postData) {
                $m->from('connect@icajobguarantee.com', 'ICA Edu Skils');
                $m->to($postData['email'], $postData['name'])->subject("Here's your Brochure for Success");
            });

        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
            var_dump($e);
        }
    }

    public function testCode(){
        try {
           
            $starttime = microtime(true); // Top of page        
            
            //echo mail("akash.dutta@icagroup.in","My subject","test mail");
            
            $data = array(
                'name' => "Akash Dutta",
                'email' => "akash.dutta@icagroup.in",
                'brochure_path'=>''
            );

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
            exit;
        } catch(\Illuminate\Database\QueryException $e){
            print_r($e);
        }   
    }
}
