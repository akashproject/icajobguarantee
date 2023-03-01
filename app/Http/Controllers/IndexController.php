<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\CourseType;
use App\Models\Center;
use App\Models\City;

class IndexController extends Controller
{
    //
    public $_statusOK = 200;
    public $_statusErr = 500;

    public function index() {
        # code...
        try {
            $courses = DB::table('courses')
            ->join('course_type', 'course_type.id', '=', 'courses.type_id')
            ->select('courses.*', 'courses.name as course_name','course_type.id as category_id','course_type.name as category','course_type.slug as categorySlug')
            ->distinct()
            ->orderBy('courses.id', 'asc')
            ->get();
            $courseTypes = CourseType::where('status', 1)->get();
            return view('index',compact('courses','courseTypes'));
        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
        
    }

    public function getCenters(Request $request) {
        $data = $request->all();
        $centers = get_centers($data['course_id'], $data['center_id']);
        $option = "";
        if(count($centers) > 1){
            $option .= "<option> Select Center </option>";
        }
        foreach ($centers as $key => $value) {
            $option .= '<option value="'.$value->name.'" > '.$value->name.' </option>';
        }
        return response()->json($option, $this->_statusOK);
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
            $city  = Center::where("name",$data['center'])->first();
            $postData['city'] = City::where("id",$city->city_id)->first()->name;
            $response = $this->classroomLeadCaptureLeadToExtraage($postData);
            return response()->json($response, $this->_statusOK);
        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
    }

    public function classroomLeadCaptureLeadToExtraage($postData){
        $url = "https://prodapi.extraaedge.com/api/WebHook/addLead"; 
        //https://prodapi.extraaedge.com/api/WebHook/addLead
		
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
}
