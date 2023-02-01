@extends('layout')

@section('content')

<div class="bg-white rounded shadow p-6 w-full lg:w-3/4">
  <div class="mb-4">
    <form method="POST" action="{{ route('project.delete', $project) }}" class="flex mb-4 items-center">
      @csrf
      @method('DELETE')
      
      <h2 class="text-xl mr-2">Projects / <span class="font-bold">{{ $project->name }}</span></h2>
      <button type="submit" class="flex-no-shrink p-2 ml-4 border-2 rounded hover:text-white text-red-700 border-red-700 hover:bg-red-700">Delete</button>
    </form>
    
    <livewire:add-task :project="$project" />
  </div>

  @if ($project->tasks->count() > 0)
    <livewire:task-list :project="$project"/>
  @else
    <p>No tasks yet.</p>
  @endif
</div>

@endsection