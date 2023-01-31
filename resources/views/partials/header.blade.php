<div class="container mx-auto py-12">
  <h1 class="text-orange-700 text-4xl font-bold text-center mb-8">Laravel Task Manager</h1>
  
  {{-- Dropdown for selecting a project using AlpineJS --}}
  <div x-data="{ show: false }" class="text-center relative">
    <button @click="show = !show" class="py-2 px-4 bg-slate-300 hover:bg-slate-500 rounded">Select a project</button>
    
    {{-- Projects List --}}
    <div x-show="show">
      <ul class="p-2 mt-2 absolute left-1/2 -translate-x-1/2 bg-slate-300 rounded">

        @if ($projects->count() > 0)
          @foreach ($projects as $project)
          <li class="pt-2">
            <a href="{{ route('projects', $project) }}" class="text-blue-500 hover:text-blue-700 font-bold">
              {{ $project->name }}
            </a>
          </li>
          @endforeach

          <li class="py-2">
            <a href="#" class="text-orange-700 hover:text-blue-700 font-bold">
              Create a new project
            </a>
          </li>
        @endif
      </ul>
    </div>
  </div>
</div>