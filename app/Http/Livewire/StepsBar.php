<?php

namespace App\Http\Livewire;

use Livewire\Component;

class StepsBar extends Component
{
    public $step;

    public function mount($value){
        $this->step = $value;
    }

    public function render()
    {
        return view('livewire.steps-bar');
    }
}
