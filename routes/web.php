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

Route::get('/', function () {
    return view('index');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about-us');
});
Route::get('/contact-us', function () {
    return view('contact-us');
});
Route::get('/our-services', function () {
    return view('our-services');
});
Route::get('/services/ocean-transportation', function () {
    return view('services/ocean-transportation');
});
Route::get('/services/auto-shipping', function () {
    return view('services/auto-shipping');
});
Route::get('/services/warehousing', function () {
    return view('services/warehousing');
});
Route::get('/services/loading', function () {
    return view('services/loading');
});
Route::get('/services/inland-transportation', function () {
    return view('services/inland-transportation');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
