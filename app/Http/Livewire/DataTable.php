<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class DataTable extends Component
{
    public $search = '';
    protected $headers = [];
    protected $data = [];

    public function mount($data, $headers, $model){
        $this->data = $data;
        $this->headers = $headers;
    }

    public function render()
    {
        $searchTerm = '%'.$this->search.'%';

        return view('livewire.data-table', [
            'users' => User::where('name','like',$searchTerm)->get(),
        ]);
    }
}
