<?php

use Illuminate\Support\Facades\Route;
use Spatie\Honeypot\ProtectAgainstSpam;
use Spatie\Sitemap\SitemapGenerator;
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
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE, PATCH');
header('Access-Control-Allow-Headers: Content-Type, X-Auth-Token, Origin, Authorization');

Route::get('/index/clear-cache', function() {
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

Route::any('/index/pip-mail', [App\Http\Controllers\IndexController::class, 'pipMail'])->name('pip-mail');

Route::get('/index/update-review', function() {
    $output = [];
    $exitCode = Artisan::call('update:review', $output);
    dd($output);
    // return what you want
});
Route::get('/linkstorage', function () {
   echo Artisan::call('storage:link');
});



Route::group(['prefix' => 'administrator', 'namespace' => 'Admin'], function () {   
    Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'create'])->name('admin-register');
    Route::get('/login', [App\Http\Controllers\Administrator\AdminAuthController::class, 'login'])->name('admin-login');
    Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'authenticate'])->name('verify-login');
    Route::get('/forgot-password', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'showForgotPasswordForm'])->name('admin-password.request');
    Route::post('/forgot-password', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
    Route::get('/reset-password/{token}', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'showResetPasswordForm'])->name('password.reset');
    Route::post('/reset-password', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'resetPassword'])->name('password.update');

    Route::group(['middleware' => 'auth'], function () {
        Route::get('/', [App\Http\Controllers\Administrator\IndexController::class, 'index'])->name('administrator');
        Route::get('/dashboard', [App\Http\Controllers\Administrator\IndexController::class, 'index'])->name('dashboard');
        Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('administrator-logout');
        Route::get('/update-password/{id}', [App\Http\Controllers\Administrator\IndexController::class, 'updatePassword'])->name('administrator-update-password');
        
        //Users
        Route::get('/center-login', [App\Http\Controllers\Administrator\UserController::class, 'centerLogin'])->name('admin-center-login');
        Route::get('/university-login', [App\Http\Controllers\Administrator\UserController::class, 'universityLogin'])->name('admin-university-login');
       
        Route::get('/affiliate-users', [App\Http\Controllers\Administrator\AffiliateController::class, 'users'])->name('admin-affiliate-users');
        Route::get('/add-affiliate-user', [App\Http\Controllers\Administrator\AffiliateController::class, 'addUser'])->name('admin-add-affiliate-user');
        Route::get('/view-affiliate-user/{id}', [App\Http\Controllers\Administrator\AffiliateController::class, 'showUser'])->name('admin-view-affiliate-user');
        Route::post('/save-affiliate-user', [App\Http\Controllers\Administrator\AffiliateController::class, 'saveUser'])->name('admin-save-affiliate-user');
        
        Route::get('/change-affiliate-user-status/{id}', [App\Http\Controllers\Administrator\AffiliateController::class, 'ChangeUserStatus'])->name('admin-change-affiliate-user-status'); 
        Route::get('/delete-affiliate-user/{id}', [App\Http\Controllers\Administrator\AffiliateController::class, 'deleteUser'])->name('admin-delete-affiliate-user');
        
        Route::get('/enquires', [App\Http\Controllers\Administrator\EnquiryController::class, 'index'])->name('admin-enquires');
        Route::get('/enquiry/{id}', [App\Http\Controllers\Administrator\EnquiryController::class, 'show'])->name('admin-enquiry');
        Route::get('/generate-enquiry-form', [App\Http\Controllers\Administrator\EnquiryController::class, 'createForm'])->name('admin-generate-enquiry-form');

        //Leads
        Route::get('/classroom-leads', [App\Http\Controllers\Administrator\LeadController::class, 'classroomLeads'])->name('admin-classroom-leads');
        Route::get('/local-stored-leads', [App\Http\Controllers\Administrator\LeadController::class, 'localStoredLeads'])->name('admin-local-stored-leads');
        Route::get('/franchise-leads', [App\Http\Controllers\Administrator\LeadController::class, 'franchiseLeads'])->name('admin-franchise-leads');
        
        // Export Leads 
        
        Route::get('/export-leads/{type}', [App\Http\Controllers\Administrator\LeadController::class, 'exportLeads'])->name('admin-export-leads');

        //Lead Refer
        Route::get('/lead-refer', [App\Http\Controllers\Administrator\LeadReferController::class, 'index'])->name('admin-lead-refer');
        Route::get('/transfar-lead', [App\Http\Controllers\Administrator\LeadReferController::class, 'add'])->name('admin-transfar-lead');
        Route::post('/send-lead', [App\Http\Controllers\Administrator\LeadReferController::class, 'send'])->name('admin-send-lead');
        Route::get('/upload-leads', [App\Http\Controllers\Administrator\LeadReferController::class, 'uploadLead'])->name('admin-upload-leads');
        Route::get('/backlog-leads', [App\Http\Controllers\Administrator\LeadReferController::class, 'backLogLeads'])->name('admin-backlog-leads');
        Route::get('/update-lead-status/{id}', [App\Http\Controllers\Administrator\LeadReferController::class, 'updateLeadStatus'])->name('admin-update-lead-status');
        Route::get('/export-lead-csv', [App\Http\Controllers\Administrator\LeadReferController::class, 'exportLeadCsv'])->name('admin-export-lead-csv');
        //Page
        Route::get('/pages', [App\Http\Controllers\Administrator\PageController::class, 'index'])->name('admin-pages');
        Route::get('/add-page', [App\Http\Controllers\Administrator\PageController::class, 'Add'])->name('admin-add-page');
        Route::get('/view-page/{id}', [App\Http\Controllers\Administrator\PageController::class, 'show'])->name('admin-view-page');
        Route::post('/save-page', [App\Http\Controllers\Administrator\PageController::class, 'save'])->name('admin-save-page');
        Route::get('/delete-page/{id}', [App\Http\Controllers\Administrator\PageController::class, 'delete'])->name('admin-delete-page');

        //Ad Page
        Route::get('/ad-pages', [App\Http\Controllers\Administrator\AdPageController::class, 'index'])->name('admin-ad-pages');
        Route::get('/add-ad-page', [App\Http\Controllers\Administrator\AdPageController::class, 'Add'])->name('admin-add-ad-page');
        Route::get('/view-ad-page/{id}', [App\Http\Controllers\Administrator\AdPageController::class, 'show'])->name('admin-ad-view-page');
        Route::post('/save-ad-page', [App\Http\Controllers\Administrator\AdPageController::class, 'save'])->name('admin-sad-ave-page');
        Route::get('/delete-ad-page/{id}', [App\Http\Controllers\Administrator\AdPageController::class, 'delete'])->name('admin-ad-delete-page');

        //Ad Page
        Route::get('/lam-page', [App\Http\Controllers\Administrator\LamController::class, 'index'])->name('admin-lam-pages');
        Route::get('/add-lam-page', [App\Http\Controllers\Administrator\LamController::class, 'Add'])->name('admin-add-lam-page');
        Route::get('/view-lam-page/{id}', [App\Http\Controllers\Administrator\LamController::class, 'show'])->name('admin-lam-view-page');
        Route::post('/save-lam-page', [App\Http\Controllers\Administrator\LamController::class, 'save'])->name('admin-save-lam-page');
        Route::get('/delete-lam-page/{id}', [App\Http\Controllers\Administrator\LamController::class, 'delete'])->name('admin-delete-lam-page');

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
        Route::get('/generate-pink-form/{id}', [App\Http\Controllers\Administrator\CenterController::class, 'generatePinkForm'])->name('admin-generate-pink-form');
        //Buckets
        Route::get('/buckets', [App\Http\Controllers\Administrator\CenterBucketController::class, 'index'])->name('admin-buckets');
        Route::get('/add-bucket', [App\Http\Controllers\Administrator\CenterBucketController::class, 'add'])->name('admin-add-bucket');
        Route::get('/view-bucket/{id}', [App\Http\Controllers\Administrator\CenterBucketController::class, 'show'])->name('admin-view-bucket');
        Route::post('/save-bucket', [App\Http\Controllers\Administrator\CenterBucketController::class, 'save'])->name('admin-save-bucket');
        Route::get('/delete-bucket/{id}', [App\Http\Controllers\Administrator\CenterBucketController::class, 'delete'])->name('admin-delete-bucket');

        //Center Courses
        Route::get('/center-courses/{id}', [App\Http\Controllers\Administrator\CenterCourseController::class, 'index'])->name('center-courses');
        Route::get('/add-center-course/{id}', [App\Http\Controllers\Administrator\CenterCourseController::class, 'add'])->name('admin-add-center-course');
        Route::get('/view-center-course/{id}', [App\Http\Controllers\Administrator\CenterCourseController::class, 'show'])->name('admin-view-center-course');
        Route::post('/save-center-course', [App\Http\Controllers\Administrator\CenterCourseController::class, 'save'])->name('admin-save-center-course');
        Route::get('/delete-center-course/{id}', [App\Http\Controllers\Administrator\CenterCourseController::class, 'delete'])->name('admin-delete-center-course');
        
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
        Route::get('/delete-placement/{id}', [App\Http\Controllers\Administrator\PlacementController::class, 'delete'])->name('admin-save-placement');
        Route::get('/import-placement', [App\Http\Controllers\Administrator\PlacementController::class, 'import'])->name('admin-import-placement');
        Route::post('/upload-placement', [App\Http\Controllers\Administrator\PlacementController::class, 'upload'])->name('admin-upload-placement');

        //Faqs
        Route::get('/faqs', [App\Http\Controllers\Administrator\FaqController::class, 'index'])->name('admin-faqs');
        Route::get('/add-faq', [App\Http\Controllers\Administrator\FaqController::class, 'add'])->name('admin-add-faq');
        Route::get('/view-faq/{id}', [App\Http\Controllers\Administrator\FaqController::class, 'show'])->name('admin-view-faq');
        Route::post('/save-faq', [App\Http\Controllers\Administrator\FaqController::class, 'save'])->name('admin-save-faq');
        Route::get('/delete-faq/{id}', [App\Http\Controllers\Administrator\FaqController::class, 'delete'])->name('admin-save-delete');
        
        //FaqCategory
        Route::get('/faq-categories', [App\Http\Controllers\Administrator\FaqCategoryController::class, 'index'])->name('admin-faq-categories');
        Route::get('/add-faq-category', [App\Http\Controllers\Administrator\FaqCategoryController::class, 'add'])->name('admin-add-faq-category');
        Route::get('/view-faq-category/{id}', [App\Http\Controllers\Administrator\FaqCategoryController::class, 'show'])->name('admin-view-faq-category');
        Route::post('/save-faq-category', [App\Http\Controllers\Administrator\FaqCategoryController::class, 'save'])->name('admin-save-faq-category');
        Route::get('/delete-faq-category/{id}', [App\Http\Controllers\Administrator\FaqCategoryController::class, 'delete'])->name('admin-delete-faq-category');

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
        Route::get('/delete-university', [App\Http\Controllers\Administrator\UniversityController::class, 'delete'])->name('admin-delete-university');

        // University Course
        Route::get('/university-courses', [App\Http\Controllers\Administrator\UniversityCourseController::class, 'index'])->name('admin-universitie-courses');
        Route::get('/add-university-course', [App\Http\Controllers\Administrator\UniversityCourseController::class, 'add'])->name('admin-add-university-course');
        Route::get('/view-university-course/{id}', [App\Http\Controllers\Administrator\UniversityCourseController::class, 'show'])->name('admin-view-course-university');
        Route::post('/save-university-course', [App\Http\Controllers\Administrator\UniversityCourseController::class, 'save'])->name('admin-save-course-university');
        Route::get('/delete-university-course/{id}', [App\Http\Controllers\Administrator\UniversityCourseController::class, 'delete'])->name('admin-delete-university-course');
        Route::get('/university-curriculum/{id}', [App\Http\Controllers\Administrator\UniversityCourseController::class, 'curriculum'])->name('admin-university-course-curriculum');
        Route::post('/save-university-curriculum', [App\Http\Controllers\Administrator\UniversityCourseController::class, 'saveCurriculum'])->name('admin-save-university-course-curriculum');
       
        //Page
        Route::get('/university-ad-pages', [App\Http\Controllers\Administrator\UniversityAdPageController::class, 'index'])->name('admin-ad-pages');
        Route::get('/add-university-ad-page', [App\Http\Controllers\Administrator\UniversityAdPageController::class, 'Add'])->name('admin-add-ad-page');
        Route::get('/view-university-ad-page/{id}', [App\Http\Controllers\Administrator\UniversityAdPageController::class, 'show'])->name('admin-ad-view-page');
        Route::post('/save-university-ad-page', [App\Http\Controllers\Administrator\UniversityAdPageController::class, 'save'])->name('admin-sad-ave-page');
        Route::get('/delete-university-ad-page/{id}', [App\Http\Controllers\Administrator\UniversityAdPageController::class, 'delete'])->name('admin-ad-delete-page');
        
        //Brochure
        Route::get('/brochures', [App\Http\Controllers\Administrator\BrochureController::class, 'index'])->name('admin-brochures');
        Route::get('/add-brochure', [App\Http\Controllers\Administrator\BrochureController::class, 'add'])->name('add-brochure');
        Route::get('/view-brochure/{id}', [App\Http\Controllers\Administrator\BrochureController::class, 'show'])->name('admin-view-brochure');
        Route::post('/save-brochure', [App\Http\Controllers\Administrator\BrochureController::class, 'save'])->name('admin-save-brochure');
        Route::get('/delete-brochure/{id}', [App\Http\Controllers\Administrator\BrochureController::class, 'delete'])->name('admin-delete-center');
        
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

        //Events
        Route::get('/events', [App\Http\Controllers\Administrator\EventController::class, 'index'])->name('admin-events');
        Route::get('/add-event', [App\Http\Controllers\Administrator\EventController::class, 'Add'])->name('admin-add-event');
        Route::get('/view-event/{id}', [App\Http\Controllers\Administrator\EventController::class, 'show'])->name('admin-view-event');
        Route::post('/save-event', [App\Http\Controllers\Administrator\EventController::class, 'save'])->name('admin-save-event');
        Route::get('/delete-event/{id}', [App\Http\Controllers\Administrator\EventController::class, 'delete'])->name('admin-delete-event');

        //Event Type
        Route::get('/event-types', [App\Http\Controllers\Administrator\EventTypeController::class, 'index'])->name('admin-event-types');
        Route::get('/add-event-type', [App\Http\Controllers\Administrator\EventTypeController::class, 'Add'])->name('admin-add-event-type');
        Route::get('/view-event-type/{id}', [App\Http\Controllers\Administrator\EventTypeController::class, 'show'])->name('admin-view-event-type');
        Route::post('/save-event-type', [App\Http\Controllers\Administrator\EventTypeController::class, 'save'])->name('admin-save-event-type');
        Route::get('/delete-event-type/{id}', [App\Http\Controllers\Administrator\EventTypeController::class, 'delete'])->name('admin-delete-event-type');

        //News
        Route::get('/news', [App\Http\Controllers\Administrator\NewsController::class, 'index'])->name('admin-news');
        Route::get('/add-news', [App\Http\Controllers\Administrator\NewsController::class, 'add'])->name('admin-add-new');
        Route::get('/view-news/{id}', [App\Http\Controllers\Administrator\NewsController::class, 'show'])->name('admin-view-new');
        Route::post('/save-news', [App\Http\Controllers\Administrator\NewsController::class, 'save'])->name('admin-save-new');

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
        // Route::get('/tags', [App\Http\Controllers\Administrator\TagController::class, 'index'])->name('admin-tags');
        // Route::post('/get-tags', [App\Http\Controllers\Administrator\TagController::class, 'getTags'])->name('admin-get-tags');
        // Route::get('/add-tag', [App\Http\Controllers\Administrator\TagController::class, 'add'])->name('admin-add-tag');
        // Route::get('/view-tag/{id}', [App\Http\Controllers\Administrator\TagController::class, 'show'])->name('admin-view-tag');
        // Route::post('/save-tag', [App\Http\Controllers\Administrator\TagController::class, 'save'])->name('admin-save-tag');
        // Route::get('/delete-tag/{id}', [App\Http\Controllers\Administrator\TagController::class, 'delete'])->name('admin-delete-tag');
        
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
        Route::get('/qrcode', [App\Http\Controllers\Administrator\SettingController::class, 'qrcode'])->name('qrcode');
        Route::get('/generate-qrcode', [App\Http\Controllers\Administrator\SettingController::class, 'generateQrcode'])->name('generate-qrcode');
   
        //Assessments
        Route::get('/assessments', [App\Http\Controllers\Administrator\AssessmentController::class, 'index'])->name('admin-assessments');
        Route::get('/add-assessment', [App\Http\Controllers\Administrator\AssessmentController::class, 'add'])->name('admin-add-assessment');
        Route::get('/question/{id}', [App\Http\Controllers\Administrator\AssessmentController::class, 'question'])->name('admin-question');
        Route::get('/view-assessment/{id}', [App\Http\Controllers\Administrator\AssessmentController::class, 'show'])->name('admin-view-assessment');
        Route::post('/save-assessment', [App\Http\Controllers\Administrator\AssessmentController::class, 'save'])->name('admin-save-assessment');
        Route::get('/delete-assessment/{id}', [App\Http\Controllers\Administrator\AssessmentController::class, 'show'])->name('admin-delete-assessment');

        //Questions
        Route::get('/questions', [App\Http\Controllers\Administrator\QuestionController::class, 'index'])->name('admin-questions');
        Route::get('/add-question', [App\Http\Controllers\Administrator\QuestionController::class, 'add'])->name('admin-add-question');
        Route::get('/view-question/{id}', [App\Http\Controllers\Administrator\QuestionController::class, 'show'])->name('admin-view-question');
        Route::post('/save-question', [App\Http\Controllers\Administrator\QuestionController::class, 'save'])->name('admin-save-question');
        Route::get('/delete-question/{id}', [App\Http\Controllers\Administrator\QuestionController::class, 'delete'])->name('admin-delete-question');
   

    });
    // Will be inside middleware
});

