<?php

namespace App\Http\Livewire;

use App\Models\Project;
use Livewire\Component;

class TaskList extends Component
{
    public Project $project;

    protected $listeners = [
        'taskAdded' => 'refreshTasks',
        'taskAltered' => 'refreshTasks',
        'taskDeleted' => 'refreshTasks',
    ];

    public function refreshTasks()
    {
        $this->project->load(['tasks' => function ($query) {
            $query->orderBy('completed_at');
        }]);
    }

    public function render()
    {
        return view('livewire.task-list');
    }
}
