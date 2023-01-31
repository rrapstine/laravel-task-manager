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
    <body class="antialiased">
        {{-- Header bar with buttons on the right side for adding a new task and new project --}}
        <div class="flex justify-between items-center bg-gray-200 p-4 mb-8">
            <h1 class="text-2xl">Laravel Task Manager</h1>
            <div class="flex">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Add Task
                </button>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Add Project
                </button>
            </div>
        </div>
        
        <div class="grid grid-cols-3 gap-4 px-8">
            {{-- To Do --}}
            <div class="container">
                <h2>To Do</h2>
                <div class="bg-gray-200 p-4">
                    <ul>
                        <li>Learn Laravel</li>
                        <li>Learn Vue</li>
                        <li>Learn Tailwind</li>
                    </ul>
                </div>
            </div>
            {{-- In Progress --}}
            <div class="container">
                <h2>In Progress</h2>
                <div class="bg-gray-200 p-4">
                    <ul>
                        {{ }}
                        <li>Learn Laravel</li>
                        <li>Learn Vue</li>
                        <li>Learn Tailwind</li>
                    </ul>
                </div>
            </div>
            {{-- Done --}}
            <div class="container">
                <h2>Done</h2>
                <div class="bg-gray-200 p-4">
                    <ul>
                        <li>Learn Laravel</li>
                        <li>Learn Vue</li>
                        <li>Learn Tailwind</li>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>
