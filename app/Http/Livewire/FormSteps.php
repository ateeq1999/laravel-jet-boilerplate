<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FormSteps extends Component
{
    public $stepNumber = 0;

    public function render()
    {
        return view('livewire.form-steps');
    }
}
