<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('_head')

<body class="antialiased bg-slate-900">
  <div class="grid grid-cols-6 h-screen">
    @include('_sidebar', ['projects' => $projects])

    <div class="col-span-5 p-8">
      @yield('content')
    </div>
  </div>
</body>
</html>