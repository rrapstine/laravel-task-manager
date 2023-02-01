@extends('layout')

@section('content')

<div class="bg-white rounded shadow p-6 w-full lg:w-3/4">
  <div class="mb-4">
    <div class="flex mb-4 items-center" x-data=>
      <h2 class="text-xl mr-2">Projects / <span class="font-bold">{{ $project->name }}</span></h2>
      <x-button :action="route('project.delete', $project)" type="DELETE" color="red" buttonText="Delete" />
    </div>
    
    <livewire:add-task :project="$project" />
  </div>

  @if ($project->tasks->count() > 0)
    <livewire:task-list :project="$project"/>
  @else
    <p>No tasks yet.</p>
  @endif
</div>

@endsection