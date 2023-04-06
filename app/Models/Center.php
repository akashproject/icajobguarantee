<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Center extends Model
{
    use HasFactory;
    protected $table = 'centers';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id','name','title','slug','banner_image','featured_image','excerpt','description','highlights','email','mobile','whatsapp','address','gmap_location','courses','state_id','city_id','pincode','center_pincode','lat','lng','tags','enable_otp','meta_description','schema','robots','canonical','utm_campaign','utm_source','status','created_at',
    ];
}
