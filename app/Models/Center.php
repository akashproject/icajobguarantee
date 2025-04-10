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
        'id','code','name','title','slug','banner_image','featured_image','excerpt','description','highlights','email','mobile','whatsapp','address','gmap_location','review_widget','courses','state_id','city_id','district','pincode','center_pincode','lat','lng','tags','enable_otp','meta_description','schema','robots','canonical','utm_campaign','utm_source','status','created_at',
    ];
}
