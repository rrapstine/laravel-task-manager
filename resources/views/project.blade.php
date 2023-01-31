@extends('layout')

@section('content')

<div class="bg-white rounded shadow p-6 w-full lg:w-3/4">
  <div class="mb-4">
    <h2 class="text-xl mb-4">Projects / <span class="font-bold">{{ $project->name }}</span></h2>
    
    <div class="flex">
      <input class="shadow appearance-none border rounded w-full py-2 px-3 mr-4 text-grey-darker" placeholder="Add Todo">
      <button class="flex-no-shrink p-2 border-2 rounded text-blue-500 border-blue-500 hover:text-white hover:bg-blue-500">Add</button>
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