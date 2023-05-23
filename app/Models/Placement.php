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
        'id','featured_image','name','course_id','dasignation','placed_at','joining_salary','center_id','status','created_at',
    ];
}