//Page
Route::get('/home', function () {
    return redirect()->route('administrator');  
});

Route::get('/{slug}', [App\Http\Controllers\PageController::class, 'index'])->where('slug', '([A-Za-z0-9\-]+)');
Route::get('/ads/{slug}', [App\Http\Controllers\AdPageController::class, 'index'])->where('slug', '([A-Za-z0-9\-]+)');
Route::get('/lam/{slug}', [App\Http\Controllers\LamController::class, 'index'])->where('slug', '([A-Za-z0-9\-]+)')->name('lam-page');

//Affiliate Dashboard
Route::get('/affiliate-dashboard/{code}', [App\Http\Controllers\AffiliateController::class, 'dashboard'])->name('affiliate-dashboard');

// Index Pages
Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('index');

// Courses
Route::get('/category/{slug}', [App\Http\Controllers\CourseController::class, 'courseListByCategory'])->name('course-category');
Route::get('/courses/{slug}', [App\Http\Controllers\CourseController::class, 'viewCourse'])->name('view-courses');
Route::get('/search/{slug}', [App\Http\Controllers\CourseController::class, 'search'])->name('search-courses');

// Centers
Route::get('/centers/{slug}', [App\Http\Controllers\CenterController::class, 'viewCenters'])->name('view-centers');
Route::get('/state/{slug}', [App\Http\Controllers\CenterController::class, 'state'])->name('states');
Route::get('/city/{slug}', [App\Http\Controllers\CenterController::class, 'city'])->name('city');

