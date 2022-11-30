<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table = 'blogs';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id','title','slug','banner_image','featured_image','description','seo_description','excerpt','category','tag','author_id','schema','enable_otp','utm_campaign','utm_source','status','created_at'
    ];
}
