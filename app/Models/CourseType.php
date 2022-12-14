<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseType extends Model
{
    use HasFactory;
    protected $table = 'course_type';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id','name','title','slug','description','parent_id','meta_description','schema','robots','canonical','utm_campaign','utm_source','created_at',
    ];
}
