@extends('layout')

@section('content')

<div class="grid grid-cols-3 gap-4">
  {{-- To Do --}}
  <div class="container">
    <h2 class="text-white font-bold text-xl mb-4">To Do</h2>
    <ul>
      <li>
        <div class="bg-white p-4 rounded">
          <p class="rounded-full bg-red-700 text-white px-3 py-1 font-bold mb-2 inline-block text-xs">React</p>
          <h3 class="font-semibold text-lg ml-1">Learn React</h3>
        </div>
      </li>
    </ul>
  </div>
  {{-- In Progress --}}
  <div class="container">
    <h2 class="text-white font-bold text-xl mb-4">In Progress</h2>
    <ul>
      <li>
        <div class="bg-white p-4 rounded">
          <p class="rounded-full bg-red-700 text-white px-3 py-1 font-bold mb-2 inline-block text-xs">Laravel</p>
          <h3 class="font-semibold text-lg ml-1">Learn Laravel</h3>
        </div>
      </li>
    </ul>
  </div>
  {{-- Done --}}
  <div class="container">
    <h2 class="text-white font-bold text-xl mb-4">Done</h2>
    <ul>
      <li>
        <div class="bg-white p-4 rounded">
          <p class="rounded-full bg-red-700 text-white px-3 py-1 font-bold mb-2 inline-block text-xs">Life</p>
          <h3 class="font-semibold text-lg ml-1">Stress about money</h3>
        </div>
      </li>
    </ul>
  </div>
</div>
</div>

@endsection