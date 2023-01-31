<?php

use App\Models\Task;
use App\Models\Project;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome', ['projects' => Project::all()]);
});

Route::get('/projects/{project}', function (Project $project) {
    return view('project', ['project' => $project->load('tasks')]);
})->name('projects');