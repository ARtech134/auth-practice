<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;
// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('user',usercontroller::class);  

route::get('about', function(){
    return "welcom to my website";
})->name('home');
