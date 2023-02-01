<form class="flex" wire:submit.prevent="save( {{ $project->id }})">
  <input wire:model.defer="task.task" wire:keydown.enter="save" placeholder="Add Todo" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 mr-4 text-grey-darker" />
  
  <button type="submit" class="flex-no-shrink p-1 ml-2 border-2 rounded text-blue-500 border-blue-500 hover:text-white hover:bg-blue-500">Add</button>
</form>
