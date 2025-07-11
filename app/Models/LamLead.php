<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LamLead extends Model
{
    use HasFactory;
    protected $table = 'lams';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id','name','email','mobile','pincode','date_of_birth','alternate_mobile_number','qualification','college','experience','other_experience','career_option','other_career_option','LeadType','utm_term','utm_device','utm_adgroup','utm_content','utm_creative','utm_adset','store_area','ref_code','source_url','center','utm_source','utm_campaign','crmStatus','mailStatus','created_at',
    ];
}
