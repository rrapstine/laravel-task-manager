<li class="flex py-4 mb-4 last:mb-0 space-between items-center">
  <svg class="-ml-4 mr-2" width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"> <path fill-rule="evenodd" clip-rule="evenodd" d="M4.49999 2.5C4.49999 1.94772 4.9477 1.5 5.49999 1.5C6.05227 1.5 6.49999 1.94772 6.49999 2.5C6.49999 3.05228 6.05227 3.5 5.49999 3.5C4.9477 3.5 4.49999 3.05228 4.49999 2.5ZM8.49999 2.5C8.49999 1.94772 8.9477 1.5 9.49999 1.5C10.0523 1.5 10.5 1.94772 10.5 2.5C10.5 3.05228 10.0523 3.5 9.49999 3.5C8.9477 3.5 8.49999 3.05229 8.49999 2.5ZM4.49998 7.5C4.49998 6.94772 4.9477 6.5 5.49998 6.5C6.05227 6.5 6.49998 6.94772 6.49998 7.5C6.49998 8.05228 6.05227 8.5 5.49998 8.5C4.9477 8.5 4.49998 8.05228 4.49998 7.5ZM8.49998 7.5C8.49998 6.94771 8.9477 6.5 9.49999 6.5C10.0523 6.5 10.5 6.94772 10.5 7.5C10.5 8.05228 10.0523 8.5 9.49998 8.5C8.9477 8.5 8.49998 8.05228 8.49998 7.5ZM4.49998 12.5C4.49998 11.9477 4.9477 11.5 5.49998 11.5C6.05227 11.5 6.49998 11.9477 6.49998 12.5C6.49998 13.0523 6.05227 13.5 5.49998 13.5C4.9477 13.5 4.49998 13.0523 4.49998 12.5ZM8.49998 12.5C8.49998 11.9477 8.9477 11.5 9.49998 11.5C10.0523 11.5 10.5 11.9477 10.5 12.5C10.5 13.0523 10.0523 13.5 9.49998 13.5C8.9477 13.5 8.49998 13.0523 8.49998 12.5Z" fill="black"/> </svg>

  <p class="w-full {{ $task->isComplete ? 'line-through' : '' }}">{{ $task->task }}</p>

  @if (!$task->isComplete)
    <button wire:click="complete" class="flex-no-shrink px-1 ml-4 border-2 rounded hover:text-white text-green-700 border-green-700 hover:bg-green-700">Complete</button>
  @else
    <button wire:click="unComplete" class="flex-no-shrink px-1 ml-4 border-2 rounded hover:text-white text-red-700 border-red-700 hover:bg-red-700">Uncomplete</button>  
  @endif
  <button wire:click="delete" class="flex-no-shrink px-1 ml-2 border-2 rounded text-red-700 border-red-700 hover:text-white hover:bg-red-700">Delete</button>
</li>
