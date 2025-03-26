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
        'id','center_id','course_type','course','name','address','state_id','city','pincode','dob','occupation','mobile','email','parent_name','parent_mobile','parent_email','parent_occupation','qualification','professional_qualification','passing_year','experience','know_from','job_interest','admission_date','slot_day','slot_time','meta_data'
    ];
}
