<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $table = 'pages';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id','type_id','title','slug','banner_image','featured_image','description','seo_description','offer_price','price','duration','no_of_module','highlights','criteria','enable_otp','schema','utm_campaign','utm_source','status','created_at',
    ];

}
