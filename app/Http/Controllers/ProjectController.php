<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    public function show(Project $project)
    {
        return view('project', ['project' => $project->load('tasks')]);
    }
    
    public function create(Request $request)
    {
        $project = Project::create($request->validate([
            'name' => 'required'
        ]));

        return redirect()->route('project', $project);
    }
    
    public function delete($project)
    {
        Project::findOrFail($project)->delete();

        return redirect()->route('welcome');
    }
}
