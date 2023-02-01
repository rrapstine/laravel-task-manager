<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Task extends Component
{
    public $task;

    public function mount($task)
    {
        $this->task = $task;
    }

    public function complete()
    {
        $this->task->isComplete = true;
        $this->task->completed_at = now();

        $this->task->save();

        $this->emitTo('task-list', 'taskAltered');
    }

    public function unComplete()
    {
        $this->task->isComplete = false;
        $this->task->completed_at = null;
        $this->task->save();

        $this->emitTo('task-list', 'taskAltered');
    }
    
    public function delete()
    {
        $this->task->delete();

        $this->emitTo('task-list', 'taskDeleted');
    }
    
    public function render()
    {
        return view('livewire.task');
    }
}
