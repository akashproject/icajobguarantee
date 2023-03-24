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
        'id','name','email','mobile','center','pincode','latitude','longitude','longitude','utm_source','utm_campaign','role','status'
    ];
}
