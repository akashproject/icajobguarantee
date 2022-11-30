<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;
    protected $table = 'pages';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id','title','slug','banner_image','description','seo_description','template','enable_otp','schema','utm_campaign','utm_source','created_at',
    ];
}