<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\TeacherController;
use App\Http\Middleware\CheckUserCookie;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\MySingleController;


Route::resource('teachers', TeacherController::class);

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/profile', function () {
//     return view('profile');
// });


Route::get('/login', function () {
    return view('login');
});

 Route::get('/dashboard', function () {
     return view('dashboard');
 })->name("dashboard")->middleware(CheckUserCookie::class);


Route::get('/teachersdata',[MySingleController::class,"getAllTeachers"]);

//Route::get('/teachersbydept1',[ApiController::class,"getAllTeachersFromDept1"]);

//Route::get('/teachers/create', [ApiController::class,"showView"] )->name('teachers.create');

//Route::post('/teachers', [ApiController::class,"insertNewTeacher"])->name('teachers.store');


Route::get('/p1', [MyController::class, 'showView']);

Route::get('/p2',  [MySingleController::class, 'showView']);

Route::get("/home",function(){
    return view("home");
});


Route::get("/profile",function(){
    return view("profile");
});


Route::get("/xyz",function(){
    return view("xyz");
});

Route::get("/mywebpage",function(){

    $name="Hello";
    $age="28";


    return view("mywebpage",["p1"=>$name,"p2"=>$age]);
});


Route::fallback(function(){
    return "<h1>Page not Found</h1>";
});



//routing name
//routing group
//routing fallback
//routing redirection