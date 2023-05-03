<?php

use App\Http\Controllers\ControllerNavigation;
use App\Http\Controllers\PostController;
use App\Models\post;
use Illuminate\Auth\Events\Login;
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



Route::fallback(function(){
    return view('404');
});

Route::resource('/post' , PostController::class);

Route::controller(ControllerNavigation::class)->group(function(){
    Route::get('/' , 'index')->name('index');
    Route::get('/contact' ,  'contact')->name('contact');
    Route::get('/author' , 'author')->name('author');
    Route::get('/about-me' , 'about')->name('about');
    Route::get('/login' , 'login');
   
});

Route::get('/dashboard' , function(){
    return view('admin.pages.dashboard');
})->middleware('auth');

Route::get('/login' , function(){
    return view('admin.pages.auth-login');
})->name('login');

//Route::view('/post' , 'post-elements');
Route::view('/sersh' , 'search-result');