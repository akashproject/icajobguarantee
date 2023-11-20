<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AffiliateUser extends Model
{
    use HasFactory;
    protected $table = 'affiliate_users';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id','center_id','model','name','email','mobile','code','pan_photo','pan_number','aadhar_photo','aadhar_number','account_holder_name','account_no','branch','ifsc','cheque','status','created_at'
    ];
}
