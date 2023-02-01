<ul wire:sortable="reorder">
  {{-- {{dd($project->tasks);}} --}}
  @foreach ($project->tasks as $task)
    <livewire:task :task="$task" />
  @endforeach
</ul>
