<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskManagerController extends Controller
{
    public function index() {
        return view('welcome', ['tasksList' => Task::all()]);
    }

    public function saveTask(Request $request) {
        $newTask = new Task;
        $newTask->title = $request->title;
        $newTask->description = $request->description;
        $newTask->due_date = $request->due_date;
        $newTask->status = $request->status;
        $newTask->save();

        return redirect('/');
    }

    public function updateTask(Request $request, $id) {
        $task = Task::findOrFail($id);
        $task->title = $request->input('title');
        $task->description = $request->input('description');
        $task->due_date = $request->input('due_date');
        $task->status = $request->input('status');

        $task->save();

        return response()->json(['message' => 'Task updated successfully']);
    }
}
