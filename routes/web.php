<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\backend\PropertyTypeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PhotoGalleryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingController;
use App\Models\PropertyType;
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

//Home route
Route::get('/',[HomeController::class,'index'])->name('home.index');
Route::get('/service_details/{id}',[HomeController::class,'service_details'])->name('home.service_details');
Route::get('/course_category_details/{id}',[HomeController::class,'course_category_details'])->name('home.course_category_details');
Route::get('/course_details/{id}',[HomeController::class,'course_details'])->name('home.course_details');
Route::get('/mission',[HomeController::class,'mission'])->name('home.mission');
Route::get('/placement_cell',[HomeController::class,'placement_cell'])->name('home.placement_cell');
Route::get('/job',[HomeController::class,'job'])->name('home.job');
Route::get('/interview',[HomeController::class,'interview'])->name('home.interview');
Route::get('/teachers',[HomeController::class,'teachers'])->name('home.teachers');
Route::get('/students',[HomeController::class,'students'])->name('home.students');
Route::get('/gallery',[HomeController::class,'gallery'])->name('home.gallery');
Route::get('/notice',[HomeController::class,'notice'])->name('home.notice');
Route::get('/event',[HomeController::class,'event'])->name('home.event');
Route::get('/all_course',[HomeController::class,'all_course'])->name('home.all_course');
Route::get('/contact',[HomeController::class,'contact'])->name('home.contact');
Route::get('/about_us',[HomeController::class,'about_us'])->name('home.about_us');


