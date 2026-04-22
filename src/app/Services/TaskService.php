<?php

namespace App\Services;

use App\Models\Task;

class TaskService
{
    public function createTask(array $data)
    {
        return Task::create($data);
    }

    public function addTagToTask($taskId, $tagId)
    {
        $task = Task::findOrFail($taskId);
        $task->tags()->attach($tagId);
        return $task->load('tags');
    }

    public function updateTaskStatus($id, $status)
    {
        $task = Task::findOrFail($id);
        $task->update(['status' => $status]);
        return $task;
    }
}