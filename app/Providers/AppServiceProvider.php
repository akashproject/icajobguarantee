<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Models\Media;
use App\Models\CourseType;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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
                '/franchise-opportunity' => "Franchise",               
                '/eduversity' => "University",
                '/placements' => "Placements",
                '/career' => "Career",
            );
            $view->with('primaryMenu', $primaryMenu);


            //info Menu
            $footerMenu = array(
                '/events' => 'Events',
                '/blog' => 'Blogs',
                '/about-us' => 'About Us',
                '/contact-us' => "Contact Us",
            );
            $view->with('footerMenu', $footerMenu);

            //student Menu
            $studentMenu = array(
                "/category/career-courses" => 'Career Courses',
                "/centers" => "Centers",
                "/eduversity" => "University",
                "https://www.icacourse.in" => "Online Courses",
                "https://student.icajobguarantee.com/verify/certificateverification.aspx" => "Certificate Verification",
                
            );
            $view->with('studentMenu', $studentMenu);

             //student Menu
             $termsMenu = array(
                '/category/career-courses' => 'Career Courses',
                '/centers' => 'Centers',
                '/eduversity' => "University",
                '/online-courses' => "Online Courses",
            );
            $view->with('termsMenu', $termsMenu);

            // Category Menu
            $media = Media::orderBy('created_at', 'desc')->get();
            $view->with('media', $media);

            $courseMenu = array(
                '#tab3' => array('rel'=>"tab3",'value'=>"Highlights"),
                '#tab4' => array('rel'=>"tab4",'value'=>"Syllabus"),
                '#career' => array('rel'=>"",'value'=>"Careers"),
                '#alumni' => array('rel'=>"",'value'=>"Alumni"),
                '#courses' => array('rel'=>"",'value'=>"Related Courses"),
                '#review' => array('rel'=>"",'value'=>"Reviews"),
                '#faq' => array('rel'=>"",'value'=>"FAQs"),
            );
            $view->with('courseMenu', $courseMenu);

            $courseTypes = CourseType::All();
            foreach ($courseTypes as $key => $value) {
                $courses = DB::table('courses')->where("type_id",$value->id)->where("status",1)->get();
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


            //Ad Menu
            $adHeaderMenu = array(
                '#about' => "About Us",
                '#recruiters' => "Recruiters",
                '#course' => "Courses",
                '#certificate' => 'Certificates',
                '#galleries' => "Gallery",
                '#alumni' => "Testimonial",
                '#faq' => "FAQs",
            );
            $view->with('adHeaderMenu', $adHeaderMenu);

            $user = Auth::user();
            $view->with('user', $user);
        });
    }
}
