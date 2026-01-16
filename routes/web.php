<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;
use App\Http\Middleware\firstmiddleware;
Route::get('/', function () {
    return view('welcome');
});

Route::resource('user',usercontroller::class);  

Route::get('about', function(){
    return"welcom to my websit";
})->name('home');

Route::view('register','register');
Route::get('registersave',[usercontroller::class,'register']) -> Middleware(firstmiddleware::class);

Route::view('login','login');

Route::view('contactpage','contact');