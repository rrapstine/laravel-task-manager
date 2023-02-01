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
})->name('welcome');

Route::get('/projects/{project}', function (Project $project) {
    return view('project', ['project' => $project->load('tasks')]);
})->name('project');

Route::post('/projects/create', 'ProjectController@create')->name('project.create');
Route::delete('/projects/{project}', 'ProjectController@delete')->name('project.delete');

Route::post('/projects/{project}/tasks/create', function (Project $project) {
    $project->tasks()->create(request()->validate([
        'name' => 'required'
    ]));

    return redirect()->route('projects', $project);
})->name('task.create');