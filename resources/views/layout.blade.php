<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('partials.head')

<body class="antialiased bg-slate-900">
    <div class="flex flex-col h-screen">
        @include('partials.header')

        <div class="container flex mx-auto justify-center w-full">
            @yield('content')
        </div>
    </div>
</body>

</html>
