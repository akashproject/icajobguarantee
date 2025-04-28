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
        'id','name','email','mobile','center','city','pincode','latitude','longitude','longitude','utm_source','utm_campaign','utm_term','utm_device','utm_creative','source_url','role','otp_status','crm_status','crm_response','mail_status'
    ];
}
