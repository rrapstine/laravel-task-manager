@extends('layout')

@section('content')

<div class="bg-white rounded shadow p-6 w-full lg:w-3/4">
  <div class="mb-4">
    <div class="flex mb-4 items-center" x-data=>
      <h2 class="text-xl mr-2">Projects / <span class="font-bold">{{ $project->name }}</span></h2>
      <x-button :action="route('project.delete', $project)" type="DELETE" color="red" buttonText="Delete" />
    </div>
    
    <div class="flex">
      <input class="shadow appearance-none border rounded w-full py-2 px-3 mr-4 text-grey-darker" placeholder="Add Todo" name="task">
      <x-button :action="route('task.create', $project)" type="POST" color="blue" buttonText="Add" />
    </div>
  </div>

  @if ($project->tasks->count() > 0)
    <ul>
      @foreach ($project->tasks as $task)
        <x-task :task="$task" />
      @endforeach
    </ul>
  @else
    <p>No tasks yet.</p>
  @endif
</div>

@endsection