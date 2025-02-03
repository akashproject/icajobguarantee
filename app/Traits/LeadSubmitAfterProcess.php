<?php

namespace App\Traits;
use Mail;
use App\Models\Center;

trait LeadSubmitAfterProcess
{
    public $_statusOK = 200;
    public $_statusErr = 500;

    public function sendJobFairEmailNotification($postData)
    {
        try {
            
            $center = Center::where('name',$postData['center'])->first();
            $details = [
                'name' => $postData["name"],
                'email' => $postData["email"],
                'center_name' => $center->name,
                'center_address' => $center->address,
                'center_mobile' => $center->mobile,
            ];
            $mail = \Mail::to($postData["email"], $postData["name"])->send(new \App\Mail\JobFairNotification($details));
            
            return true;
        } catch (\Illuminate\Database\QueryException $e) {
            var_dump($e);
        }
    }

    public function b2cLeadCaptureToExtraage($postData)
    {
        $apiData = [
            "AuthToken" => "ICA-06-12-2017",
            "Source" => "ica",
            "FirstName" => $postData["firstname"],
            "LastName" => $postData["lastname"],
            "Email" => $postData["email"],
            "MobileNumber" => $postData["mobile"],
            "DateOfBirth" => isset($postData["date_of_birth"]) ? $postData["date_of_birth"] : "",
            "AlternateMobileNumber" => isset($postData["alternate_mobile_number"]) ? $postData["alternate_mobile_number"] : "",
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
            "Experience" => isset($postData["experience"]) ? $postData["experience"] : "",
            "Textb1" => $postData["utm_term"],
            "Field3" => $postData["utm_device"],
            "Textb2" => $postData["utm_adgroup"],
            "Textb3" => $postData["utm_content"],
            "Textb10" => $postData["utm_creative"],
            "BatchApplied" => isset($postData["qualification"])
                ? $postData["qualification"]
                : "",
            "Textb4" => isset($postData["institute"])
                ? $postData["institute"]
                : "",
            "Remarks" => '',
        ];

        if(isset($postData["experience"]) && $postData["experience"] == "Other" ) {
            $apiData['Experience'] = $postData['experience'].':'.$postData["other_experience"];
        }
        if(isset($postData["occupation"])){
            $apiData['Remarks'] = $apiData['Remarks'].' '.$postData["occupation"];
        }
        if(isset($postData["career_option"])){
            $apiData['Remarks'] = $apiData['Remarks'].' '.$postData["career_option"];
        }
        if(isset($postData["career_option"]) && $postData["career_option"] == "Other"){
            $apiData['Remarks'] = " ".$apiData['Remarks'].' '.$postData['career_option'].':'.$postData["other_career_option"];
        }
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

    public function b2bLeadCaptureToExtraage($postData)
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
            "Textb10" => $postData["utm_creative"],
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

    public function classroomLeadCaptureToExtraage($postData)
    {
        $apiData = [
            "AuthToken" => "ICA-06-12-2017",
            "Source" => "ica",
            "FirstName" => $postData["firstname"],
            "LastName" => $postData["lastname"],
            "Email" => $postData["email"],
            "MobileNumber" => $postData["mobile"],
            "DateOfBirth" => isset($postData["date_of_birth"]) ? $postData["date_of_birth"] : "",
            "AlternateMobileNumber" => isset($postData["alternate_mobile_number"]) ? $postData["alternate_mobile_number"] : "",
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
            "Experience" => isset($postData["experience"]) ? $postData["experience"] : "",
            "Textb1" => $postData["utm_term"],
            "Field3" => $postData["utm_device"],
            "Textb2" => $postData["utm_adgroup"],
            "Textb3" => $postData["utm_content"],
            "Textb10" => $postData["utm_creative"],
            "BatchApplied" => isset($postData["qualification"])
                ? $postData["qualification"]
                : "",
            "Textb4" => isset($postData["institute"])
                ? $postData["institute"]
                : "",
            "Remarks" => '',
        ];

        if(isset($postData["experience"]) && $postData["experience"] == "Other" ) {
            $apiData['Experience'] = $postData['experience'].':'.$postData["other_experience"];
        }
        if(isset($postData["occupation"])){
            $apiData['Remarks'] = $apiData['Remarks'].' '.$postData["occupation"];
        }
        if(isset($postData["career_option"])){
            $apiData['Remarks'] = $apiData['Remarks'].' '.$postData["career_option"];
        }
        if(isset($postData["career_option"]) && $postData["career_option"] == "Other"){
            $apiData['Remarks'] = " ".$apiData['Remarks'].' '.$postData['career_option'].':'.$postData["other_career_option"];
        }
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

    function cognoai_api_calling($postData,$campaign_id=null) {
        $whatsappArray = (object) [
            "authorization" => "5a1a48f7-f10f-47bd-becc-6b092dfcc2bb",
            "campaign_id" => $campaign_id,
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
            return response()->json($e, $this->_statusOK);
        }
    }

    public function thankyouNotication($postData){
        try {
            
            $url = "https://api.st-messaging.com/fe/api/v1/send?username=icaedu1.trans&password=Password@123&unicode=true&from=ICAEDU&to=".$postData["mobile"]."&text=Hi+".$postData["firstname"]."%2C+Thank+you+for+your+interest+in+our+career+programs.+We+have+received+your+details+and+will+be+in+touch+soon.+Thanks+%26+Regards%2C+ICA+Edu+Skills&dltContentId=1207173139255553618&dltPrincipalEntityId=1201159245568554682"; 

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

            return true;
        } catch (\Illuminate\Database\QueryException $e) {
            //throw $th;
        }
    }

    public function thankyouFranchiseNotication($postData){
        try {
            

            $url = "https://api.st-messaging.com/fe/api/v1/send?username=icaedu1.trans&password=Password@123&unicode=true&from=ICAEDU&to=".$postData["mobile"]."&text=Hi+".$postData["firstname"]."%2C+Thank+you+for+your+interest+in+the+ICA+Edu+Skills+franchise.+We%27ve+received+your+details+and+will+contact+you+soon.+Thanks%2C+ICA+Edu+Skills&dltContentId=1207173147344533021&dltPrincipalEntityId=1201159245568554682";

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
            

            return true;
        } catch (\Illuminate\Database\QueryException $e) {
            //throw $th;
        }
    }
}