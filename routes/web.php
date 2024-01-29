<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\salooncontroller;
use Illuminate\Support\Facdes\DB;




Route::get('/', function () {
    return view('welcome');
});
Route::get('nav',function(){
    return view('navigation');
});
Route::get('about',function(){
    return view('About');
});
Route::get('/',function(){
    return view('index');
});
Route::get('contact',function(){
    return view('contact');
});
Route::get('booking',function(){
    return view('booking');
});
Route::get('offers',function(){
    return view('offers');
});
Route::get('enrollment',function(){
    return view('enrollment');
});
Route::get('admin',function(){
    return view('admin');
});
Route::get('footer',function(){
    return view('footer');
});


Route::get('index',[salooncontroller::class,'index']);
Route::get('about',[salooncontroller::class,'about']);
Route::get('contact',[salooncontroller::class,'contact']);
Route::get('booking',[salooncontroller::class,'booking']);
Route::get('offers',[salooncontroller::class,'offers']);
Route::get('enrollment',[salooncontroller::class,'enrollment']);
Route::get('admin',[salooncontroller::class,'admin']);
Route::post('/bookingstore',[salooncontroller::class,'insert']);
Route::post('/feedback',[salooncontroller::class,'feedback']);
Route::post('/membership',[salooncontroller::class,'membership']);
Route::post('/adminstore',[salooncontroller::class,'admin1']);
Route::post('/adminlast',[salooncontroller::class,'admin2']);
Route::post('/offerprint',[salooncontroller::class,'offershow']);

