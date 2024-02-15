<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    protected $table = 'assessment_reports';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id','assessment_id','total_question','total_duration','total_mark','taken_time','report','lead_id','attempt','correct','accuracy','score','percentile','created_at',
    ];
}
