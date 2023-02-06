<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;
    protected $table = 'testimonials';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id','image','name','course_id','dasignation','comment','video','model','model_id','created_at'
    ];
}
