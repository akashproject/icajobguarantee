<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $table = 'courses';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id','type_id','name','title','slug','banner_image','featured_image','description','offer_price','price','duration','no_of_module','highlights','criteria','tags','meta_description','schema','robots','canonical','utm_campaign','utm_source','status','created_at',
    ];

}
