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
        'id','title','slug','parent_id','created_at',
    ];
}
