<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CenterCourse extends Model
{
    use HasFactory;
    protected $table = 'center_courses';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id','course_id','center_id','name','title','description','excerpt','enable_otp','meta_description','schema','robots','canonical','utm_campaign','utm_source','status','created_at',
    ];
}
