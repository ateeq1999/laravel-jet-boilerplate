<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AnswersTables extends Component
{

    public $user;

    public function mount(){

        $this->user = Auth::user();

    }

    public function render()
    {
        return view('livewire.answers-tables', [
            'answers' => $this->user->answers()->paginate(1),
        ]);
    }
}
