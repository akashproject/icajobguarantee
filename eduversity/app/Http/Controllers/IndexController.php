<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\UniversityCourse;
use App\Models\University;

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
            $courses = DB::table('university_courses')
            ->orderBy('university_courses.name', 'asc')
            ->get();
            $universities = University::where('status', 1)->get();
            return view($this->layout.'index',compact('courses','universities'));
        } catch(\Illuminate\Database\QueryException $th){
            throw $th;
        }
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

            if(isset($postData['university']) && $postData['university'] != ''){
                $city  = University::select("city_id")->where("name",$postData['university'])->first();
                $postData['city'] = City::where("id",$city->city_id)->first()->name;
            }
            
            $postData['role'] = "b2c";

            $this->captureLeadToDB($postData);

            $this->leadCaptureLeadToExtraage($postData);

            $this->cognoai_api_calling($postData);

            // Send Brochure
            $brochure_id = ($postData['brochure_id'])?$postData['brochure_id']:get_theme_setting('brochure_id');
            $mediaId  = Brochure::select("attachment")->where("id",$brochure_id)->first()->attachment;
            $brochure_path = getAttachmentUrl($mediaId);

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

    public function captureLeadToDB($postData){
        try {
            return response()->json(true, $this->_statusOK);
        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
            return response()->json($e, $this->_statusOK);
        }
    }

    public function leadCaptureLeadToExtraage($postData){
        $apiData =  array(
            'AuthToken' => 'ICAUNIPRO-17-10-2018',
            'Source' => "icaunipro",
            'FirstName' => $postData['firstname'],
            'LastName' => $postData['lastname'],
            'Email' => $postData['email'],
            'MobileNumber' => $postData['mobile'],
            'Center' => $postData['city'],
            'Location' => isset($postData['university'])?$postData['university']:'',
            'LeadType' => $postData['LeadType'],
            'LeadSource' => $postData['utm_source'],
            'LeadName' => $postData['utm_campaign'],
            'textb1' => $postData['utm_url'],
            'textb2' => $postData['utm_term'],
            'textb3' => $postData['utm_content'],
            'textb4' => $postData['utm_adgroup'],
            'field5' => $postData['utm_device']
        );

        echo $apiData; exit;
        $url = "https://prodivrapi.extraaedge.com/api/WebHook/addLead"; 		
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

    function cognoai_api_calling($postData){
        $whatsappArray = (object) array(
            "authorization" => "1d27951f-1532-48a2-b892-b84453945a06", 
            "campaign_id" => "144458", 
            "whatsapp_bsp" => "1", 
            "client_data" => array(
                "phone_number" => "+91".$postData['mobile'], 
                "name" => $postData['name'], 
                "dynamic_data" => array(
                    "1"=> $postData['name'] 
                )
            ) 
        );
        
        $curl = curl_init();
    
        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://app.cognocart.com/campaign/external/send-event-based-triggered-whatsapp-campaign/',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => json_encode($whatsappArray),
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json'
        ),
        ));
    
        $response = curl_exec($curl);
    
        curl_close($curl);
        return true;
    }
}