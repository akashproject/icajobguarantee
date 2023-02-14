<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['prefix' => 'administrator', 'namespace' => 'Admin'], function () {
    //Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'create'])->name('admin-register');
    Route::get('/login', [App\Http\Controllers\Administrator\AdminAuthController::class, 'login'])->name('admin-login');
    Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'authenticate'])->name('verify-login');
    
    Route::group(['middleware' => 'auth'], function () {
        Route::get('/', [App\Http\Controllers\Administrator\IndexController::class, 'index'])->name('administrator');
        Route::get('/dashboard', [App\Http\Controllers\Administrator\IndexController::class, 'index'])->name('dashboard');
        Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('administrator-logout');
        
        //Courses
        Route::get('/courses', [App\Http\Controllers\Administrator\CourseController::class, 'index'])->name('admin-courses');
        Route::get('/add-course', [App\Http\Controllers\Administrator\CourseController::class, 'Add'])->name('admin-add-course');
        Route::get('/view-course/{id}', [App\Http\Controllers\Administrator\CourseController::class, 'show'])->name('admin-view-course');
        Route::post('/save-course', [App\Http\Controllers\Administrator\CourseController::class, 'save'])->name('admin-save-course');
        Route::get('/delete-course/{id}', [App\Http\Controllers\Administrator\CourseController::class, 'delete'])->name('admin-delete-course');

        Route::get('/curriculum/{id}', [App\Http\Controllers\Administrator\CourseController::class, 'curriculum'])->name('admin-curriculum');
        Route::post('/save-curriculum', [App\Http\Controllers\Administrator\CourseController::class, 'saveCurriculum'])->name('admin-save-curriculum');

        //Course Type
        Route::get('/course-type', [App\Http\Controllers\Administrator\CourseTypeController::class, 'index'])->name('admin-course-type');
        Route::get('/add-course-type', [App\Http\Controllers\Administrator\CourseTypeController::class, 'add'])->name('admin-add-course-type');
        Route::get('/view-course-type/{id}', [App\Http\Controllers\Administrator\CourseTypeController::class, 'show'])->name('admin-view-course-type');
        Route::post('/save-course-type', [App\Http\Controllers\Administrator\CourseTypeController::class, 'save'])->name('admin-save-course-type');
        Route::get('/delete-course-type/{id}', [App\Http\Controllers\Administrator\CourseTypeController::class, 'delete'])->name('admin-delete-course-type');

        //Centers
        Route::get('/centers', [App\Http\Controllers\Administrator\CenterController::class, 'index'])->name('admin-centers');
        Route::get('/add-center', [App\Http\Controllers\Administrator\CenterController::class, 'add'])->name('admin-add-center');
        Route::get('/view-center/{id}', [App\Http\Controllers\Administrator\CenterController::class, 'show'])->name('admin-view-center');
        Route::post('/save-center', [App\Http\Controllers\Administrator\CenterController::class, 'save'])->name('admin-save-center');
        Route::get('/delete-center/{id}', [App\Http\Controllers\Administrator\CenterController::class, 'delete'])->name('admin-delete-center');
        Route::post('/get-city-by-state-id', [App\Http\Controllers\Administrator\CenterController::class, 'getCitiesByStateId'])->name('get-city-by-state-id');

        // Media 
        Route::get('/media', [App\Http\Controllers\Administrator\MediaController::class, 'index'])->name('admin-media');
        Route::post('/upload', [App\Http\Controllers\Administrator\MediaController::class, 'save'])->name('admin-save-media');
        Route::post('/search-media', [App\Http\Controllers\Administrator\MediaController::class, 'search'])->name('admin-search-media');


        //Settings
        Route::get('/settings', [App\Http\Controllers\Administrator\SettingController::class, 'show'])->name('admin-settings');
        Route::post('/save-settings', [App\Http\Controllers\Administrator\SettingController::class, 'save'])->name('admin-save-settings');

        //Testimonials
        Route::get('/testimonials', [App\Http\Controllers\Administrator\TestimonialController::class, 'index'])->name('admin-testimonials');
        Route::get('/add-testimonial', [App\Http\Controllers\Administrator\TestimonialController::class, 'add'])->name('admin-add-testimonial');
        Route::get('/view-testimonial/{id}', [App\Http\Controllers\Administrator\TestimonialController::class, 'show'])->name('admin-view-testimonial');
        Route::post('/save-testimonial', [App\Http\Controllers\Administrator\TestimonialController::class, 'save'])->name('admin-save-testimonial');

        //Faqs
        Route::get('/faqs', [App\Http\Controllers\Administrator\FaqController::class, 'index'])->name('admin-faqs');
        Route::get('/add-faq', [App\Http\Controllers\Administrator\FaqController::class, 'add'])->name('admin-add-faq');
        Route::get('/view-faq/{id}', [App\Http\Controllers\Administrator\FaqController::class, 'show'])->name('admin-view-faq');
        Route::post('/save-faq', [App\Http\Controllers\Administrator\FaqController::class, 'save'])->name('admin-save-faq');

        //Review
        Route::get('/reviews', [App\Http\Controllers\Administrator\ReviewController::class, 'index'])->name('admin-reviews');
        Route::get('/view-review/{id}', [App\Http\Controllers\Administrator\ReviewController::class, 'show'])->name('admin-view-review');
        Route::post('/save-review', [App\Http\Controllers\Administrator\ReviewController::class, 'save'])->name('admin-save-review');

        //University
        Route::get('/universities', [App\Http\Controllers\Administrator\UniversityController::class, 'index'])->name('admin-universities');
        Route::get('/add-university', [App\Http\Controllers\Administrator\UniversityController::class, 'add'])->name('admin-add-university');
        Route::get('/view-university/{id}', [App\Http\Controllers\Administrator\UniversityController::class, 'show'])->name('admin-view-university');
        Route::post('/save-university', [App\Http\Controllers\Administrator\UniversityController::class, 'save'])->name('admin-save-university');
    });
    // Will be inside middleware
});