//Center Course
Route::get('/centers/{center}/{course}', [App\Http\Controllers\CenterCourseController::class, 'viewCenterCourse'])->name('view-center-course');

Route::post('/submit-review', [App\Http\Controllers\ReviewController::class, 'create'])->name('submit-review');
//Route::get('/tags/{slug}', [App\Http\Controllers\TagController::class, 'index'])->name('tags');

//Capture Leads
Route::post('/save-contact', [App\Http\Controllers\PageController::class, 'saveContact'])->name('save-contact');
Route::post('/submit-mobile-otp', [App\Http\Controllers\IndexController::class, 'submitMobileOtp'])->name('submit-mobile-otp');
Route::post('/capture-lead', [App\Http\Controllers\IndexController::class, 'captureLead'])->name('insert-lead-records');
Route::post('/insert-lead-records', [App\Http\Controllers\IndexController::class, 'insertLeadRecord'])->name('capture-lead');
Route::post('/franchise-capture-lead', [App\Http\Controllers\IndexController::class, 'franchiseCaptureLead'])->name('capture-lead');
Route::post('/capture-job-application', [App\Http\Controllers\IndexController::class, 'captureJobApplication'])->name('capture-job-application');
Route::post('/weabiner-capture-lead', [App\Http\Controllers\IndexController::class, 'weabinerCaptureLead'])->name('weabiner-capture-lead');

