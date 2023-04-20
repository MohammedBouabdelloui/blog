<?php

use App\Http\Controllers\ControllerNavigation;
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


Route::get('/' , [ControllerNavigation::class , 'index'])->name('index');
Route::get('/contact' , [ControllerNavigation::class , 'contact'])->name('contact');
Route::get('/author' , [ControllerNavigation::class , 'author'])->name('author');
Route::get('/about-me' , [ControllerNavigation::class , 'about'])->name('about');

