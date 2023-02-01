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
    return view('welcome');
})->name('welcome');

Route::get('/projects/{project}', 'ProjectController@show')->name('project');
Route::post('/projects/create', 'ProjectController@create')->name('project.create');
Route::delete('/projects/{project}', 'ProjectController@delete')->name('project.delete');

Route::post('/projects/{project}/tasks/create', 'TaskController@create')->name('task.create');