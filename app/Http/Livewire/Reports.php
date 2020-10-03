<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Question;
use App\Models\Answer;
use App\Models\Result;

class Reports extends Component
{
    public $questions;
    public $answers;
    public $results;

    public function mount(){
        $this->questions = Question::all();
        $this->answers = Answer::all();
        $this->results = Result::all();
    }

    public function render()
    {
        return view('livewire.reports');
    }
}
