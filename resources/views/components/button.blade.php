@props(['action', 'color', 'buttonText'])

<form method="post" action="{{ $action }}">
  @csrf
  @method('DELETE')
  
  <button class="flex-no-shrink p-1 ml-2 border-2 rounded text-{{ $color }}-500 border-{{ $color }}-500 hover:text-white hover:bg-{{ $color }}-500">{{ $buttonText }}</button>
</form>