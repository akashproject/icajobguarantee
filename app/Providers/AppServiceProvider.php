<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Models\Media;
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
                '/' => 'Home',
                '/about-us' => "About Us",
                '/courses' => "Courses",
                '/centers' => "Centers",
                '/accounts-gst-sap-tally-career-opportunities' => "Placements",
                '/franchise-opportunity' => "Franchise Opportunity",
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
        });
    }
}
