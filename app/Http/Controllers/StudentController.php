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

    public function index($step = null)
    {
        $center = (request()->has('center'))?request()->get('center'):"";
        $id = (request()->has('enquiry'))?base64_decode(request()->get('enquiry')):null;
        $enq = null;
        if ($id != null) {
            $enq = Enquiry::findOrFail($id);
        }
        return view('page.student-enquiry-form',compact('step','center','enquiry'));
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
            if(isset($postData['current_semester_timings'])){
                $postData['current_semester_timings'] = "Current Semester: ".$postData['current_semester_timings']['semester'].', Shift: '.$postData['current_semester_timings']['timing'];
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
            if(isset($postData['mobile'])) {
                $postData['mobile_number'] = $postData['mobile'];
            }

            if(isset($postData['guardian_identity']) && $postData['guardian_identity'] == "Other") {
                $postData['guardian_identity'] = $postData['additional_guardian_details'];
            }

            if(isset($postData['father_occupation']) && $postData['father_occupation'] == "Other") {
                $postData['father_occupation'] = $postData['other_father_occupation'];
            }

            if(isset($postData['mother_occupation']) && $postData['mother_occupation'] == "Other") {
                $postData['mother_occupation'] = $postData['other_mother_occupation'];
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
                return redirect()->route('student-enquiry-form-with-slug', [$step,'center' => $postData['center_id'],'enq'=> $enq]);
            } else {
                $data = [
                    'centername'=>'Testing Center',
                    'centercode'=>'X999',
                    'PurposeOfInquiry'=> $enq->purpose_of_enquiry,
                    'DailyTimeSpent'=> $enq->daily_time_spend,
                    'JobAspiration'=> $enq->job_aspiration,
                    'ExpectedJoiningTimeline'=> $enq->expected_joining_timeline,
                    'PreferredCareerField'=> $enq->preferred_career_field,
                    'DateOfPassing'=> $enq->date_of_passing,
                    'CurrentEducationStatus'=> $enq->current_education_status,
                    'CurrentSemesterTimings'=> $enq->current_semester_timings,
                    'ProfessionalCourseStatus'=> $enq->professional_course_status,
                    'PreferredTrainingLanguage'=> $enq->preferred_training_language,
                    'JobRole'=> $enq->job_role,
                    'FullName'=> $enq->full_name,
                    'EmailAddress'=> $enq->email_address,
                    'MobileNumber'=> $enq->mobile_number,
                    'WhatsappNumber'=> $enq->whatsapp_number,
                    'DateOfBirth'=> $enq->date_of_birth,
                    'Address'=> $enq->address,
                    'State'=> $enq->state,
                    'City'=> $enq->city,
                    'Pincode'=> $enq->pincode,
                    'GuardianIdentity'=> $enq->guardian_identity,
                    'FatherName'=> $enq->father_name,
                    'FatherOccupation'=> $enq->father_occupation,
                    'MotherName'=> $enq->mother_name,
                    'MotherOccupation'=> $enq->mother_occupation,
                    'AdditionalGuardianDetails'=> $enq->guardian_identity,
                    'ExpectedStartingSalary'=> $enq->expected_starting_salary,
                    'ExpectedMonthlySalaryAfter5Years'=> $enq->expected_monthly_salary_after_5_years,
                    'PreferredJobLocation'=> $enq->preferred_job_location,
                    'PreferredTrainingDays'=> $enq->preferred_training_days,
                    'PreferredTrainingTime'=> $enq->preferred_training_time,
                   // 'TrainingSchedulePreference'=> $enq->preferred_training_days.' '.$enq->preferred_training_time,
                    'PreviousComputerKnowledge'=> $enq->previous_computer_knowledge,
                ];
                echo json_encode($data);
                exit;
                return redirect("/walkin-form-thank-you");
            }
            
        } catch (\Illuminate\Database\QueryException $e) {
            var_dump($e);
        }
    }


}
