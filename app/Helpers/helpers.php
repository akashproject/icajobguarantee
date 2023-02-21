<?php
use App\Models\Media;
use App\Models\Setting;
use App\Models\Review;
use App\Models\Testimonial;
use App\Models\Faq;
use Illuminate\Support\Facades\DB;

if (! function_exists('getSizedImage')) {
    function getSizedImage($size = '',$id) {
        $size = ($size)?$size.'_':"";
        $media = Media::findOrFail($id);
        return $filename = env('APP_URL').$media->path.'/'.$size.$media->filename;
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
        return $media->value;
    }
}

if (! function_exists('get_reviews_ratings')) {
    function get_reviews_ratings($model="",$model_id=""){
        $reviews = Review::where('model',$model);
        if($model){
            $reviews->where('model',$model);
        } 
        if($model_id){
            $reviews->where('model_id',$model_id);
        } 
        $reviews->where('status',"1");     
        $reviews = $reviews->get();                      
        $total = $reviews->sum('rating');
        
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

if (! function_exists('get_testimonials')) {
    function get_testimonials($model="",$model_id=""){
        $testimonials = Testimonial::where('model',$model);
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

if (! function_exists('get_faqs')) {
    function get_faqs($model="",$model_id=""){
        $faq = Faq::where('model',$model);
        if($model){
            $faq->where('model',$model);
        } 
        if($model_id){
            $faq->where('model_id',$model_id);
        }    
        $faq = $faq->where('status',"1")->get();
        return $faq;
    }
}

if (! function_exists('get_placements')) {
    function get_placements($model="",$model_id=""){
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