<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Result;

class HomeController extends Controller
{
    public function result(){
        // Init Scores Array To Store Filtered Data In It
        $scores = [];

        // Get Session Data For Answers
        $answers = session()->get('answers_data');
        
        // Get Session Data For Models Scores
        $results = session()->get('models_data');
        
        // Filter The Scores Data and make it clean to create db objects
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
        
        // Return Data To The View
        return view('results', compact('scores', 'result', 'answer'));
    }

}