// admin login route
Route::get('/admin/login',[AdminController::class,'AdminLogin'])->name('admin.login');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// admin group middleware
Route::middleware(['auth','role:admin'])->group(function(){


    Route::get('/admin/dashboard',[AdminController::class,'AdminDashboard'])->name('admin.dashboard');
    Route::get('/admin/logout',[AdminController::class,'AdminLogout'])->name('admin.logout');
    Route::get('/admin/profile',[AdminController::class,'AdminProfile'])->name('admin.profile');
    Route::post('/admin/profile/store',[AdminController::class,'AdminProfileStore'])->name('admin.profile.store');
    Route::get('/admin/change/password',[AdminController::class,'AdminChangePassword'])->name('admin.change.password');
    Route::post('/admin/update/password',[AdminController::class,'AdminUpdatePassword'])->name('admin.update.password');

    //About
    Route::get('/admin/view_about', [AboutController::class, 'view_about'])->name('admin.view_about');
    Route::post('/admin/view_about', [AboutController::class, 'saveAbout'])->name('admin.saveAbout');

     //setting
     Route::get('/admin/setting', [SettingController::class, 'setting'])->name('admin.setting');
     Route::post('/admin/setting', [SettingController::class, 'saveSetting'])->name('admin.saveSetting');

    //category 
    Route::get('/admin/view_category', [CourseController::class, 'view_category'])->name('admin.view_category');
    Route::get('/admin/add_category', [CourseController::class, 'add_category'])->name('admin.add_category');
    Route::post('/admin/upload_category', [CourseController::class, 'upload_category'])->name('admin.upload_category');
    Route::get('/admin/update_category/{id}', [CourseController::class, 'update_category'])->name('admin.update_category');
    Route::post('/admin/edit_category/{id}', [CourseController::class, 'edit_category'])->name('admin.edit_category');
    Route::get('/admin/delete_category/{id}', [CourseController::class, 'delete_category'])->name('admin.delete_category');

    //course
    Route::get('/admin/view_course', [CourseController::class, 'view_course'])->name('admin.view_course');
    Route::get('/admin/add_course', [CourseController::class, 'add_course'])->name('admin.add_course');
    Route::post('/admin/upload_course', [CourseController::class, 'upload_course'])->name('admin.upload_course');
    Route::get('/admin/edit_course/{id}', [CourseController::class, 'edit_course'])->name('admin.edit_course');
    Route::post('/admin/update_course/{id}', [CourseController::class, 'update_course'])->name('admin.update_course');
    Route::get('/admin/delete_course/{id}', [CourseController::class, 'delete_course'])->name('admin.delete_course');

    //Service
    Route::get('/admin/view_service', [ServiceController::class, 'view_service'])->name('admin.view_service');
    Route::get('/admin/add_service', [ServiceController::class, 'add_service'])->name('admin.add_service');
    Route::post('/admin/upload_service', [ServiceController::class, 'upload_service'])->name('admin.upload_service');
    Route::get('/admin/edit_service/{id}', [ServiceController::class, 'edit_service'])->name('admin.edit_service');
    Route::post('/admin/update_service/{id}', [ServiceController::class, 'update_service'])->name('admin.update_service');
    Route::get('/admin/delete_service/{id}', [ServiceController::class, 'delete_service'])->name('admin.delete_service');

    //Management
    Route::get('/admin/view_member', [AboutController::class, 'view_member'])->name('admin.view_member');
    Route::get('/admin/add_member', [AboutController::class, 'add_member'])->name('admin.add_member');
    Route::post('/admin/upload_member', [AboutController::class, 'upload_member'])->name('admin.upload_member');
    Route::get('/admin/edit_member/{id}', [AboutController::class, 'edit_member'])->name('admin.edit_member');
    Route::post('/admin/update_member/{id}', [AboutController::class, 'update_member'])->name('admin.update_member');
    Route::get('/admin/delete_member/{id}', [AboutController::class, 'delete_member'])->name('admin.delete_member');

    //Event
    Route::get('/admin/view_event', [AboutController::class, 'view_event'])->name('admin.view_event');
    Route::get('/admin/add_event', [AboutController::class, 'add_event'])->name('admin.add_event');
    Route::post('/admin/upload_event', [AboutController::class, 'upload_event'])->name('admin.upload_event');
    Route::get('/admin/edit_event/{id}', [AboutController::class, 'edit_event'])->name('admin.edit_event');
    Route::post('/admin/update_event/{id}', [AboutController::class, 'update_event'])->name('admin.update_event');
    Route::get('/admin/delete_event/{id}', [AboutController::class, 'delete_event'])->name('admin.delete_event');

    //Notice
    Route::get('/admin/notice', [ServiceController::class, 'notice'])->name('admin.notice');
    Route::post('/admin/upload_notice', [ServiceController::class, 'upload_notice'])->name('admin.upload_notice');
    Route::get('/admin/download/{id}',[ServiceController::class, 'download'])->name('admin.download');
    Route::get('/admin/delete_notice/{id}', [ServiceController::class, 'delete_notice'])-> name('admin.delete_notice');

    //interview
    Route::get('/admin/interview', [ServiceController::class, 'interview'])->name('admin.interview');
    Route::post('/admin/upload_interview', [ServiceController::class, 'upload_interview'])->name('admin.upload_interview');
    Route::get('/admin/download_interview/{id}',[ServiceController::class, 'download_interview'])->name('admin.download_interview');
    Route::get('/admin/delete_interview/{id}', [ServiceController::class, 'delete_interview'])-> name('admin.delete_interview');

    //job_category
    Route::get('/admin/job_category', [ServiceController::class, 'job_category'])->name('admin.job_category');
    Route::post('/admin/upload_job_category', [ServiceController::class, 'upload_job_category'])->name('admin.upload_job_category');
    Route::get('/admin/delete_job_category/{id}', [ServiceController::class, 'delete_job_category'])-> name('admin.delete_job_category');

    //job_circular
    Route::get('/admin/job_circular', [ServiceController::class, 'job_circular'])->name('admin.job_circular');
    Route::post('/admin/upload_job_circular', [ServiceController::class, 'upload_job_circular'])->name('admin.upload_job_circular');
    Route::get('/admin/download_job_circular/{id}',[ServiceController::class, 'download_job_circular'])->name('admin.download_job_circular');
    Route::get('/admin/delete_job_circular/{id}', [ServiceController::class, 'delete_job_circular'])-> name('admin.delete_job_circular');

    //Gallery
    Route::get('/admin/gallery', [PhotoGalleryController::class, 'gallery'])->name('admin.gallery');
    Route::post('/admin/upload_gallery', [PhotoGalleryController::class, 'upload_gallery'])->name('admin.upload_gallery');
    Route::get('/admin/delete_gallery/{id}', [PhotoGalleryController::class, 'delete_gallery'])-> name('admin.delete_gallery');

    //placement_gallery
    Route::get('/admin/placement_gallery', [PhotoGalleryController::class, 'placement_gallery'])->name('admin.placement_gallery');
    Route::post('/admin/upload_placement_gallery', [PhotoGalleryController::class, 'upload_placement_gallery'])->name('admin.upload_placement_gallery');
    Route::get('/admin/delete_placement_gallery/{id}', [PhotoGalleryController::class, 'delete_placement_gallery'])-> name('admin.delete_placement_gallery');

    //overseas_gallery
    Route::get('/admin/overseas_gallery', [PhotoGalleryController::class, 'overseas_gallery'])->name('admin.overseas_gallery');
    Route::post('/admin/upload_overseas_gallery', [PhotoGalleryController::class, 'upload_overseas_gallery'])->name('admin.upload_overseas_gallery');
    Route::get('/admin/delete_overseas_gallery/{id}', [PhotoGalleryController::class, 'delete_overseas_gallery'])-> name('admin.delete_overseas_gallery');

    //Testimonials
    Route::get('/admin/testimonials', [ServiceController::class, 'testimonials'])->name('admin.testimonials');
    Route::get('/admin/add_testimonials', [ServiceController::class, 'add_testimonials'])->name('admin.add_testimonials');
    Route::post('/admin/upload_testimonials', [ServiceController::class, 'upload_testimonials'])->name('admin.upload_testimonials');
    Route::get('/admin/edit_testimonials/{id}',[ServiceController::class, 'edit_testimonials'])->name('admin.edit_testimonials');
    Route::post('/admin/update_testimonials/{id}',[ServiceController::class, 'update_testimonials'])->name('admin.update_testimonials');
    Route::get('/admin/delete_testimonials/{id}', [ServiceController::class, 'delete_testimonials'])-> name('admin.delete_testimonials');


}); // end group admin middleware


// agent group middleware
/* Route::middleware(['auth','role:agent'])->group(function(){
    Route::get('/agent/dashboard',[AgentController::class,'AgentDashboard'])->name('agent.dashboard');
}); */ // end group agent middleware


