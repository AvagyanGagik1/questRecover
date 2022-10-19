<?php

use App\Http\Controllers\Admin\TeamTypeController;
use App\Http\Controllers\Front\BenefitsController;
use App\Http\Controllers\Front\CallbackRequest;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AboutDescriptionController;
use App\Http\Controllers\Admin\AdmissionsController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CareerController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\ContentController;
use App\Http\Controllers\Admin\HomeDescriptionController;
use App\Http\Controllers\Admin\HomeVideoController;
use App\Http\Controllers\Admin\PartnersController;
use App\Http\Controllers\Admin\PositionController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\TestimonialsController;
use App\Http\Controllers\Admin\TestimonialsHistoryController;
use App\Http\Controllers\Admin\TourController;
use App\Http\Controllers\Admin\TourHistoryController;
use App\Http\Controllers\Admin\TreatmentController;
use App\Http\Controllers\Admin\TreatmentDescriptionController;
use App\Http\Controllers\Admin\TreatmentTypeContentController;
use App\Http\Controllers\Admin\TreatmentTypeController;
use App\Http\Controllers\Admin\StoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Front\HomeController as FrontController;
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



Auth::routes(['register'=>false]);


Route::prefix('admin')->middleware('auth')->group(function (){
    Route::get('/',[AdminController::class,'index'])->name('admin.index');
    Route::get('/callback',[AdminController::class,'callback'])->name('admin.callback');
    Route::get('/benefit',[AdminController::class,'benefit'])->name('admin.benefit');
    Route::resource('about', AboutController::class);
    Route::resource('aboutDescription', AboutDescriptionController::class);
    Route::resource('admissions', AdmissionsController::class);
    Route::resource('article', ArticleController::class);
    Route::resource('blog', BlogController::class);
    Route::resource('career', CareerController::class);
    Route::resource('contact', ContactController::class);
    Route::resource('content', ContentController::class);
    Route::resource('home', HomeController::class);
    Route::resource('homeDescription', HomeDescriptionController::class);
    Route::resource('homeVideo', HomeVideoController::class);
    Route::resource('partners', PartnersController::class);
    Route::resource('position', PositionController::class);
    Route::resource('story', StoryController::class);
    Route::resource('team', TeamController::class);
    Route::resource('teamType', TeamTypeController::class);
    Route::resource('testimonials', TestimonialsController::class);
    Route::resource('testimonialsHistory', TestimonialsHistoryController::class);
    Route::resource('tour', TourController::class);
    Route::resource('tourHistory', TourHistoryController::class);
    Route::resource('treatment', TreatmentController::class);
    Route::resource('treatmentDescription', TreatmentDescriptionController::class);
    Route::resource('treatmentType', TreatmentTypeController::class);
    Route::resource('treatmentTypeContent', TreatmentTypeContentController::class);
});

Route::namespace('Front')->group(function(){
    Route::get('/', [FrontController::class,'index'])->name('front.index');
    Route::get('/about', [FrontController::class,'about'])->name('front.about');
    Route::get('/tour', [FrontController::class,'tour'])->name('front.tour');
    Route::get('/testimonials', [FrontController::class,'testimonials'])->name('front.testimonials');
    Route::get('/admissions', [FrontController::class,'admissions'])->name('front.admissions');
    Route::get('/blog', [FrontController::class,'blog'])->name('front.blog');
    Route::get('/article/{slug}', [FrontController::class,'article'])->name('front.article');
    Route::get('/contact', [FrontController::class,'contact'])->name('front.contact');
    Route::get('/treatment', [FrontController::class,'treatment'])->name('front.treatment');
    Route::get('/treatmentType/{slug}', [FrontController::class,'treatmentType'])->name('front.treatmentType');
    Route::post('/save/benefits',[BenefitsController::class,'index'])->name('front.save_benefit');
    Route::post('/callback/request',[CallbackRequest::class,'index'])->name('front.callback');
});

Route::get('artisan',function (){
   Artisan::call('storage:link');
});
