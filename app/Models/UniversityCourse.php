<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UniversityCourse extends Model
{
    use HasFactory;
    protected $table = 'university_courses';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id','name','title','slug','course_video_title','course_video_link','course_video_image','banner_image','featured_image','brochure_id','description','excerpt','offer_price','price','duration','no_of_module','highlights','criteria','number_of_enrolled','number_of_rating','tags','enable_otp','meta_description','schema','robots','canonical','utm_campaign','utm_source','status','created_at',
    ];
}
