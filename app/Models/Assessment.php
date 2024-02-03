<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assessment extends Model
{
    use HasFactory;
    protected $table = 'assessments';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id','course_id','name','description','total_mark','duration','status','created_at',
    ];
}