Route::post('/get-centers', [App\Http\Controllers\IndexController::class, 'getCenter'])->name('get-centers');
Route::post('/get-city-by-state-id', [App\Http\Controllers\Administrator\CenterController::class, 'getCitiesByStateId'])->name('get-city-by-state-id');
Route::post('/center/get-center-by-pincode', [App\Http\Controllers\IndexController::class, 'getCenterByPincode'])->name('get-center-by-pincode');

Route::get('/events/{slug}', [App\Http\Controllers\EventController::class, 'index'])->name('view-event');
Route::any('/index/test-code', [App\Http\Controllers\IndexController::class, 'testCode'])->name('test-code');
Route::any('/global-other-form-submit', [App\Http\Controllers\IndexController::class, 'globalFormSubmit'])->name('global-other-form-submit');
Route::any('/enquiry-form-submit', [App\Http\Controllers\StudentController::class, 'enquiryFormSubmit'])->name('enquiry-form-submit');

Route::post('/index/payment-success', [App\Http\Controllers\IndexController::class, 'paymentSuccess'])->name('payment-success');
Route::post('/index/payment-failed', [App\Http\Controllers\IndexController::class, 'paymentFailed'])->name('payment-failed');
Route::get('/update-lead-status/{id}', [App\Http\Controllers\IndexController::class, 'updateLeadStatus'])->name('update-lead-status');

