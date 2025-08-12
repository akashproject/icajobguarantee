<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    use HasFactory;
    protected $table = 'enquiries';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id','center_id','lead_owner','purpose_of_enquiry','daily_time_spend','job_aspiration','expected_joining_timeline','preferred_career_field','highest_qualification','college','date_of_passing','current_education_status','current_semester','current_shift','professional_course_status','other_professional_course_status','preferred_training_language','is_job_role','job_role','full_name','email_address','mobile_number','whatsapp_number','date_of_birth','address','state','city','pincode','guardian_identity','additional_guardian_details','father_name','father_occupation','other_father_occupation','mother_name','mother_occupation','other_mother_occupation','parent_mobile_number','expected_starting_salary','expected_monthly_salary_after_5_years','preferred_job_location','preferred_training_days','preferred_training_time','pink_form_source','previous_computer_knowledge','response_log','created_at',
    ];
}