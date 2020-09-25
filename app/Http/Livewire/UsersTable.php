<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class UsersTable extends Component
{
    public $search = '';

    public function mount(){
        // $name = 'name';
    }

    public function render()
    {
        $searchTerm = '%'.$this->search.'%';

        return view('livewire.users-table', [
            'users' => User::where('name','like',$searchTerm)->paginate(1),
        ]);
    }
}
