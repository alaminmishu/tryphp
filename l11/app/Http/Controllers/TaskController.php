<?php

namespace App\Http\Controllers;

use App\Interfaces\TaskRepositoryInterface;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    private TaskRepositoryInterface $taskRepository;
    public function __construct(TaskRepositoryInterface $taskRepository)
    {
        $this->taskRepository = $taskRepository;
    }
    public function index()
    {
        $tasks = $this->taskRepository->getAllTasks();
        return response()->json($tasks);
    }
    public function show($taskId)
    {
        $task = $this->taskRepository->getTaskById($taskId);
        return response()->json($task);
    }
    public function store(Request $request)
    {
        $taskDetails = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'is_completed' => 'required|boolean',
        ]);
        $task = $this->taskRepository->createTask($taskDetails);
        return response()->json($task, 201);
    }
    public function update(Request $request, $taskId)
    {
        $newDetails = $request->only(['title', 'description', 'is_completed']);
        $this->taskRepository->updateTask($taskId, $newDetails);
        return response()->json(['message' => 'Task updated successfully']);
    }
    public function destroy($taskId)
    {
        $this->taskRepository->deleteTask($taskId);
        return response()->json(['message' => 'Task deleted successfully']);
    }
}
