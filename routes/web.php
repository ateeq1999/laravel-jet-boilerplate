<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\http\Controllers;

// Route::group(
//     [
//         'prefix' => LaravelLocalization::setLocale(),
//         'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
//     ], function(){ 
// });


Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {

    // $answers = session()->get('answers_data');

    // $answer = Auth::user()->answers()->create($answers);

    // $results = session()->get('scores_data');

    // $result = Auth::user()->results()->create($results);
    $result = App\Models\Result::find(1);
    $answer = App\Models\Answer::find(1);

    $result->update(['answer_id' => 1 ]);

    return $answer->result;
    // return $result->answer;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/survey', function () {
    return view('steps');
})->name('survey');

Route::middleware(['auth:sanctum', 'verified'])->get('/users/{user}/results', '\App\Http\Controllers\HomeController@result')->name('results');
Route::middleware(['auth:sanctum', 'verified'])->get('/answers/{answer}/results', '\App\Http\Controllers\HomeController@answers_result')->name('answers.result');
Route::middleware(['auth:sanctum', 'verified'])->get('reports', 'HomeController@reports')->name('reports');
