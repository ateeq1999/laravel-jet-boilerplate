<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\http\Controllers;


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

// Questions Routes

Route::middleware(['auth:sanctum', 'verified'])->get('/questions', function () {
    return view('questions');
})->name('questions');

Route::middleware(['auth:sanctum', 'verified'])->get('/questions/create', function () {
    return view('questions');
})->name('questions.create');

Route::middleware(['auth:sanctum', 'verified'])->get('/questions/{question}/edit', function () {
    return view('questions');
})->name('questions.edit');

// Answers Routes

Route::middleware(['auth:sanctum', 'verified'])->get('/answers', function () {
    return view('answers');
})->name('users.answers');

Route::middleware(['auth:sanctum', 'verified'])->get('/projects/create', function () {
    return view('project-details');
})->name('create.projects.details');

Route::middleware(['auth:sanctum', 'verified'])->get('/projects/{project}/answers', function () {
    return view('steps');
})->name('projects.answers');

Route::middleware(['auth:sanctum', 'verified'])->get('/users/{user}/results', '\App\Http\Controllers\HomeController@result')->name('results');
Route::middleware(['auth:sanctum', 'verified'])->get('/answers/{answer}/results', '\App\Http\Controllers\HomeController@answers_result')->name('answers.result');
Route::middleware(['auth:sanctum', 'verified'])->get('reports', 'HomeController@reports')->name('reports');