//Administrator
//Route::get('/administrator', [App\Http\Controllers\Administrator\IndexController::class, 'index'])->name('index');
// Route::get('/administrator/login', [App\Http\Controllers\Administrator\IndexController::class, 'login'])->name('login');
//Route::get('/administrator/logout', [App\Http\Controllers\Administrator\IndexController::class, 'logout'])->name('administrator-logout');
// Route::get('/administrator/dashboard', [App\Http\Controllers\Administrator\IndexController::class, 'logout'])->name('dashboard');

//Route::get('{slug}', [App\Http\Controllers\PageController::class, 'getPage'])->where('slug', '([A-Za-z0-9\-\/]+)');

// Individual Pages
Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('index');
Route::get('/about-us', [App\Http\Controllers\PageController::class, 'aboutUs'])->name('about-us');
Route::get('/contact-us', [App\Http\Controllers\PageController::class, 'contactUs'])->name('contact-us');
Route::get('/accounts-gst-sap-tally-career-opportunities', [App\Http\Controllers\PageController::class, 'placementPage'])->name('placement');
Route::get('/franchise-opportunity', [App\Http\Controllers\PageController::class, 'franchiseOpportunity'])->name('franchise-opportunity');
Route::get('/career', [App\Http\Controllers\PageController::class, 'careerpage'])->name('career');

// Courses
Route::get('/courses', [App\Http\Controllers\CourseController::class, 'index'])->name('courses');
Route::get('/course-category/{slug}', [App\Http\Controllers\CourseController::class, 'courseListByCategory'])->name('course-category');
Route::get('/courses/{slug}', [App\Http\Controllers\CourseController::class, 'viewCourse'])->name('view-courses');

// Centers
Route::get('/centers', [App\Http\Controllers\CenterController::class, 'index'])->name('centers');
Route::get('/centers/{slug}', [App\Http\Controllers\CenterController::class, 'viewCenters'])->name('view-centers');



Route::get('/blogs', [App\Http\Controllers\BlogController::class, 'index'])->name('blogs');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
