<?php

use Illuminate\Support\Facades\Route;

// Route::group(
//     [
//         'prefix' => LaravelLocalization::setLocale(),
//         'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
//     ], function(){ 
// });


Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/users', function () {
    return view('users');
})->name('users');

Route::middleware(['auth:sanctum', 'verified'])->get('/users/create', function () {
    return view('users');
})->name('users.create');

Route::middleware(['auth:sanctum', 'verified'])->get('/users/{user}/edit', function () {
    return view('users');
})->name('users.edit');

Route::middleware(['auth:sanctum', 'verified'])->get('/form-steps', function () {
    return view('steps');
})->name('steps');
