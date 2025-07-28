<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Services\TaskService\TaskService;
use Illuminate\Http\JsonResponse;


class TaskController extends Controller
{
    public function index(TaskService $taskService ): JsonResponse
    {
        $tasks = $taskService->getAll();
        return response()->json($tasks);
    }

    public function store(StoreTaskRequest $request, TaskService $taskService): JsonResponse
    {
        $task = $taskService->create($request->validated());
        return response()->json($task);
    }

    public function show(int $id, TaskService $taskService): JsonResponse
    {
        $task = $taskService->getById($id);
        return response()->json($task);
    }

    public function update(UpdateTaskRequest $request, int $id, TaskService $taskService): JsonResponse
    {
        $task = $taskService->update($id, $request->validated());
        return response()->json($task);
    }

    public function destroy(int $id, TaskService $taskService): JsonResponse
    {
        $taskService->delete($id);
        return response()->json(['message' => "Task deleted successfully."]);
    }

}
