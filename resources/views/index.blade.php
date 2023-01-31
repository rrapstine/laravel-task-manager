<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased bg-slate-900">
        {{-- Header bar with buttons on the right side for adding a new task and new project --}}
        <div class="flex justify-between items-center bg-gray-200 p-4 mb-8">
            <h1 class="text-2xl">Laravel Task Manager</h1>
            <div class="flex">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Add Task
                </button>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ml-2">
                    Add Project
                </button>
            </div>
        </div>
        
        <div class="grid grid-cols-3 gap-4 px-8">
            {{-- To Do --}}
            <div class="container">
                <h2 class="text-white font-bold text-xl mb-4">To Do</h2>
                
                    <ul>
                        <li>
                            <div class="bg-white p-4 rounded">
                                <p class="rounded-full bg-red-700 text-white px-3 py-1 font-bold mb-2 inline-block text-xs">React</p>
                                <h3 class="font-semibold text-lg ml-1">Learn React</h3>
                            </div>
                        </li>
                    </ul>
            </div>
            {{-- In Progress --}}
            <div class="container">
                <h2 class="text-white font-bold text-xl mb-4">In Progress</h2>
                    <ul>
                        <li>
                            <div class="bg-white p-4 rounded">
                                <p class="rounded-full bg-red-700 text-white px-3 py-1 font-bold mb-2 inline-block text-xs">Laravel</p>
                                <h3 class="font-semibold text-lg ml-1">Learn Laravel</h3>
                            </div>
                        </li>
                    </ul>
            </div>
            {{-- Done --}}
            <div class="container">
                <h2 class="text-white font-bold text-xl mb-4">Done</h2>
                
                    <ul>
                        <li>
                            <div class="bg-white p-4 rounded">
                                <p class="rounded-full bg-red-700 text-white px-3 py-1 font-bold mb-2 inline-block text-xs">Life</p>
                                <h3 class="font-semibold text-lg ml-1">Stress about money</h3>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>
