<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;


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
    ini_set('max_execution_time', 600);
    return view('index');
});
Route::get('/feature', function () {
    return view('feature');
});
Route::get('/testimonial', function () {
    return view('testimonial');
});
Route::get('/team', function () {
    return view('team');
});
Route::get('/service', function () {
    return view('service');
});
Route::get('/project', function () {
    return view('project');
});
Route::get('/gallerie', function () {
    return view('gallerie');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/404', function () {
    return view('404');
});


Route::controller(Controller::class)->group(function()
{

    Route::get('/lang', 'changeLang')->name('changeLang');
});
