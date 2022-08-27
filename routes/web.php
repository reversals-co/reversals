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

$webControllerNamespace = 'App\Http\Controllers';

//static pages link
Route::get('/', function () { return view('pages/index'); })->name('index');
Route::get('/about-us', function () { return view('pages/about-us'); })->name('about-us');
Route::get('/contact-us', function () { return view('pages/contact-us'); })->name('contact-us');
Route::get('/pricing', function () { return view('pages/pricing'); })->name('pricing');
Route::get('/faqs', function () { return view('pages/faqs'); })->name('faqs');
Route::get('/why-choos-us', function () { return view('pages/why-choos-us'); })->name('why-choos-us');
Route::get('/team', function () { return view('pages/team'); })->name('team');
Route::get('/comming-soon', function () { return view('pages/comming-soon'); })->name('comming-soon');
Route::get('/page-not-found', function () { return view('pages/404'); })->name('404');

//services
Route::controller(App\Http\Controllers\ServiceController::class)->prefix('services')->name('services.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/show', 'show')->name('show');
});

//blogs
Route::controller(App\Http\Controllers\BlogController::class)->prefix('blogs')->name('blogs.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/show', 'show')->name('show');
});
