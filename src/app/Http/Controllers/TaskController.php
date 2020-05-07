<?php

namespace App\Http\Controllers;

use App\Helpers\DateHelper;
use App\Model\Task;
use Illuminate\Http\Request;
use App\Http\Requests\Task as TaskRequest;
use Illuminate\Support\Facades\Validator;

class TaskController extends Controller
{
    public function create()
    {
        return view('addTask', ['minDate' => DateHelper::getMinDate()]);
    }

    public function createPost(TaskRequest $request)
    {
        try {
            $request->validate();
            $client = new Task($request->all());
            $client->save();
            return redirect('tasks/list');
        } catch (\Exception $e){
            $validator = $e->validator;
            return redirect()->back()->withErrors($validator->errors())->withInput($request->all());
        }
    }

    public function task($id)
    {
        $task = Task::find($id);

        return view('task', ['task' => $task]);
    }

    public function complete(Request $request)
    {
        $client = Task::find($request->get('ida'));
        $client->completed = true;
        $client->save();
        return redirect('tasks/list');
    }

    public function reject(Request $request)
    {
        $client = Task::find($request->get('idr'));
        $client->completed = false;
        $client->save();
        return redirect('tasks/list');
    }
}
