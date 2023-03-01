<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Models\Media;
use App\Models\CourseType;

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
                '/accounts-gst-sap-tally-career-opportunities' => "Placements",
                '/career' => "We Are Hiring",
                '/blogs' => "Blogs",
            );
            $view->with('primaryMenu', $primaryMenu);


            //info Menu
            $moreinfo = array(
                '/about-us' => 'About Us',
                '/privacy-policy' => 'Privacy Policy',
                '/terms-conditions' => "Terms & Conditions",
                '/contact-us' => "Contact Us",

            );
            $view->with('moreinfo', $moreinfo);

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
