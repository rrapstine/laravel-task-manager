<li class="flex mb-4 space-between items-center">
  <p class="w-full">{{ $task->task }}</p>
  <button wire:click="complete" class="flex-no-shrink p-2 ml-4 border-2 rounded hover:text-white text-green-700 border-green-700 hover:bg-green-700">Done</button>
  <button wire:click="delete" class="flex-no-shrink p-2 ml-2 border-2 rounded text-red-500 border-red-500 hover:text-white hover:bg-red-500">Delete</button>
</li>
