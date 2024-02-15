<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventType extends Model
{
    use HasFactory;
    protected $table = 'event_types';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id','name','title','slug','excerpt','description','banner_image','featured_image','brochure_id','parent_id','enable_assessment','meta_description','schema','robots','canonical','utm_campaign','utm_source','created_at',
    ];

}
