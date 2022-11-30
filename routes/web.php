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
//Administrator
Route::get('/administrator', [App\Http\Controllers\Administrator\IndexController::class, 'index'])->name('index');
Route::get('/administrator/login', [App\Http\Controllers\Administrator\IndexController::class, 'login'])->name('login');
Route::get('/administrator/logout', [App\Http\Controllers\Administrator\IndexController::class, 'logout'])->name('administrator-logout');
Route::get('/administrator/dashboard', [App\Http\Controllers\Administrator\IndexController::class, 'logout'])->name('administrator-home');

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

