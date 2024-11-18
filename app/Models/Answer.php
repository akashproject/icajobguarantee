<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;
    protected $table = 'answers';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id','question_id','answer','is_true','created_at',
    ];
}
