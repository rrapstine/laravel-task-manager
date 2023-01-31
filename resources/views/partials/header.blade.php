<div class="container mx-auto py-12">
  <h1 class="text-orange-700 text-4xl font-bold text-center mb-8">Laravel Task Manager</h1>
  
  {{-- Dropdown for selecting a project using AlpineJS --}}
  <div x-data="{ show: false }" @click.away="show = false" class="text-center relative">
    <button 
      @click="show = !show" 
      class="py-2 px-4 bg-blue-500 hover:bg-blue-700 rounded shadow text-white font-semibold inline-flex"
    >
      Select a project 

      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 ml-2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5L12 21m0 0l-7.5-7.5M12 21V3" />
      </svg>
    </button>
    
    {{-- Projects List --}}
    <ul x-show="show" class="p-2 mt-2 absolute left-1/2 -translate-x-1/2 bg-white shadow rounded z-10" style="display: none">

      @if ($projects->count() > 0)
        @foreach ($projects as $project)
        <li class="pt-2">
          <a href="{{ route('projects', $project) }}" class="hover:text-orange-700 font-bold">
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