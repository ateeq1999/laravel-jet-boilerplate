<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Result;
use App\Models\Answer;

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

        }

        // Save User Answers
        $answer = Auth::user()->answers()->create($answers);

        $scores['answer_id'] = $answer->id;

        // Save User Scores Result
        $result = Auth::user()->results()->create($scores);
        
        // Return Data To The View
        return view('results', compact('scores', 'result', 'answer'));
    }

    public function answers_result(Answer $answer){

        // Get The result Data To Pass it to the view
        $scores = $answer->result;

        // Return Data To The View
        return view('results', compact('scores'));
    }

}
