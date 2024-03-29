<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\MotorbikeController;
use App\Http\Controllers\PartController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\GlobalSearchController;
use App\Http\Controllers\HomeController;

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

Route::middleware('locale')->group(function () {
    Route::get('/', [SiteController::class, 'index'])->name('home');
    
    Route::get('/cars', [CarController::class, 'index'])->name('car-index');
    Route::get('/cars/{id}', [CarController::class, 'detail'])->name('car-detail');

    Route::get('/motorbikes', [MotorbikeController::class, 'index'])->name('motorbike-index');
    Route::get('/motorbikes/{id}', [MotorbikeController::class, 'detail'])->name('motorbike-detail');

    Route::get('/parts', [PartController::class, 'index'])->name('part-index');
    Route::get('/parts/{id}', [PartController::class, 'detail'])->name('part-detail');

    Route::get('/loan', [SiteController::class, 'loan'])->name('loan-index');
    Route::get('/logins', [SiteController::class, 'login'])->name('login');
    Route::get('/contact', [SiteController::class, 'contact'])->name('contact');
    Route::post('/locale', [SiteController::class, 'locale'])->name('set-locale');

    //----
    Route::get('/about-us', [SiteController::class, 'aboutUs'])->name('about-us');
    Route::get('/fqas',[SiteController::class, 'FQAs'])->name('fqas');
    
    //---
    Route::get('/service',[SiteController::class, 'service'])->name('service');
    Route::get('/catalog',[SiteController::class, 'catalog'])->name('catalog');
    Route::get('/detailcatalog',[SiteController::class, 'detailcatalog'])->name('detail-catalog');
    Route::get('/detailvitz06',[SiteController::class, 'detailvitz06'])->name('detail-vitz06');
    Route::get('/detailvitz08',[SiteController::class, 'detailvitz08'])->name('detail-vitz08');
    Route::get('/detailvitz09',[SiteController::class, 'detailvitz09'])->name('detail-vitz09');
    Route::get('/detailvitz11',[SiteController::class, 'detailvitz11'])->name('detail-vitz11');
    Route::get('/detailalphard06',[SiteController::class, 'detailalphard06'])->name('detail-alphard06');
    Route::get('/detailalphard08',[SiteController::class, 'detailalphard08'])->name('detail-alphard08');
    Route::get('/detailalphard09',[SiteController::class, 'detailalphard09'])->name('detail-alphard09');
    Route::get('/detailalphard15',[SiteController::class, 'detailalphard15'])->name('detail-alphard15');
    Route::get('/detailalphard19',[SiteController::class, 'detailalphard19'])->name('detail-alphard19');

    Route::get('/car-compare',[SiteController::class, 'carcompare'])->name('car-compare');
    Route::get('/steeringconversion',[SiteController::class, 'steeringconversion'])->name('steering-conversion');

    Route::get('/blog', [BlogController::class, 'index'])->name('blog');
    Route::get('/post/{slug}', [BlogController::class, 'detail'])->name('post');

    Route::get('/search',[GlobalSearchController::class, 'globalSearch']);
    // ->name('global-search');

});

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::group(['middleware' => ['auth']], function() {
    Route::get('/admins', [HomeController::class, 'admin']);
    Route::get('/user', [HomeController::class, 'user']);
});