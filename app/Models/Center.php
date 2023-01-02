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
        'id','name','title','slug','banner_image','featured_image','description','highlights','email','mobile','whatsapp','gmap_location','gmap_location','state_id','city_id','pincode','center_pincode','tags','enable_otp','meta_description','schema','robots','canonical','utm_campaign','utm_source','status','created_at',
    ];
}
