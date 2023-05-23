<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Models\Media;
use App\Models\CourseType;
use Illuminate\Support\Facades\DB;

use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Paginator::useBootstrap();
 
        View::composer('*', function($view)
        {

            // Header Menu
            $primaryMenu = array(
                '/centers' => "Centers",                
                '/franchise-opportunity' => "For Franchise",               
                '/university' => "For University",
                '/placements' => "Placements",
                '/career' => "We Are Hiring",
                '/blog' => "Blogs",
            );
            $view->with('primaryMenu', $primaryMenu);


            //info Menu
            $footerMenu = array(
                '/about-us' => 'About Us',
                '/privacy-policy' => 'Privacy Policy',
                '/terms-conditions' => "Terms & Conditions",
                '/contact-us' => "Contact Us",

            );
            $view->with('footerMenu', $footerMenu);

            //student Menu
            $studentMenu = array(
                '/category/career-courses' => 'Career Courses',
                '/centers' => 'Centers',
                '/university' => "University",
                '/online-courses' => "Online Courses",
            );
            $view->with('studentMenu', $studentMenu);

             //student Menu
             $termsMenu = array(
                '/category/career-courses' => 'Career Courses',
                '/centers' => 'Centers',
                '/university' => "University",
                '/online-courses' => "Online Courses",
            );
            $view->with('termsMenu', $termsMenu);

            // Category Menu
            $media = Media::all();
            $view->with('media', $media);

            $courseMenu = array(
                '#tab3' => array('rel'=>"tab3",'value'=>"Highlights"),
                '#tab4' => array('rel'=>"tab4",'value'=>"Curriculam"),
                '#career' => array('rel'=>"",'value'=>"Careers"),
                '#alumni' => array('rel'=>"",'value'=>"Alumni"),
                '#courses' => array('rel'=>"",'value'=>"Related Courses"),
                '#review' => array('rel'=>"",'value'=>"Reviews"),
                '#faq' => array('rel'=>"",'value'=>"FAQs"),
            );
            $view->with('courseMenu', $courseMenu);

            $courseTypes = CourseType::All();
            foreach ($courseTypes as $key => $value) {
                $courses = DB::table('courses')->where("type_id",$value->id)->get();
                $courseTypes[$key]->courses = $courses;
            }

            $view->with('courseTypes', $courseTypes);


            $centerMenu = array(
                '#tab3' => array('rel'=>"tab3",'value'=>"Highlights"),
                '#tab4' => array('rel'=>"tab4",'value'=>"Curriculam"),
                '#career' => array('rel'=>"",'value'=>"Careers"),
                '#alumni' => array('rel'=>"",'value'=>"Alumni"),
                '#courses' => array('rel'=>"",'value'=>"Related Courses"),
                '#review' => array('rel'=>"",'value'=>"Reviews"),
                '#faq' => array('rel'=>"",'value'=>"FAQs"),
            );
            $view->with('centerMenu', $centerMenu);


            //Models
            $models =  array("Blog","Center","Course","CourseType","University");
            $view->with('models', $models);
        });
    }
}
