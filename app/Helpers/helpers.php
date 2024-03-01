<?php

use Illuminate\Support\Facades\DB;
use Jenssegers\Agent\Facades\Agent;
use Illuminate\Support\Facades\Cache;
use Razorpay\Api\Api;
use App\Models\Center;
use App\Models\Course;
use App\Models\CourseType;
use App\Models\State;
use App\Models\City;
use App\Models\Vacancy;
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
use App\Models\Assessment;
use App\Models\Question;
use App\Models\Answer;
use App\Models\Report;

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
        $reviews = $reviews->paginate(10);;   
                           
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

        $testimonials = Cache::rememberForever('testimonials', function () use($model,$model_id) {
            $testimonials = DB::table('testimonials');
            if($model){
                $testimonials->where('model',$model);
            } 
            if($model_id){
                $testimonials->where('model_id',$model_id);
            }   
            return $testimonials->where('status',"1")->get();
        });
        return $testimonials;
    }
}

if (! function_exists('getFaqs')) {
    function getFaqs($model=null,$model_id=null,$limit=10){

        $faq_ids = DB::table('faq_meta')->select('faqs')->where('model',$model)->where('model_id',$model_id)->first();
        $faq = DB::table('faqs');
        if($faq_ids !== null){
            $faq->whereIn('id',json_decode($faq_ids->faqs));
        }
        $faq = $faq->where('status',"1")->paginate($limit);

        return $faq;
    }
}

if (! function_exists('getAllFaqs')) {
    function getAllFaqs(){
        $faq = DB::table('faqs')->where('status',"1")->get();
        return $faq;
    }
}

if (! function_exists('getAllBlogs')) {
    function getAllBlogs(){
        // Get Post
        $url = "https://www.icajobguarantee.com/blog/wp-json/wp/v2/posts?filter[orderby]=date&order=desc&per_page=100&_fields=id,title,date";
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        //for debug only!
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        $resp = curl_exec($curl);
        curl_close($curl);

        $post = json_decode($resp);
        return $post;
    }
}

if (! function_exists('getRecruiters')) {
    function getRecruiters($model="",$model_id=""){
        $placements = Cache::rememberForever('recruiters', function () use ($model,$model_id){
            $placements = DB::table('recruiters');
            if($model){
                $placements->where('model',$model);
            } 
            if($model_id){
                $placements->where('model_id',$model_id);
            }   
            return $placements->where('status',"1")->get();
        });
        return $placements;
    }
}

if (! function_exists('getAssessment')) {
    function getAssessment() {
        try {
            $assessment = Assessment::all();
            return $assessment;
        } catch(\Illuminate\Database\QueryException $e){
            throw $e;
        }
    }
}

if (! function_exists('getJoinees')) {
    function getJoinees($center_id=null,$course_id=null){
        $placements = DB::table('placements');
        if($center_id){
            $placements->where('center_id',$center_id);
        } 

        if($course_id){
            $placements->where('course_id',$course_id);
        } 


        $placements = $placements->where('status',"1")->inRandomOrder()->paginate(12);
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
            $city = DB::table('cities')->where('id',$id)->first();
            return $city;
        } catch(\Illuminate\Database\QueryException $e){
            throw $e;
        }
    }
}

if (! function_exists('getCitiesByStateName')) {
    function getCitiesByStateName($state){
        try {
            $cities = DB::table('cities')
            ->join('states', 'cities.state_id', '=', 'states.id')
            ->where('states.name',$state)
            ->select('cities.*')
            ->get();
            return $cities;
        } catch(\Illuminate\Database\QueryException $e){
            throw $e;
        }
    }
}

