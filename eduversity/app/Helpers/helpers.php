<?php

use Illuminate\Support\Facades\DB;
use Jenssegers\Agent\Facades\Agent;
use App\Models\University;
use App\Models\UniversityCourse;
use App\Models\State;
use App\Models\City;
use App\Models\Vacancy;
use App\Models\JobType;
use App\Models\Media;
use App\Models\Setting;
use App\Models\Review;
use App\Models\Testimonial;
use App\Models\Faq;
use App\Models\Curriculum;

if (! function_exists('check_device')) {
    function check_device($param = null){
        $device = "";
        switch ($param) {
            case 'desktop':
                $device = Agent::isDesktop();
                break;
            case 'tablet':
                $device = Agent::isTablet();
            case 'mobile':
                $device = Agent::isPhone();
                break;
            case 'os':
                $device = Agent::device();
                break;
        }
        
        return $device;
    }
}

if (! function_exists('getSizedImage')) {
    function getSizedImage($size = '',$id) {
        $size = ($size)?$size.'_':"";
        $media = DB::table('media')->where('id',$id)->first();
       
        if($media){
            return $filename = env('APP_URL').$media->path.'/'.$size.$media->filename;
        } else {
            return false;
        }
    }
}

if (! function_exists('getAttachmentUrl')) {
    function getAttachmentUrl($id) {
        $media = DB::table('media')->where('id',$id)->first();
        if($media){
            return $filename = env('APP_URL').$media->path.'/'.$media->filename;
        } else {
            return false;
        }
    }
}

if (! function_exists('thousandsCurrencyFormat')) {
    function thousandsCurrencyFormat($num) {
        if($num>1000) {
            $x = round($num);
            $x_number_format = number_format($x);
            $x_array = explode(',', $x_number_format);
            $x_parts = array('k', 'm', 'b', 't');
            $x_count_parts = count($x_array) - 1;
            $x_display = $x;
            $x_display = $x_array[0] . ((int) $x_array[1][0] !== 0 ? '.' . $x_array[1][0] : '');
            $x_display .= $x_parts[$x_count_parts - 1];
            return $x_display;
        }
        return $num;
    }
}

if (! function_exists('get_theme_setting')) {
    function get_theme_setting($value){
        $media = Setting::where('key',$value)->first();
        return (isset($media->value))?$media->value:"null";
    }
}

if (! function_exists('getTestimonials')) {
    function getTestimonials($model="",$model_id=""){
        $testimonials = DB::table('testimonials');
        if($model){
            $testimonials->where('model',$model);
        } 
        if($model_id){
            $testimonials->where('model_id',$model_id);
        }   
        $testimonials = $testimonials->where('status',"1")->get();
        return $testimonials;
    }
}

if (! function_exists('getFaqs')) {
    function getFaqs($model=null,$model_id=null,$limit=10){
        $faq = DB::table('faqs');
        
        if($model){
            $faq->where('model', 'like', '%"' . $model . '"%');
        } 
        if($model_id){
            $faq->where('model_id',$model_id);
        }   

        $faq = $faq->where('status',"1")->paginate($limit);
        return $faq;
    }
}

if (! function_exists('getRecruiters')) {
    function getRecruiters($model="",$model_id=""){
        $placements = DB::table('recruiters');
        if($model){
            $placements->where('model',$model);
        } 
        if($model_id){
            $placements->where('model_id',$model_id);
        }   
        $placements = $placements->where('status',"1")->get();
        return $placements;
    }
}

if (! function_exists('getStates')) {
    function getStates(){
        try {
            $states = State::where('status', 1)->orderBy("name","asc")->get();
            return $states;
        } catch(\Illuminate\Database\QueryException $e){
            throw $e;
        }
    }
}

if (! function_exists('getStateById')) {
    function getStateById($id){
        try {
            $state = State::findOrFail($id);
            return $state;
        } catch(\Illuminate\Database\QueryException $e){
            throw $e;
        }
    }
}

if (! function_exists('getUniversities')) {
    function getUniversities($course_id=null, $university_id=null){
        $universities = DB::table('universities');
        if($course_id){
            $universities->where('university_courses','like', '%"' . $course_id . '"%');
        } 
        if($university_id){
            $universities->where('id',$university_id);
        } 
        $universities = $universities->where('status',"1");

        //$radies = getRadius($_COOKIE['lat'],$_COOKIE['lng']);
        //$centers->whereBetween('lng', [$radies['minLon'], $radies['maxLon']]);
        //$centers->whereBetween('lat', [$radies['minLat'], $radies['maxLat']]);
        if(isset($_COOKIE['lng']) && isset($_COOKIE['lat'])){
            $universities->orderBy(DB::raw('POW((lng-'.$_COOKIE['lng'].'),2) + POW((lat-'.$_COOKIE['lat'].'),2)'));
        }
        $universities = $universities->get();       
        return $universities;
    }
}

