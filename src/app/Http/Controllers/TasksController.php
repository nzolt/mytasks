<?php

namespace App\Http\Controllers;

use App\Model\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{

    public function list()
    {
        $tasks = Task::whereNull('completed')
            ->where('date', '=', date('Y-m-d', time()))
            ->paginate(50);

        return view('tasks', ['tasks' => $tasks]);
    }

    public function completed()
    {
        $tasks = Task::where('completed', '=', 1)->paginate(50);

        return view('completed', ['tasks' => $tasks]);
    }
}
