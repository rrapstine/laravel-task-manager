<ul>
  {{-- {{dd($project->tasks);}} --}}
  @foreach ($project->tasks as $task)
    <livewire:task :task="$task" wire:key="task-{{ $task->id }}" />
  @endforeach
</ul>
