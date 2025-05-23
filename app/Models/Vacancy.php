<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    use HasFactory;
    protected $table = 'vacancy';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id','type_id','name','description','location','type','experince','salary','status','created_at',
    ];
}