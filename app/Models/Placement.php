<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Placement extends Model
{
    use HasFactory;
    protected $table = 'placements';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id','featured_image','name','title','bio','course_id','dasignation','placed_at','center_id','enable_otp','meta_description','schema','robots','canonical','utm_campaign','utm_source','status','created_at',
    ];
}
