<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SitemapController;

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

/* SITEMAP */
/* Route::get('/sitemap.xml', [SitemapController::class, 'sitemap']);  */

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/aboutUs', function () {
    return view('aboutUs');
});

Route::get('/works', function () {
    return view('works');
});


Route::post('/sendEmail',[ContactController::class,'sendEmail'])->name('contact.send');



