<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\rafaycontroller;
use App\Http\Middleware\firstmiddleware;
Route::get('/', function () {
    return view('welcome');
});

Route::resource('user',usercontroller::class);  


Route::view('about', 'about')->name('about');

Route::view('register','register')->name('register');
Route::post('register',[rafaycontroller::class,'register'])->name('register.post');

Route::view('login','login')->name('login');
Route::Post('login',[rafaycontroller::class, 'login'])->name('login.post');
Route::get('logout',[rafaycontroller::class, 'logout'])->name('logout');


Route::view('contactpage','contact')->name('contact');

Route::view('innerlogin','innerlogin')->name('innerlogin');