//Assesments
Route::get('/assesments/start-test', [App\Http\Controllers\AssessmentController::class, 'startTest'])->name('start-test');
Route::get('/assesments/{assessment_id}', [App\Http\Controllers\AssessmentController::class, 'state'])->name('states');
Route::get('/instruction/{assessment_id}', [App\Http\Controllers\AssessmentController::class, 'instruction'])->name('instruction');

Route::get('/assesment/results', [App\Http\Controllers\AssessmentController::class, 'result'])->name('results');
Route::get('/assesment/view-result/{id}', [App\Http\Controllers\AssessmentController::class, 'viewResult'])->name('view-result');
Route::get('/assessments/thank-you', [App\Http\Controllers\AssessmentController::class, 'thankyou'])->name('assessments-thank-you');
Route::get('/assesment/start', [App\Http\Controllers\AssessmentController::class, 'startAssessment'])->name('start-assessment');
Route::post('/submit-assessment', [App\Http\Controllers\AssessmentController::class, 'submitAssessment'])->name('submit-assessment');
Route::get('/assessment-success', function () {
    return view('user.assessment-success');
})->name('assessment-success');

Route::get('/index/create-center-login', [App\Http\Controllers\IndexController::class, 'createCenterLogin'])->name('create-center-login');

// Pink Form
Route::get('/student/enquiry-form/{step}', [App\Http\Controllers\StudentController::class, 'index'])->name('student-enquiry-form-with-slug');
Route::get('/student/enquiry-form', [App\Http\Controllers\StudentController::class, 'index'])->name('student-enquiry-form');

Route::post('/job-fair-capture-lead', [App\Http\Controllers\JobFairController::class, 'captureLead'])->name('job-fair-capture-lead');
Route::post('/job-fair-bhim-rao-ambedkar-college', [App\Http\Controllers\JobFairController::class, 'jobFairAmbedkarCollege'])->name('job-fair-bhim-rao-ambedkar-college');
Route::post('/job-fair-sgtbimit-college', [App\Http\Controllers\JobFairController::class, 'jobFairSgtbimitCollege'])->name('job-fair-sgtbimit-college');
Route::post('/job-fair-motijheel-rabindra-mahavidyalaya-college', [App\Http\Controllers\JobFairController::class, 'jobFairMotijheelRabindraMahavidyalayaCollege'])->name('job-fair-motijheel-rabindra-mahavidyalaya-college');


//Lam FORM Submit 
Route::post('/lam-page-form-submit', [App\Http\Controllers\LamController::class, 'captureLead'])->name('lam-page-form-submit');


Route::middleware(ProtectAgainstSpam::class)->group(function() {
    Auth::routes();
});