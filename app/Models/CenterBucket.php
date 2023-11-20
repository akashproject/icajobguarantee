<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CenterBucket extends Model
{
    use HasFactory;
    protected $table = 'center_buckets';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id','name','center_id','created_at',
    ];
}
