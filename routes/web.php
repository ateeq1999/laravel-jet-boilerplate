<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

    $results = session()->get('scores_data');

    $result = Auth::user()->results()->create($results);

    return $result;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/survey', function () {
    return view('steps');
})->name('survey');

Route::middleware(['auth:sanctum', 'verified'])->get('/users/{user}/results', function () {

    $scores = [];

    $answers = session()->get('answers_data');

    $results = session()->get('models_data');
    
    foreach ($results as $key => $result) {

        $sum = 0;
        
        foreach ($result as $value) {
            $sum += $value;
        }

        $scores[$key] = $sum;
        // $scores[$key.'_rate'] = $sum*(1/500)*100;

    }

    // Save User Answers
    $answer = Auth::user()->answers()->create($answers);
    
    // Save User Scores Result
    $result = Auth::user()->results()->create($scores);
    
    dd($scores, $result, $answer);

    return view('results', [ 'scores' => $scores ]);
})->name('results');
