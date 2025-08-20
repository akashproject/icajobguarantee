<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;
    protected $table = 'leads';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id','name','email','mobile','center','city','pincode','date_of_birth','alternate_mobile_number','qualification','institute','experience','other_experience','career_option','other_career_option','latitude','longitude','longitude','lead_type','utm_source','utm_campaign','utm_term','utm_device','utm_creative','utm_adgroup','utm_content','utm_adset','store_area','ref_code','source_url','role','otp_status','crm_status','crm_response','mail_status'
    ];
}
