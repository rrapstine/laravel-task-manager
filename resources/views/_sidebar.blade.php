<aside class="col-span-1 flex flex-col bg-gray-200 p-4">
  <h1 class="text-2xl mb-4">Laravel Task Manager</h1>
  
  <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-16">
    Add Project
  </button>
  
  <ul>
    @foreach ($projects as $project)
    <li>
      <a href="{{ route('projects', $project) }}" class="text-blue-500 hover:text-blue-700 font-bold">
        {{ $project->name }}
      </a>
    </li>
    @endforeach
  </ul>
</aside>