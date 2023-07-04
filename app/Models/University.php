<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    use HasFactory;
    protected $table = 'universities';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id','name','title','slug','banner_image','featured_image','excerpt','address','courses','state_id','city_id','enable_otp','meta_description','schema','robots','canonical','utm_campaign','utm_source','status','created_at',
    ];
}
