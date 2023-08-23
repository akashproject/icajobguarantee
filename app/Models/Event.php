<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $table = 'events';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id','name','title','slug','center_id','banner_image','featured_image','speaker_avatar','speaker','excerpt','description','start_date','end_date','enable_otp','meta_description','schema','robots','canonical','utm_campaign','utm_source','status','created_at'
    ];
}