if (!function_exists('getUniversityById')) {
    function getCenterById($center_id = null){
        $center = DB::table('universities');
        if($center_id){
            $center->where('id',$center_id);
        }
        $center = $center->first();       
        return $center;
    }
}

if (! function_exists('getGallery')) {
    function getGallery($course_id=null, $center_id=null){
        $gallery = DB::table('gallery');
        if($center_id){
            $gallery->where("center_id",$center_id);
        } 
        $gallery = $gallery->get();       
        return $gallery;
    }
}

if (! function_exists('getCourses')) {
    function getCourses($university_id = null){
        try {
            $search = (request()->has('search'))?request()->get('search'):"";
            $university_courses = DB::table('university_courses')
            ->join('universities', 'universities.id', '=', 'university_courses.university_id')
            ->select('university_courses.*', 'university_courses.name as course_name','universities.name as university','universities.id as university_id', 'universities.slug as university_slug');
            if($search){
                $university_courses->where('university_courses.name', 'like', '%' . $search . '%');
                $university_courses->orwhere('university_courses.description', 'like', '%' . $search . '%');
                $university_courses->orWhere('universities.name', 'like', '%' . $search . '%');
                $university_courses->orWhere('universities.slug', 'like', '%' . $search . '%');
            }
            if($university_id){
                $university_courses->whereIn('university.id', $university_id);
            }
            
            $university_courses = $university_courses->distinct()
            ->orderBy('university_courses.id', 'asc')
            ->get();
            return $university_courses;
            //return view('courses.index',compact('model','courses','courseTypes'));
        } catch(\Illuminate\Database\QueryException $e){
            throw $e;
        }
    }
}

if (! function_exists('getCourseById')) {
    function getCourseById($course_id = null){
        $course = DB::table('university_courses');
        if($course_id){
            $course->where('id',$course_id);
        }
        $course = $course->first();       
        return $course;
    }
}

if (! function_exists('getCourseTypes')) {
    function getCourseTypes(){
        try {
            return $courseTypes = CourseType::where('status', 1)->get();
        } catch(\Illuminate\Database\QueryException $e){
            throw $e;
        }
    }
}

if (! function_exists('getRadius')) {
    function getRadius($lat,$lon){
        try {
            $R = 3960;  // earth's mean radius
            $rad = '1000';
            // first-cut bounding box (in degrees)
            $maxLat = $lat + rad2deg($rad/$R);
            $minLat = $lat - rad2deg($rad/$R);
            // compensate for degrees longitude getting smaller with increasing latitude
            $maxLon = $lon + rad2deg($rad/$R/cos(deg2rad($lat)));
            $minLon = $lon - rad2deg($rad/$R/cos(deg2rad($lat)));

            $radies = array(
                'lat' => $lat,
                'lon' => $lon,
                'maxLat' => number_format((float)$maxLat, 6, '.', ''),
                'minLat' => number_format((float)$minLat, 6, '.', ''),
                'maxLon' => number_format((float)$maxLon, 6, '.', ''),
                'minLon' => number_format((float)$minLon, 6, '.', ''),
            );
            return $radies;
        } catch(\Illuminate\Database\QueryException $e){
            throw $e;
        }
    }
}

if (! function_exists('getCategories')) {
    function getCategories(){
        $categories = Category::orderBy("id", "DESC")->take(10)->get();
        return $categories;
    }
}

if (! function_exists('getUtmCampaign')) {
    function getUtmCampaign($params = null){
        if(request()->has('utm_campaign')){
            return request()->get('utm_campaign');
        }
        return ($params)?$params:get_theme_setting('utm_campaign');
    }
}

if (! function_exists('getUtmSource')) {
    function getUtmSource($params = null){
        if(request()->has('utm_source')){
            return request()->get('utm_source');
        }
        return ($params)?$params:get_theme_setting('utm_source');
    }
}

if (! function_exists('getCommunicationMedium')) {
    function getCommunicationMedium($params = null){
        if(request()->has('lead_type')){
            return request()->get('lead_type');
        }
        return ($params)?$params:get_theme_setting('lead_type');
    }
}
