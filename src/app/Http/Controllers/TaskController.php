<?php

namespace App\Http\Controllers;

use App\Services\TaskService;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function __construct(protected TaskService $taskService) {}

    public function store(Request $request)
    {
        $task = $this->taskService->createTask($request->all());
        return response()->json($task, 201);
    }

    public function updateStatus(Request $request, $id)
    {
        // Validação simples direto no controller para exemplo
        $request->validate(['status' => 'required|in:pending,in_progress,done']);
        
        $task = $this->taskService->updateTaskStatus($id, $request->status);
        return response()->json($task);
    }

    public function attachTag(Request $request, $id)
    {
        $task = $this->taskService->addTagToTask($id, $request->tag_id);
        return response()->json($task);
    }
}
