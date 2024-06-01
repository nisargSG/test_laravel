<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/profile', function () {
//     return view('profile');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->name("dashboard");


Route::get("/",function(){
    return view("dashboard");
});

Route::prefix("product")->group(function(){


    Route::get('add', function () {
        return("This is product add page");
    })->name('product.add');

    Route::get('delete', function () {
        return("This is product delete page");
    })->name('product.delete');

    Route::get('edit', function () {
        return("This is product edit page");
    })->name('product.edit');

    Route::get('view', function () {
        return("This is product view page");
    })->name('product.view');

});


Route::fallback(function(){
    return "<h1>Page not Found</h1>";
});

//redirection /admin->/undermaintance

Route::get('admin', function () {
    // Redirect to a new URL
    return redirect('/',307);
});