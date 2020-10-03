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

    public function mount(){

        $this->step = 1;

        $this->user = Auth::user();;

        $this->answers = [
            'requirements' => 0,
            'cost' => 0,
            'duration' => 0,
            'flexible_to_change' => 0,
            'customer_availability' => 0,
            'simplicity_ratio' => 0,
            'project_size' => 0,
            'project_complex' => 0,
        ];

    }

    public function incrementSteps()
    {
        $this->step++;

        if ($this->step > 8) {
            // dd($this->model_score);
            return redirect('results', $this->user->id);
        }
    }

    public function decrementSteps()
    {
        $this->step--;
    }

    public function setHigh($criteria){

        $this->answers[$criteria] = $this->high;

        $this->criteria_score($criteria, $this->answers[$criteria]);

    }

    public function setMedium($criteria){

        $this->answers[$criteria] = $this->medium;

        $this->criteria_score($criteria, $this->answers[$criteria]);

    }

    public function setLow($criteria){

        $this->answers[$criteria] = $this->low;

        $this->criteria_score($criteria, $this->answers[$criteria]);

        
    }
    
    public function criteria_score($criteria, $value){

        if($this->step <  1){
            
            session()->forget('models_scores');
            
            $this->model_score = session()->get('models_scores');

        }else{
            
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
