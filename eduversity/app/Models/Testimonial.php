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
        'id','featured_image','name','course_id','dasignation','placed_at','comment','video','model','model_id','status','created_at'
    ];
}
