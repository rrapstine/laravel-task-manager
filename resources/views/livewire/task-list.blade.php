<ul wire:sortable="reorder">
    @foreach ($project->tasks as $task)
        <livewire:task :task="$task" :wire:key="$task->id" />
    @endforeach
</ul>
