<?php

namespace App\Http\Livewire;

use App\Models\Task;
use App\Models\Project;
use Livewire\Component;

class AddTask extends Component
{
    public Task $task;
    public $project;

    protected $rules = [
        'task.task' => 'required|string',
        'task.project_id' => 'required|integer'
    ];

    public function mount()
    {
        $this->task = new Task();
    }

    public function save($projectID)
    {
        $this->task->project_id = $projectID;

        $this->validate();

        $this->task->save();

        $this->task = new Task();
    }
    
    public function render()
    {
        return view('livewire.add-task');
    }
}
