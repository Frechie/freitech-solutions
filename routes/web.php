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
    return view('homepage.home');
});

Route::get('/about', function (){
    return view('about.freitech-solutions');
});


Route::get('/about/team', function (){
    return view('about.team');
});


Route::get('/about/contact', function (){
    return view('about.contact');
});


Route::get('/services', function (){
    return view('services.training-consulting');
});

Route::get('/services', function (){
    return view('services.data-analytics');
});

Route::get('/services', function (){
    return view('services.graphics-design');
});
Route::get('/blog', function (){
    return view('blog.blogs');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
