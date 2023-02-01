<li class="flex mb-4 space-between items-center">
  <p class="w-full {{ $task->isComplete ? 'line-through' : '' }}">{{ $task->task }}</p>

  @if (!$task->isComplete)
    <button wire:click="complete" class="flex-no-shrink px-1 ml-4 border-2 rounded hover:text-white text-green-700 border-green-700 hover:bg-green-700">Complete</button>
  @else
    <button wire:click="unComplete" class="flex-no-shrink px-1 ml-4 border-2 rounded hover:text-white text-red-700 border-red-700 hover:bg-red-700">Uncomplete</button>  
  @endif
  <button wire:click="delete" class="flex-no-shrink px-1 ml-2 border-2 rounded text-red-700 border-red-700 hover:text-white hover:bg-red-700">Delete</button>
</li>
