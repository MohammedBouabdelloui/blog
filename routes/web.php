<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;
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



Route::controller(ControllerNavigation::class)->group(function(){
    Route::get('/' , 'index')->name('index');
    Route::get('/contact' ,  'contact')->name('contact');
    Route::get('/author' , 'author')->name('author');
    Route::get('/about-me' , 'about')->name('about');
    Route::get('/login' , 'login');
});


Route::middleware(['auth' , 'Admin'])->group(function(){
    Route::get('/dashboard' , function(){
        return view('admin.pages.dashboard');
    });
});


Route::get('/Forgot-Password' , function(){
    return view('auth-forgot-password');
})->name('Forgot_Password');


Route::get('/login' , function(){
    return view('admin.pages.auth-login');
})->name('login');

Route::post('/login_user' ,[AuthorController::class , 'ligin'])->name('login_user');


//Route::view('/post' , 'post-elements');
Route::view('/sersh' , 'search-result');

Route::resource('posts' , PostController::class);

Route::get('posts/filter_posts/{id}' , [PostController::class , 'filter_posts'])->name('filter_posts');

Route::resource('/category' ,  CategoryController::class);
