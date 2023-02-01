<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function create(Request $request)
    {
        $project = Project::create($request->validate([
            'name' => 'required'
        ]));

        // Redirect to the project page with the new project
        return redirect()->route('project', $project);
    }
    
    public function delete($project)
    {
        Project::findOrFail($project)->delete();

        // Redirect to the welcome page
        return redirect()->route('welcome');
    }
}
