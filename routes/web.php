<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AboutDescriptionController;
use App\Http\Controllers\Admin\AdmissionsController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CareerController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\ContentController;
use App\Http\Controllers\Admin\PartnersController;
use App\Http\Controllers\Admin\PositionController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\TestominalsController;
use App\Http\Controllers\Admin\TestominalsHistoryController;
use App\Http\Controllers\Admin\TourController;
use App\Http\Controllers\Admin\TourHistoryController;
use App\Http\Controllers\Admin\TreatmentController;
use App\Http\Controllers\Admin\TreatmentDescriptionController;
use App\Http\Controllers\Admin\TreatmentTypeContentController;
use App\Http\Controllers\Admin\TreatmentTypeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/home', [HomeController::class, 'index'])->name('home');
//Route::get('/admin',AdminController::class)->name('admin.index');
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->group(function (){
    Route::get('/',AdminController::class)->name('admin.index');
    Route::resource('about', AboutController::class);
    Route::resource('aboutDescription', AboutDescriptionController::class);
    Route::resource('admissions', AdmissionsController::class);
    Route::resource('article', ArticleController::class);
    Route::resource('blog', BlogController::class);
    Route::resource('career', CareerController::class);
    Route::resource('contact', ContactController::class);
    Route::resource('content', ContentController::class);
    Route::resource('home', HomeController::class);
    Route::resource('partners', PartnersController::class);
    Route::resource('position', PositionController::class);
    Route::resource('team', TeamController::class);
    Route::resource('testominals', TestominalsController::class);
    Route::resource('testominalsHistory', TestominalsHistoryController::class);
    Route::resource('tour', TourController::class);
    Route::resource('tourHistory', TourHistoryController::class);
    Route::resource('treatment', TreatmentController::class);
    Route::resource('treatmentDescription', TreatmentDescriptionController::class);
    Route::resource('treatmentType', TreatmentTypeController::class);
    Route::resource('treatmentTypeContent', TreatmentTypeContentController::class);
});
