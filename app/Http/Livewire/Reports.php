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
    public $waterfall_rate;
    public $incremental_rate;
    public $spiral_rate;
    public $v_process_rate;
    public $scrum_rate;

    public function mount(){
        $this->questions = Question::all();
        $this->answers = Answer::all();
        $this->waterfall_rate = Result::sum('waterfall');
        $this->incremental_rate = Result::sum('incremental');
        $this->spiral_rate = Result::sum('spiral');
        $this->v_process_rate = Result::sum('v_process');
        $this->scrum_rate = Result::sum('scrum');
    }

    public function render()
    {
        return view('livewire.reports');
    }
}
