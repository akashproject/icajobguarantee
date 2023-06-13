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
Route::get('/clear-cache', function() {
    echo $exitCode = Artisan::call('cache:clear');
    // return what you want
});
Route::get('/queue-work', function() {
    echo $exitCode = Artisan::call('queue:work');
    // return what you want
});
Route::get('/schedule-run', function() {
    echo $exitCode = Artisan::call('schedule:run');
    // return what you want
});

Route::get('/linkstorage', function () {
   echo Artisan::call('storage:link');
});

Route::group(['prefix' => 'administrator', 'namespace' => 'Admin'], function () {
    //Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'create'])->name('admin-register');
    Route::get('/login', [App\Http\Controllers\Administrator\AdminAuthController::class, 'login'])->name('admin-login');
    Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'authenticate'])->name('verify-login');
    
    Route::group(['middleware' => 'auth'], function () {
        Route::get('/', [App\Http\Controllers\Administrator\IndexController::class, 'index'])->name('administrator');
        Route::get('/dashboard', [App\Http\Controllers\Administrator\IndexController::class, 'index'])->name('dashboard');
        Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('administrator-logout');
        
        //Page
        Route::get('/pages', [App\Http\Controllers\Administrator\PageController::class, 'index'])->name('admin-pages');
        Route::get('/add-page', [App\Http\Controllers\Administrator\PageController::class, 'Add'])->name('admin-add-page');
        Route::get('/view-page/{id}', [App\Http\Controllers\Administrator\PageController::class, 'show'])->name('admin-view-page');
        Route::post('/save-page', [App\Http\Controllers\Administrator\PageController::class, 'save'])->name('admin-save-page');
        Route::get('/delete-page/{id}', [App\Http\Controllers\Administrator\PageController::class, 'delete'])->name('admin-delete-page');

        //Page
        Route::get('/ad-pages', [App\Http\Controllers\Administrator\AdPageController::class, 'index'])->name('admin-ad-pages');
        Route::get('/add-ad-page', [App\Http\Controllers\Administrator\AdPageController::class, 'Add'])->name('admin-add-ad-page');
        Route::get('/view-ad-page/{id}', [App\Http\Controllers\Administrator\AdPageController::class, 'show'])->name('admin-ad-view-page');
        Route::post('/save-ad-page', [App\Http\Controllers\Administrator\AdPageController::class, 'save'])->name('admin-sad-ave-page');
        Route::get('/delete-ad-page/{id}', [App\Http\Controllers\Administrator\AdPageController::class, 'delete'])->name('admin-ad-delete-page');

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

        Route::get('/gallery/{center_id}', [App\Http\Controllers\Administrator\CenterController::class, 'gallery'])->name('admin-gallery');
        Route::post('/save-gallery', [App\Http\Controllers\Administrator\CenterController::class, 'saveGallery'])->name('admin-save-gallery');

        Route::get('/pincode/{center_id}', [App\Http\Controllers\Administrator\CenterController::class, 'pincode'])->name('admin-gallery');
        Route::post('/upload-pincode', [App\Http\Controllers\Administrator\CenterController::class, 'savePincode'])->name('admin-upload-pincode');

        // Media 
        Route::get('/media', [App\Http\Controllers\Administrator\MediaController::class, 'index'])->name('admin-media');
        Route::get('/view-file/{id}', [App\Http\Controllers\Administrator\MediaController::class, 'view'])->name('admin-view-file');
        Route::post('/upload', [App\Http\Controllers\Administrator\MediaController::class, 'save'])->name('admin-save-media');
        Route::post('/save-file', [App\Http\Controllers\Administrator\MediaController::class, 'updateFile'])->name('admin-save-file');
        Route::get('/delete-file/{id}', [App\Http\Controllers\Administrator\MediaController::class, 'delete'])->name('admin-delete-job');
        Route::post('/search-media', [App\Http\Controllers\Administrator\MediaController::class, 'search'])->name('admin-search-media');

        //Testimonials
        Route::get('/testimonials', [App\Http\Controllers\Administrator\TestimonialController::class, 'index'])->name('admin-testimonials');
        Route::get('/add-testimonial', [App\Http\Controllers\Administrator\TestimonialController::class, 'add'])->name('admin-add-testimonial');
        Route::get('/view-testimonial/{id}', [App\Http\Controllers\Administrator\TestimonialController::class, 'show'])->name('admin-view-testimonial');
        Route::post('/save-testimonial', [App\Http\Controllers\Administrator\TestimonialController::class, 'save'])->name('admin-save-testimonial');

        //Placements
        Route::get('/placements', [App\Http\Controllers\Administrator\PlacementController::class, 'index'])->name('admin-placements');
        Route::get('/add-placement', [App\Http\Controllers\Administrator\PlacementController::class, 'add'])->name('admin-add-placement');
        Route::get('/view-placement/{id}', [App\Http\Controllers\Administrator\PlacementController::class, 'show'])->name('admin-view-placement');
        Route::post('/save-placement', [App\Http\Controllers\Administrator\PlacementController::class, 'save'])->name('admin-save-placement');

        //Faqs
        Route::get('/faqs', [App\Http\Controllers\Administrator\FaqController::class, 'index'])->name('admin-faqs');
        Route::get('/add-faq', [App\Http\Controllers\Administrator\FaqController::class, 'add'])->name('admin-add-faq');
        Route::get('/view-faq/{id}', [App\Http\Controllers\Administrator\FaqController::class, 'show'])->name('admin-view-faq');
        Route::post('/save-faq', [App\Http\Controllers\Administrator\FaqController::class, 'save'])->name('admin-save-faq');

        //Recruiters
        Route::get('/recruiters', [App\Http\Controllers\Administrator\RecruiterController::class, 'index'])->name('admin-recruiters');
        Route::get('/add-recruiter', [App\Http\Controllers\Administrator\RecruiterController::class, 'add'])->name('admin-add-recruiter');
        Route::get('/view-recruiter/{id}', [App\Http\Controllers\Administrator\RecruiterController::class, 'show'])->name('admin-view-recruiter');
        Route::post('/save-recruiter', [App\Http\Controllers\Administrator\RecruiterController::class, 'save'])->name('admin-save-recruiter');
        
        //University
        Route::get('/universities', [App\Http\Controllers\Administrator\UniversityController::class, 'index'])->name('admin-universities');
        Route::get('/add-university', [App\Http\Controllers\Administrator\UniversityController::class, 'add'])->name('admin-add-university');
        Route::get('/view-university/{id}', [App\Http\Controllers\Administrator\UniversityController::class, 'show'])->name('admin-view-university');
        Route::post('/save-university', [App\Http\Controllers\Administrator\UniversityController::class, 'save'])->name('admin-save-university');

        //Brochure
        Route::get('/brochures', [App\Http\Controllers\Administrator\BrochureController::class, 'index'])->name('admin-brochures');
        Route::get('/add-brochure', [App\Http\Controllers\Administrator\BrochureController::class, 'add'])->name('add-brochure');
        Route::get('/view-brochure/{id}', [App\Http\Controllers\Administrator\BrochureController::class, 'show'])->name('admin-view-brochure');
        Route::post('/save-brochure', [App\Http\Controllers\Administrator\BrochureController::class, 'save'])->name('admin-save-brochure');

        //Jobs
        Route::get('/jobs', [App\Http\Controllers\Administrator\JobController::class, 'index'])->name('admin-jobs');
        Route::get('/add-job', [App\Http\Controllers\Administrator\JobController::class, 'add'])->name('admin-add-job');
        Route::get('/view-job/{id}', [App\Http\Controllers\Administrator\JobController::class, 'show'])->name('admin-view-job');
        Route::post('/save-job', [App\Http\Controllers\Administrator\JobController::class, 'save'])->name('admin-save-job');
        Route::get('/delete-job/{id}', [App\Http\Controllers\Administrator\JobController::class, 'delete'])->name('admin-delete-job');

        Route::get('/job-type', [App\Http\Controllers\Administrator\JobController::class, 'indexJobType'])->name('admin-job-type');
        Route::get('/view-job-type/{id}', [App\Http\Controllers\Administrator\JobController::class, 'showJobType'])->name('admin-view-job-type');
        Route::post('/save-job-type', [App\Http\Controllers\Administrator\JobController::class, 'saveJobType'])->name('admin-save-job-type');
 
        //Blogs
        Route::get('/blogs', [App\Http\Controllers\Administrator\BlogController::class, 'index'])->name('admin-blogs');
        Route::get('/add-blog', [App\Http\Controllers\Administrator\BlogController::class, 'Add'])->name('admin-add-blog');
        Route::get('/view-blog/{id}', [App\Http\Controllers\Administrator\BlogController::class, 'show'])->name('admin-view-blog');
        Route::post('/save-blog', [App\Http\Controllers\Administrator\BlogController::class, 'save'])->name('admin-save-blog');
        Route::get('/delete-blog/{id}', [App\Http\Controllers\Administrator\BlogController::class, 'delete'])->name('admin-delete-blog');

         //Categories
        Route::get('/categories', [App\Http\Controllers\Administrator\CategoryController::class, 'index'])->name('admin-categories');
        Route::get('/add-category', [App\Http\Controllers\Administrator\CategoryController::class, 'add'])->name('admin-add-category');
        Route::get('/view-category/{id}', [App\Http\Controllers\Administrator\CategoryController::class, 'show'])->name('admin-view-category');
        Route::post('/save-category', [App\Http\Controllers\Administrator\CategoryController::class, 'save'])->name('admin-save-category');
        Route::get('/delete-category/{id}', [App\Http\Controllers\Administrator\CategoryController::class, 'delete'])->name('admin-delete-category');

        Route::get('/authors', [App\Http\Controllers\Administrator\AuthorController::class, 'index'])->name('admin-authors');
        Route::get('/add-author', [App\Http\Controllers\Administrator\AuthorController::class, 'Add'])->name('admin-add-author');
        Route::get('/view-author/{id}', [App\Http\Controllers\Administrator\AuthorController::class, 'show'])->name('admin-view-author');
        Route::post('/save-author', [App\Http\Controllers\Administrator\AuthorController::class, 'save'])->name('admin-save-author');
        Route::get('/delete-author/{id}', [App\Http\Controllers\Administrator\AuthorController::class, 'delete'])->name('admin-delete-author');

        //Tags
        Route::get('/tags', [App\Http\Controllers\Administrator\TagController::class, 'index'])->name('admin-tags');
        Route::post('/get-tags', [App\Http\Controllers\Administrator\TagController::class, 'getTags'])->name('admin-get-tags');
        Route::get('/add-tag', [App\Http\Controllers\Administrator\TagController::class, 'add'])->name('admin-add-tag');
        Route::get('/view-tag/{id}', [App\Http\Controllers\Administrator\TagController::class, 'show'])->name('admin-view-tag');
        Route::post('/save-tag', [App\Http\Controllers\Administrator\TagController::class, 'save'])->name('admin-save-tag');
        Route::get('/delete-tag/{id}', [App\Http\Controllers\Administrator\TagController::class, 'delete'])->name('admin-delete-tag');
        
        //Review
        Route::get('/reviews', [App\Http\Controllers\Administrator\ReviewController::class, 'index'])->name('admin-reviews');
        Route::get('/view-review/{id}', [App\Http\Controllers\Administrator\ReviewController::class, 'show'])->name('admin-view-review');
        Route::post('/save-review', [App\Http\Controllers\Administrator\ReviewController::class, 'save'])->name('admin-save-review');

        //Review
        Route::get('/contacts', [App\Http\Controllers\Administrator\ContactController::class, 'index'])->name('admin-contacts');
        Route::get('/view-contact/{id}', [App\Http\Controllers\Administrator\ContactController::class, 'show'])->name('admin-view-contact');

        //Settings
        Route::get('/settings', [App\Http\Controllers\Administrator\SettingController::class, 'show'])->name('admin-settings');
        Route::post('/save-settings', [App\Http\Controllers\Administrator\SettingController::class, 'save'])->name('admin-save-settings');
 

    });
    // Will be inside middleware
});

