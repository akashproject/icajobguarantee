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
    Route::get('/login', [App\Http\Controllers\Administrator\AdminAuthController::class, 'login'])->name('admin-login');
    Route::post('/login', [App\Http\Controllers\Administrator\AdminAuthController::class, 'verifyLogin'])->name('verify-login');
    
    Route::group(['middleware' => 'auth'], function () {
        Route::get('/', [App\Http\Controllers\Administrator\IndexController::class, 'index'])->name('administrator');
        Route::get('/dashboard', [App\Http\Controllers\Administrator\IndexController::class, 'index'])->name('dashboard');
        Route::get('/logout', [App\Http\Controllers\Administrator\AdminAuthController::class, 'logout'])->name('administrator-logout');
       
    });
    // Will be inside middleware
    //Courses
    Route::get('/courses', [App\Http\Controllers\Administrator\CourseController::class, 'index'])->name('admin-courses');
    Route::get('/add-course', [App\Http\Controllers\Administrator\CourseController::class, 'Add'])->name('admin-add-courses');
    Route::get('/view-course/{id}', [App\Http\Controllers\Administrator\CourseController::class, 'show'])->name('admin-view-courses');
    Route::post('/save-course', [App\Http\Controllers\Administrator\CourseController::class, 'save'])->name('admin-save-courses');
    Route::get('/delete-course/{id}', [App\Http\Controllers\Administrator\CourseController::class, 'delete'])->name('admin-delete-courses');

    //Course Type
    Route::get('/course-type', [App\Http\Controllers\Administrator\CourseTypeController::class, 'index'])->name('admin-course-type');
    Route::get('/add-course-type', [App\Http\Controllers\Administrator\CourseTypeController::class, 'add'])->name('admin-add-course-type');
    Route::get('/view-course-type/{id}', [App\Http\Controllers\Administrator\CourseTypeController::class, 'show'])->name('admin-view-course-type');
    Route::post('/save-course-type', [App\Http\Controllers\Administrator\CourseTypeController::class, 'save'])->name('admin-save-course-type');
    Route::get('/delete-course-type/{id}', [App\Http\Controllers\Administrator\CourseTypeController::class, 'delete'])->name('admin-delete-course-type');
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
Route::get('/courses/{slug}', [App\Http\Controllers\CourseController::class, 'viewCourse'])->name('view-courses');

// Centers
Route::get('/centers', [App\Http\Controllers\CenterController::class, 'index'])->name('centers');
Route::get('/centers/{slug}', [App\Http\Controllers\CenterController::class, 'viewCenters'])->name('view-centers');



Route::get('/blogs', [App\Http\Controllers\BlogController::class, 'index'])->name('blogs');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
