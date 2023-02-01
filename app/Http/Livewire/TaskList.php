<?php

namespace App\Http\Livewire;

use App\Models\Project;
use Livewire\Component;

class TaskList extends Component
{
    public Project $project;
    public $tasks;

    protected $listeners = [
        'taskAdded' => 'refreshTasks',
        'taskAltered' => 'refreshTasks',
        'taskDeleted' => 'refreshTasks',
    ];

    public function mount(Project $project)
    {
        $this->project = $project;
        $this->tasks = $project->tasks;
    }

    public function reorder($taskList)
    {
        // Create a temporary collection of tasks from the taskList array
        $tempTasksArray = collect($taskList)->map(function ($item) {
            $id = $item['value'];
            return $this->project->tasks->find($id);
        });        
        
        // Iterate over the tasks and update the priority
        $tempTasksArray->each(function ($task, $index) {
            $task->priority = $index + 1;
            $task->save();
        });

        // Update the tasks collection to reflect tempTasksArray
        $this->tasks = $tempTasksArray;

        // Save the tasks collection to the database
        $this->project->save();

        // Emit taskAltered to self
        $this->emit('taskAltered');
    }

    public function refreshTasks()
    {
        $this->project->load(['tasks' => function ($query) {
            $query
                ->orderBy('completed_at')
                ->orderBy('priority');
        }]);
    }

    public function render()
    {
        return view('livewire.task-list');
    }
}