Route::get('/{slug}', [App\Http\Controllers\PageController::class, 'index'])->where('slug', '([A-Za-z0-9\-]+)');
Route::get('/ads/{slug}', [App\Http\Controllers\AdPageController::class, 'index'])->where('slug', '([A-Za-z0-9\-]+)');

// Individual Pages
Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('index');

// Courses
//Route::get('/courses', [App\Http\Controllers\CourseController::class, 'index'])->name('courses');
Route::get('/category/{slug}', [App\Http\Controllers\CourseController::class, 'courseListByCategory'])->name('course-category');
Route::get('/courses/{slug}', [App\Http\Controllers\CourseController::class, 'viewCourse'])->name('view-courses');
Route::get('/search/{slug}', [App\Http\Controllers\CourseController::class, 'search'])->name('search-courses');

// Centers
//Route::get('/centers', [App\Http\Controllers\CenterController::class, 'index'])->name('centers');
Route::get('/centers/{slug}', [App\Http\Controllers\CenterController::class, 'viewCenters'])->name('view-centers');
Route::get('/state/{slug}', [App\Http\Controllers\CenterController::class, 'state'])->name('states');
Route::get('/city/{slug}', [App\Http\Controllers\CenterController::class, 'city'])->name('city');

Route::post('/submit-review', [App\Http\Controllers\ReviewController::class, 'create'])->name('submit-review');
// Route::get('/article/{slug}', [App\Http\Controllers\BlogController::class, 'view'])->name('view-article');
// Route::get('/category/{slug}', [App\Http\Controllers\BlogController::class, 'getByCategory'])->name('view-category');

Route::get('/tags/{slug}', [App\Http\Controllers\TagController::class, 'index'])->name('tags');
//Capture Leads
Route::post('/save-contact', [App\Http\Controllers\PageController::class, 'saveContact'])->name('save-contact');
Route::post('/submit-mobile-otp', [App\Http\Controllers\IndexController::class, 'submitMobileOtp'])->name('submit-mobile-otp');
Route::post('/capture-lead', [App\Http\Controllers\IndexController::class, 'captureLead'])->name('capture-lead');
Route::post('/franchise-capture-lead', [App\Http\Controllers\IndexController::class, 'franchiseCaptureLead'])->name('capture-lead');
Route::post('/get-centers', [App\Http\Controllers\IndexController::class, 'getCenter'])->name('get-centers');
Route::post('/get-city-by-state-id', [App\Http\Controllers\Administrator\CenterController::class, 'getCitiesByStateId'])->name('get-city-by-state-id');
Route::post('/center/get-center-by-pincode', [App\Http\Controllers\IndexController::class, 'getCenterByPincode'])->name('get-center-by-pincode');

Route::any('/index/test-code', [App\Http\Controllers\IndexController::class, 'testCode'])->name('test-code');
Auth::routes();