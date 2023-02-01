<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{

    public function show(Project $project)
    {
        return view('project', [
            'project' => $project->load(['tasks' => function ($query) {
                $query
                    ->orderBy('completed_at')
                    ->orderBy('priority');
            }])
        ]);
    }
    
    public function create(Request $request)
    {
        $project = Project::create($request->validate([
            'name' => 'required'
        ]));

        return redirect()->route('project', $project);
    }
    
    public function delete(Project $project)
    {
        dd($project);
        $project_to_delete = Project::findOrFail($project);
        
        $project_to_delete->tasks()->delete();
        $project_to_delete->delete();

        return redirect()->route('welcome');
    }
}
