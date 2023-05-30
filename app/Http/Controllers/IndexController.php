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

class IndexController extends Controller
{
    //
    public $_statusOK = 200;
    public $_statusErr = 500;

    public function __construct()
    {
        $this->layout = (check_device('mobile'))?"mobile.":'';
    }

    public function index() {
        try {
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
        $data = $request->all();
        $centers = getCenterById($data['course_id'], $data['center_id']);
        $option = "";
        if(count($centers) > 1){
            $option .= "<option> Select Center </option>";
        }
        foreach ($centers as $key => $value) {
            $option .= '<option value="'.$value->name.'" > '.$value->name.' </option>';
        }
        return response()->json($option, $this->_statusOK);
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
            
            $data = $request->all();
            $postData = $data;
            $nameArray = explode(" ",$data['name']);
            $postData['firstname'] = current(explode(" ",$data['name']));
            unset($nameArray['0']);
            $postData['lastname'] = implode(" ",$nameArray);


            if (isset($postData['center']) && $postData['center'] != ''){
                $city  = Center::select("city_id")->where("name",$data['center'])->first();
                $postData['city'] = City::where("id",$city->city_id)->first()->name;
            } else {
                $postData['city'] = "";
                $postData['center'] = "";
            }
           
            
            $response = $this->classroomLeadCaptureLeadToExtraage($postData);

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

    public function classroomLeadCaptureLeadToExtraage($postData){
        $url = "https://prodapi.extraaedge.com/api/WebHook/addLead"; 		
        $curl = curl_init();
        $data = array(
            'AuthToken' => 'ICA-06-12-2017',
            'Source' => 'ica',
            'FirstName' => $postData['firstname'],
            'LastName' => $postData['lastname'],
            'Email' => $postData['email'],
            'MobileNumber' => $postData['mobile'],
            'Center' => $postData['city'],
            'Location' => $postData['center'],
            'Pincode' => (isset($postData['pincode']))?$postData['pincode']:"",
            'LeadType' => 'DM',
            'LeadSource' => $postData['utm_source'],
            'LeadName' => $postData['utm_campaign'],
            'SourceTo' => "offline"
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

    public function franchiseCaptureLead(Request $request){
        try {
            
            $data = $request->all();
            $postData = $data;
            $nameArray = explode(" ",$data['name']);
            $postData['firstname'] = current(explode(" ",$data['name']));
            unset($nameArray['0']);
            $postData['lastname'] = implode(" ",$nameArray);

            
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
                'role' => 'lead',
                'name' => $postData['name'],
                'email' => $postData['email'],
                'mobile' => $postData['mobile'],
                'center' => $postData['center'],
                'status' => $postData['status'],
                'pincode' => $postData['pincode'],
                'latitude' => $postData['latitude'],
                'longitude' => $postData['longitude'],
                'utm_source' => $postData['utm_source'],
                'utm_campaign' => $postData['utm_campaign'],
            );
            $lead = Lead::create($data);
            return response()->json($lead, $this->_statusOK);
        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
    }

    public function thankyou(){
        try {
            return view('thank-you');
        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
    }

    public function testCode(){
        try {
            echo $center = DB::table('centers')
            ->join('cities', 'cities.id', '=', 'centers.city_id')
            ->select('cities.*')->toSql();
        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
    }
}
