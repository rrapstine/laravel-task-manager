<?php

namespace App\Http\Livewire;

use App\Models\Project;
use Livewire\Component;

class TaskList extends Component
{
    public Project $project;

    protected $listeners = [
        'taskAdded' => 'getAllTasks',
        'taskCompleted' => '$refresh',
        'taskDeleted' => '$refresh',
    ];

    public function getAllTasks()
    {
        $this->project->load('tasks');
    }

    public function render()
    {
        return view('livewire.task-list');
    }
}
