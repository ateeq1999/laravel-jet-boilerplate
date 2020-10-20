<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Project;

class ProjectDetails extends Component
{
    public $name;
    public $company_name;
    public $type;
    public $year;
    public $manager;
    public $user;

    public function submit(){

        $data = [
            'user_id' => Auth::user()->id,
            'name' => $this->name,
            'company_name' => $this->company_name,
            'type' => $this->type,
            'year' => $this->year,
            'manager' => $this->manager,
        ];

        $project = Auth::user()->projects()->Create($data);

        session()->put('project', $project );

        return redirect()->route('projects.answers', $project->id);

    }

    public function render()
    {
        return view('livewire.project-details');
    }
}
