<?php

namespace App\Services;

use App\Models\Project;

class ProjectService
{
    public function getAllProjects()
    {
            return Project::with('user')->get();
    }

    public function createProject(array $data)
    {
        return Project::create($data);
    }

    public function getProjectById($id)
    {
        return Project::with(['user', 'tasks'])->findOrFail($id);
    }

    public function updateProject($id, array $data)
    {
        $project = Project::findOrFail($id);
        $project->update($data);
        return $project;
    }

    public function deleteProject($id)
    {
        $project = Project::findOrFail($id);
        return $project->delete();
    }
}