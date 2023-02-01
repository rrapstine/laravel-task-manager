<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function create(Request $request, Project $project)
    {
        $project->tasks()->create($request->validate([
            'name' => 'required'
        ]));

        return redirect()->route('project', $project);
    }
}
