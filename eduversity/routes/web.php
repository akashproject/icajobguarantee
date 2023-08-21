<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('index');

Route::get('/{slug}', [App\Http\Controllers\PageController::class, 'index'])->where('slug', '([A-Za-z0-9\-]+)'); 

Route::get('/universities/{slug}', [App\Http\Controllers\UniversityController::class, 'view'])->name('universities');
Route::get('/state/{slug}', [App\Http\Controllers\UniversityController::class, 'state'])->name('states');
Route::get('/city/{slug}', [App\Http\Controllers\UniversityController::class, 'city'])->name('city');

Route::get('/courses/{slug}', [App\Http\Controllers\CourseController::class, 'viewCourse'])->name('view-courses');
Route::post('/eduversity-capture-lead', [App\Http\Controllers\IndexController::class, 'captureLead'])->name('capture-lead');
Route::post('/submit-mobile-otp', [App\Http\Controllers\IndexController::class, 'submitMobileOtp'])->name('submit-mobile-otp');

Route::get('/ads/{slug}', [App\Http\Controllers\UniversityAdPageController::class, 'index'])->name('ads');
Route::post('/affliate-registration', [App\Http\Controllers\AffiliateController::class, 'registration'])->name('affliate-registration');