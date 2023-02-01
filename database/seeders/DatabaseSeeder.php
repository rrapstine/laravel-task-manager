<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Task;
use App\Models\Project;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Seed some projects
        Project::create([
            'name' => 'Daily Routine'
        ]);

        Project::create([
            'name' => 'Job Search'
        ]);

        Project::create([
            'name' => 'World Domination'
        ]);
        
        // Seed some tasks for the projects
        Task::create([
            'task' => 'Consume coffee',
            'project_id' => 1,
            'priority' => 1,
        ]);

        Task::create([
            'task' => 'Consume even more coffee',
            'project_id' => 1,
            'priority' => 2,
        ]);

        Task::create([
            'task' => 'Take a nap',
            'project_id' => 1,
            'priority' => 3,
        ]);

        Task::create([
            'task' => 'Rewrite resume...again',
            'project_id' => 2,
            'priority' => 1,
        ]);

        Task::create([
            'task' => 'Apply to jobs I know I can do',
            'project_id' => 2,
            'priority' => 2,
        ]);

        Task::create([
            'task' => 'Cry internally',
            'project_id' => 2,
            'priority' => 3,
        ]);

        Task::create([
            'task' => 'Research feasability of monetizing the ozone',
            'project_id' => 3,
            'priority' => 1,
        ]);

        Task::create([
            'task' => 'Learn COBOL to finance my evil empire',
            'project_id' => 3,
            'priority' => 2,
        ]);
    }
}
