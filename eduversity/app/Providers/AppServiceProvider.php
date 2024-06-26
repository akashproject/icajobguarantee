<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Models\Media;
use Illuminate\Support\Facades\DB;
use View;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        Paginator::useBootstrap();
 
        View::composer('*', function($view)
        {

            // Header Menu
            $primaryMenu = array(
                '/' => "Home",                
                '/universities' => "Universities",                
                '/college-courses' => "Courses",                
                '/refer-and-earn' => "Refer & Earn",                
                
            );
            $view->with('primaryMenu', $primaryMenu);


            //info Menu
            $footerMenu = array(
                '/placements' => 'Events',
                '/blog' => 'Blogs',
                '/about-us' => 'About Us',
                '/contact-us' => "Contact Us",
            );
            $view->with('footerMenu', $footerMenu);

            //student Menu
            $studentMenu = array(
                "/category/career-courses" => 'Career Courses',
                "/centers" => "Centers",
                "/university" => "University",
                "https://www.icacourse.in" => "Online Courses",
                "https://student.icajobguarantee.com/verify/certificateverification.aspx" => "Certificate Verification",
                
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
            $media = Media::orderBy('created_at', 'desc')->get();
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


            //Ad Menu
            $adHeaderMenu = array(
                '#about' => "About Us",
                '#recruiters' => "Recruiters",
                '#course' => "Courses",
                '#alumni' => "Testimonial",
                '#faq' => "FAQs",
            );
            $view->with('adHeaderMenu', $adHeaderMenu);
        });
    }
}
