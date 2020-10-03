<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Question;
use Illuminate\Support\Facades\Auth;

class FormSteps extends Component
{
    public $step;
    public $high = 7;
    public $medium = 5;
    public $low = 3;
    public $answers = array();
    public $model_score = array();
    public $user;

    // init Variables Data In Mount Method

    public function mount(){

        // init Step Var Value
        $this->step = 1;
        
        // init User Var Value
        $this->user = Auth::user();
        
        // session()->forget('answers');
        
        // Get Model_score Var Value Form The Session
        $this->model_score = session()->get('models_scores');
        
        // Get Answers Var Value Form The Session
        $this->answers = session()->get('answers');

    }

    /**
     * increment The Step Var Value
     */

    public function incrementSteps()
    {
        $this->step++;

        if ($this->step > 8) {

            return redirect()->route('results', $this->user->id);

        }
    }

    /**
     * Decrement The Step Var Value
     */

    public function decrementSteps()
    {
        $this->step--;
    }

    public function setHigh($criteria){

        if($this->step >  1){
            
            $this->answers = session()->get('answers_data');
            
        }

        $this->answers[$criteria] = $this->high;

        session()->put('answers_data', $this->answers);

        $this->criteria_score($criteria, $this->answers[$criteria]);

    }

    public function setMedium($criteria){

        if($this->step >  1){
            
            $this->answers = session()->get('answers_data');
            
        }

        $this->answers[$criteria] = $this->medium;

        session()->put('answers_data', $this->answers);

        $this->criteria_score($criteria, $this->answers[$criteria]);

    }

    public function setLow($criteria){

        if($this->step > 1){
            
            $this->answers = session()->get('answers_data');
            
        }

        $this->answers[$criteria] = $this->low;

        session()->put('answers_data', $this->answers);

        $this->criteria_score($criteria, $this->answers[$criteria]);

        
    }
    
    public function criteria_score($criteria, $value){

        if($this->step > 1){
            
            $this->model_score = session()->get('models_data');
            
        }

        foreach ($this->model_score as $model_name => $model) {
            
            $this->model_score[$model_name][$criteria] = $model[$criteria] + $value;
            
        }

        session()->put('models_data', $this->model_score );

    }

    public function render()
    {
        return view('livewire.form-steps', [ 'questions' => Question::all() ]);
    }
}
