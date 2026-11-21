<?php

namespace App\Http\Controllers;

use App\Models\Task;

class TaskController extends Controller
{
    public function today()
    {
        $tasks = Task::today()->get();

        return view('tasks.today', ['tasks' => $tasks]);
    }

    public function index()
    {
        $tasks = Task::orderBy('task_date')->orderBy('id')->get();

        return view('tasks.index', ['tasks' => $tasks]);
    }
}