if (! function_exists('getCenters')) {
    function getCenters($course_id=null, $center_id=null){

        
        $centers = Cache::rememberForever('centers', function () use ($course_id,$center_id){
            $centers = DB::table('centers');
            if($course_id){
                $centers->where('courses','like', '%"' . $course_id . '"%');
            } 
            if($center_id){
                $centers->where('id',$center_id);
            } 
            $centers = $centers->where('status',"1");
            if(isset($_COOKIE['lng']) && isset($_COOKIE['lat'])){
                $centers->orderBy(DB::raw('POW((lng-'.$_COOKIE['lng'].'),2) + POW((lat-'.$_COOKIE['lat'].'),2)'));
            } else {
                $centers->orderBy("name","asc");
            }
            $centers->where('status',1);
            return $centers->get();     
        });
        return $centers;
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

if (!function_exists('getCenterByCityId')) {
    function getCenterByCityId($city = null,$centername = null){
        $center = DB::table('centers')
                ->join('cities', 'cities.id', '=', 'centers.city_id')
                ->select('centers.id','centers.name');
        if($city){
            $center->where('cities.name',$city);
        }

        if($centername){
            $center->where('centers.name',$centername);
        }

        $center->where('centers.status','1');
        $center = $center->get();       
        return $center;
    }
}

if (!function_exists('getCenterById')) {
    function getCenterById($center_id = null){
        $center = DB::table('centers');
        if($center_id){
            $center->where('id',$center_id);
        }
        $center = $center->first();       
        return $center;
    }
}

if (!function_exists('getCenterByStateId')) {
    function getCenterByStateId($state = null,$centername = null){
        $center = DB::table('centers')
                ->join('states', 'states.id', '=', 'centers.state_id')
                ->select('centers.id','centers.name');
        if($state){
            $center->where('states.name',$state);
        }

        if($centername){
            $center->where('centers.name',$centername);
        }

        $center->where('centers.status','1');
        $center = $center->orderBy('name', 'asc')->get();       
        return $center;
    }
}

if (!function_exists('getCenterByBucket')) {
    function getCenterByBucket($name = null){
        $bucket = DB::table('center_buckets')->where("name",$name)->first();
        $center_id = json_decode($bucket->center_id);
        
        $centers = DB::table('centers')
                ->whereIn('id',$center_id)
                ->where('status',1)
                ->orderBy('name', 'asc')
                ->get();
       
  
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
    function getCourses($course_type_id = null){
        try {
            $search = (request()->has('search'))?request()->get('search'):"";
            $courses = DB::table('courses')
            ->join('course_type', 'course_type.id', '=', 'courses.type_id')
            ->select('courses.*', 'courses.name as course_name','course_type.name as category','course_type.id as category_id');
            if($search){
                $courses->where('courses.name', 'like', '%' . $search . '%');
                $courses->orwhere('courses.description', 'like', '%' . $search . '%');
                $courses->orWhere('course_type.name', 'like', '%' . $search . '%');
                $courses->orWhere('course_type.slug', 'like', '%' . $search . '%');
            }
            if($course_type_id){
                $courses->whereIn('course_type.id', $course_type_id);
            }
            $courses->where('courses.status', '1');
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

if (! function_exists('getErpCourseCode')) {
    function getErpCourseCode($course_id = null){
        try {
            $course = DB::table('courses');
            if($course_id){
                $course->where('id',$course_id);
            }
            return $course = $course->first();       
            //return view('courses.index',compact('model','courses','courseTypes'));
        } catch(\Illuminate\Database\QueryException $e){
            throw $e;
        }
    }
}

if (! function_exists('getUniversityCourses')) {
    function getUniversityCourses($university_id = null){
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
        $course = DB::table('courses');
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

if (! function_exists('getCourseCarriculams')) {
    function getCourseCarriculams($id){
        try {
            return $carriculams = Curriculum::where('course_id',$id)->get();
        } catch(\Illuminate\Database\QueryException $e){
            throw $e;
        }
    }
}

if (! function_exists('getEvents')) {
    function getEvents($center_id = null){
        try {
            $events = DB::table('events')
            ->join('centers', 'centers.id', '=', 'events.center_id')
            ->select('events.*', 'events.name as event','centers.name as center','centers.id as center_id','centers.slug as center_slug');
            if($center_id){
                $events->where('center_id',$center_id);
            } 
            $events = $events->where('events.status', '1')
            ->distinct()
            ->orderBy('events.id', 'asc')
            ->get();
            return $events;
        } catch(\Illuminate\Database\QueryException $e){
            throw $e;
        }
    }
}

if (! function_exists('getJobs')) {
    function getJobs(){
        try {
            return $vacancies = Vacancy::where('status', 1)->get();
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
    function getBlogs($ids = null){
        try {
            
            $post = array();
            $includes = '';
            if ($ids == null) {
                return $post = [];
            }
            
            $ids = implode(",",json_decode($ids,true));
            $includes = "include=".$ids;
            $url = "https://www.icajobguarantee.com/blog/wp-json/wp/v2/posts?".$includes."&_fields=id,title,excerpt,featured_media,date,link&date";
            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

            //for debug only!
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

            $resp = curl_exec($curl);
            curl_close($curl);
            $post = json_decode($resp);

            foreach ($post as $key => $value) {
               
                $url = "https://www.icajobguarantee.com/blog/wp-json/wp/v2/media/".$value->featured_media;

                $curl = curl_init($url);
                curl_setopt($curl, CURLOPT_URL, $url);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                
                //for debug only!
                curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
                curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
                
                $resp = curl_exec($curl);
                curl_close($curl);
                $media = json_decode($resp);
                $post[$key]->source_url = ($media->source_url)?$media->source_url:"";
            }
            
            return $post;
        } catch (\Throwable $th) {
            var_dump($th);
        }
    }
}

if (! function_exists('getNews')) {
    function getNews(){
        try {
            $news = DB::table('news')->where('status',"1")->get();
            return $news;
        } catch (\Throwable $th) {
            var_dump($th);
        }
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

if (! function_exists('encryption')) {
    function encryption($plainText,$key)
    {
        $key = hextobin(md5($key));
        $initVector = pack("C*", 0x00, 0x01, 0x02, 0x03, 0x04, 0x05, 0x06, 0x07, 0x08, 0x09, 0x0a, 0x0b, 0x0c, 0x0d, 0x0e, 0x0f);
        $openMode = openssl_encrypt($plainText, 'AES-128-CBC', $key, OPENSSL_RAW_DATA, $initVector);
        $encryptedText = bin2hex($openMode);
        return $encryptedText;
    }
}

if (! function_exists('decryption')) {
    function decryption($encryptedText,$key)
    {
        $key = hextobin(md5($key));
        $initVector = pack("C*", 0x00, 0x01, 0x02, 0x03, 0x04, 0x05, 0x06, 0x07, 0x08, 0x09, 0x0a, 0x0b, 0x0c, 0x0d, 0x0e, 0x0f);
        $encryptedText = hextobin($encryptedText);
        $decryptedText = openssl_decrypt($encryptedText, 'AES-128-CBC', $key, OPENSSL_RAW_DATA, $initVector);
        return $decryptedText;
    }
}

if (! function_exists('hextobin')) {
    function hextobin($hexString){ 
        $length = strlen($hexString); 
        $binString="";   
        $count=0; 
        while($count<$length) 
        {       
            $subString =substr($hexString,$count,2);           
            $packedString = pack("H*",$subString); 
            if ($count==0) {
                $binString=$packedString;
            } 
            
            else {
                $binString.=$packedString;
            } 
            
            $count+=2; 
        } 
        return $binString; 
    } 
}

if (! function_exists('random_strings')) {
    function random_strings($length_of_string) {
    
        // String of all alphanumeric character
        $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    
        // Shuffle the $str_result and returns substring
        // of specified length
        return substr(str_shuffle($str_result),
                        0, $length_of_string);
    }
}