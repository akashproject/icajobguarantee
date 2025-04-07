<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lam extends Model
{
    use HasFactory;
    protected $table = 'lams';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id','name','slug','banner_image','description','template','store_area','whatsapp_campaign_id','title','enable_otp','meta_description','schema','robots','canonical','utm_campaign','utm_source','lead_type','status','created_at',
    ];
}
