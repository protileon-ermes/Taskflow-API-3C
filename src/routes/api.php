<?php

// routes/api.php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{ProjectController, TaskController, TagController, ProfileController};

Route::prefix('v1')->group(function () {
    // Projetos
    Route::apiResource('projects', ProjectController::class);

    // Tarefas
    Route::post('tasks', [TaskController::class, 'store']);
    Route::patch('tasks/{id}/status', [TaskController::class, 'updateStatus']);
    Route::post('tasks/{id}/tags', [TaskController::class, 'attachTag']);

    // Tags
    Route::apiResource('tags', TagController::class)->only(['index', 'store']);

    // Perfil
    Route::get('profiles/{userId}', [ProfileController::class, 'show']);
    Route::put('profiles/{userId}', [ProfileController::class, 'update']);
});
