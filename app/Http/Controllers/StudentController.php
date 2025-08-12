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

    public function index($center,$step = null)
    {
        $enquiry_id = (request()->has('enquiry_id'))?base64_decode(request()->get('enquiry_id')):null;
        $lead_owner = Center::where('code', $center)->firstOrFail()->email;
        $enq = null;
        if ($enquiry_id != null) {
            $enq = Enquiry::findOrFail($enquiry_id);
            if ($enq->date_of_passing) {
                $date_of_passing = explode(",",$enq->date_of_passing);
                $enq->date_of_passing = $date_of_passing;
            }
            if ($enq->professional_course_status) {
                $enq->professional_course_status = explode(",",$enq->professional_course_status);
            }
            if($enq->preferred_training_days) {
                $enq->preferred_training_days = explode(',',$enq->preferred_training_days);
            }
            if($enq->preferred_training_time) {
                $enq->preferred_training_time = explode(',',$enq->preferred_training_time);
            }

        }

        return view('page.student-enquiry-form',compact('step','center','lead_owner','enq','enquiry_id'));
    }

    public function enquiryFormSubmit(Request $request)
    {
        try {
            $postData = $request->all();
            $validatedData = $request->validate([
                "center_id" => "required",
            ]);

            $step = ($postData['step'] != '')?$postData['step'] += 1:"1";
            if(isset($postData['preferred_career_field'])) {
                $postData['preferred_career_field'] = implode(',',$postData['preferred_career_field']);
            }
            if (isset($postData['date_of_passing'])) {
                $postData['date_of_passing'] = $postData['date_of_passing']['month'].','.$postData['date_of_passing']['year'];
            }

            if(isset($postData['professional_course_status'])) {
                $postData['professional_course_status'] = implode(',',$postData['professional_course_status']);
            }
            
            if(isset($postData['job_role'])) {
                $job_role = '';
                foreach ($postData['job_role'] as $key => $value) {
                    $job_role .= 'Job Role: '.$value['name'].',Year: '.$value['time'].' | ';
                }
                $postData['job_role'] = $job_role;
            }

            if(isset($postData['preferred_training_days'])) {
                $postData['preferred_training_days'] = implode(',',$postData['preferred_training_days']);
            }

            if(isset($postData['preferred_training_time'])) {
                $postData['preferred_training_time'] = implode(',',$postData['preferred_training_time']);
            }

            if($postData['enquiry'] <= 0){
                $enq = Enquiry::create($postData);
            } else {
                $enq = Enquiry::findOrFail($postData['enquiry']);
                $enq->update($postData);
            }
            if ($step <= 5) {
                return redirect()->route('student-enquiry-form-with-slug', ['center' => $postData['center_id'],$step,'enquiry_id'=>base64_encode($enq->id)]);
            } else {
                $center = Center::select('name','email')->where("code",$enq->center_id)->first();
                if($enq->response_log != null) {
                    return redirect()->back()->withErrors('This Record is Already Exists in ERP');
                }
                
                $data = [
                    'centername'=>$center->name,
                    'centercode'=>$enq->center_id,
                    'LeadOwner'=>$center->email,
                    'PurposeOfInquiry'=> $enq->purpose_of_enquiry,
                    'DailyTimeSpent'=> $enq->daily_time_spend,
                    'JobAspiration'=> $enq->job_aspiration,
                    'ExpectedJoiningTimeline'=> $enq->expected_joining_timeline,
                    'PreferredCareerField'=> $enq->preferred_career_field,
                    'HighestQualification'=> $enq->highest_qualification,
                    'CollegeName'=> $enq->college,
                    'DateOfPassing'=> $enq->date_of_passing,
                    'CurrentEducationStatus'=> $enq->current_education_status,
                    'CurrentSemesterTimings'=> "Semister: ".$enq->current_semester.' Shift: '.$enq->current_shift,
                    'ProfessionalCourseStatus'=> $enq->professional_course_status.','.$enq->other_professional_course_status,
                    'PreferredTrainingLanguage'=> $enq->preferred_training_language,
                    'IsJobRole'=> $enq->is_job_role,
                    'JobRole'=> $enq->job_role,
                    'FullName'=> $enq->full_name,
                    'EmailAddress'=> $enq->email_address,
                    'MobileNumber'=> $enq->mobile_number,
                    'WhatsappNumber'=> $enq->whatsapp_number,
                    'DateOfBirth'=> date("d/m/Y", strtotime($enq->date_of_birth)),
                    'Address'=> $enq->address,
                    'State'=> $enq->state,
                    'City'=> $enq->city,
                    'Pincode'=> $enq->pincode,
                    'GuardianIdentity'=> $enq->guardian_identity,
                    'FatherName'=> $enq->father_name,
                    'FatherOccupation'=> $enq->father_occupation.' '.$enq->other_mother_occupation,
                    'MotherName'=> $enq->mother_name,
                    'MotherOccupation'=> $enq->mother_occupation.' '.$enq->other_mother_occupation,
                    'ParentMobileNumber'=>$enq->parent_mobile_number,
                    'AdditionalGuardianDetails'=>$enq->additional_guardian_details,
                    'ExpectedStartingSalary'=> $enq->expected_starting_salary,
                    'ExpectedMonthlySalaryAfter5Years'=> $enq->expected_monthly_salary_after_5_years,
                    'PreferredJobLocation'=> $enq->preferred_job_location,
                    'PreferredTrainingDays'=> $enq->preferred_training_days,
                    'PreferredTrainingTime'=> $enq->preferred_training_time,
                    'PinkFormSource'=> $enq->pink_form_source,
                   // 'TrainingSchedulePreference'=> $enq->preferred_training_days.' '.$enq->preferred_training_time,
                    'PreviousComputerKnowledge'=> $enq->previous_computer_knowledge,
                ];
                
                //echo json_encode($data); exit;
                $url = "https://new.icaerp.com/api/online/SavePinkForm";
                $curl = curl_init($url);
                curl_setopt($curl, CURLOPT_URL, $url);
                curl_setopt($curl, CURLOPT_POST, true);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                
                $headers = array(
                "Content-Type: application/json",
                );
                curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
                
                $data = json_encode($data);
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                
                //for debug only!
                curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
                curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
                
                $resp = curl_exec($curl);
                curl_close($curl);
                $enq->update(['response_log'=>$resp]);
                return redirect("/walkin-form-thank-you");
            }
            
        } catch (\Illuminate\Database\QueryException $e) {
            var_dump($e);
        }
    }


}
