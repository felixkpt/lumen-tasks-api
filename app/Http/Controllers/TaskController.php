<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    // Get all tasks (with filtering, pagination, search)
    public function index(Request $request)
    {
        $tasks = Task::when($request->status, function ($query, $status) {
            return $query->where('status', $status);
        })
            ->when($request->due_date, function ($query, $due_date) {
                return $query->where('due_date', $due_date);
            })
            ->when($request->search, function ($query, $search) {
                return $query->where('title', 'LIKE', "%$search%");
            })
            ->paginate(10);

        return response()->json($tasks);
    }

    // Create a new task
    public function create(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|unique:tasks',
            'description' => 'nullable',
            'due_date' => 'required|date|after:today',
        ]);

        $task = Task::create([
            'title' => $request->title,
            'description' => $request->description,
            'due_date' => $request->due_date,
            'status' => 'pending', // default status
        ]);

        return response()->json($task, 201);
    }

    // Get a specific task by id
    public function show($id)
    {
        $task = Task::findOrFail($id);
        return response()->json($task);
    }

    // Update a task
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'sometimes|required|unique:tasks,title,' . $id,
            'due_date' => 'sometimes|date|after:today',
            'status' => 'sometimes|in:pending,completed',
        ]);

        $task = Task::findOrFail($id);
        $task->update($request->all());

        return response()->json($task);
    }

    // Delete a task
    public function delete($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();

        return response()->json(null, 204);
    }
}
