<?php

use Illuminate\Support\Facades\DB;
use Jenssegers\Agent\Facades\Agent;
use App\Models\Center;
use App\Models\Course;
use App\Models\CourseType;
use App\Models\State;
use App\Models\City;
use App\Models\Job;
use App\Models\JobType;
use App\Models\Media;
use App\Models\Setting;
use App\Models\Review;
use App\Models\Testimonial;
use App\Models\Faq;
use App\Models\Author;
use App\Models\Tag;
use App\Models\Category;
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
        // $media = Media::findOrFail($id);
        if($media){
            return $filename = env('APP_URL').$media->path.'/'.$size.$media->filename;
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

if (! function_exists('get_reviews_ratings')) {
    function get_reviews_ratings($model="",$model_id=""){
        $reviews = DB::table('reviews');
        if($model){
            $reviews->where('model',$model);
        } 
        if($model_id){
            $reviews->where('model_id',$model_id);
        } 
        $reviews->where('status',"1");     
        $reviews = $reviews->get();                      
        $total = $reviews->sum('rating');

        if(count($reviews) <= 0){
            return false;
        }
        
        $avg = number_format((float)$total/count($reviews), 1, '.', '');

        $ratingvalue = array();
        foreach ($reviews as $key => $review) {
            $ratingvalue[] = $review->rating;
        }
        $ratingvalue = array_count_values($ratingvalue);

        $ratings = array();
        for ($i=5; $i >= 1; $i--) { 
            $ratings[$i] = (array_key_exists($i, $ratingvalue))?$ratingvalue[$i]:"0";
        }
        $reviewRatings = array(
            'reviews' => $reviews,
            'avarageRating' =>$avg,
            'reviewCount' => count($reviews),
            'ratings' => $ratings
        );
        return $reviewRatings;
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
    function getFaqs($model="",$model_id=""){
        $faq = DB::table('faqs');
        if($model){
            $faq->where('model', 'like', '%"' . $model . '"%');
        } 
        if($model_id){
            $faq->where('model_id',$model_id);
        }    
        $faq = $faq->where('status',"1")->get();
        return $faq;
    }
}

if (! function_exists('getPlacements')) {
    function getPlacements($model="",$model_id=""){
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

if (! function_exists('getRecruterById')) {
    function getRecruterById($id=""){
        $recruiter = DB::table('recruiters')->where('id',$id)->first();
        return $recruiter;
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

if (! function_exists('getCityById')) {
    function getCityById($id){
        try {
            $state = City::findOrFail($id);
            return $state;
        } catch(\Illuminate\Database\QueryException $e){
            throw $e;
        }
    }
}

if (! function_exists('getCenters')) {
    function getCenters($course_id=null, $center_id=null){
        $centers = DB::table('centers');
        if($course_id){
            $centers->where('courses','like', '%"' . $course_id . '"%');
        } 
        if($center_id){
            $centers->where('id',$center_id);
        } 
        $centers = $centers->where('status',"1");

        //$radies = getRadius($_COOKIE['lat'],$_COOKIE['lng']);
        //$centers->whereBetween('lng', [$radies['minLon'], $radies['maxLon']]);
        //$centers->whereBetween('lat', [$radies['minLat'], $radies['maxLat']]);
        if(isset($_COOKIE['lng']) && isset($_COOKIE['lat'])){
            $centers->orderBy(DB::raw('POW((lng-'.$_COOKIE['lng'].'),2) + POW((lat-'.$_COOKIE['lat'].'),2)'));
        }
        
        
        $centers = $centers->get();       
        return $centers;
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
    function getCourses(){
        try {
            $search = (request()->has('search'))?request()->get('search'):"";
            $courses = DB::table('courses')
            ->join('course_type', 'course_type.id', '=', 'courses.type_id')
            ->select('courses.*', 'courses.name as course_name','course_type.name as category','course_type.id as category_id');
            if($search){
                $courses->where('courses.name', 'like', '%' . $search . '%');
                $courses->where('courses.description', 'like', '%' . $search . '%');
                $courses->orWhere('course_type.name', 'like', '%' . $search . '%');
                $courses->orWhere('course_type.slug', 'like', '%' . $search . '%');
            }
            $courses = $courses->distinct()
            ->orderBy('courses.id', 'asc')
            ->get();
            return $courses;
            //return view('courses.index',compact('model','courses','courseTypes'));
        } catch(\Illuminate\Database\QueryException $e){
            throw $e;
        }
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

if (! function_exists('getCourseCarriculams')) {
    function getCourseCarriculams($id){
        try {
            return $carriculams = Curriculum::where('course_id',$id)->get();
        } catch(\Illuminate\Database\QueryException $e){
            throw $e;
        }
    }
}

if (! function_exists('getJobs')) {
    function getJobs(){
        try {
            return $jobs = Job::where('status', 1)->get();
        } catch(\Illuminate\Database\QueryException $e){
            throw $e;
        }
    }
}

if (! function_exists('getJobTypes')) {
    function getJobTypes(){
        try {
            return $jobtypes = JobType::where('status', 1)->get();
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

if (! function_exists('getBlogs')) {
    function getBlogs($blog_id=null, $course_id=null, $tag_id=null){
        $blogs = DB::table('blogs');
        // if($course_id){
        //     $centers->where('courses','like', '%"' . $course_id . '"%');
        // } 
        // if($center_id){
        //     $centers->where('id',$center_id);
        // } 
        $blogs = $blogs->where('status',"1");
        $blogs = $blogs->get();       
        return $blogs;
    }
}

if (! function_exists('getAuthorById')) {
    function getAuthorById($author_id=null){
        $author = Author::findOrFail($author_id);
        return $author;
    }
}

if (! function_exists('getTags')) {
    function getTags(){
        $tags = Tag::orderBy("id", "DESC")->take(10)->get();
        return $tags;
    }
}

if (! function_exists('getCategories')) {
    function getCategories(){
        $categories = Category::orderBy("id", "DESC")->take(10)->get();
        return $categories;
    }
}