<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Question;

class QuestionsTables extends Component
{
    public $search = '';

    public function mount(){
        // $name = 'name';
    }

    public function render()
    {
        $searchTerm = '%'.$this->search.'%';

        return view('livewire.questions-tables', [
            'questions' => Question::where('title','like',$searchTerm)->paginate(5),
        ]);
    }
}
