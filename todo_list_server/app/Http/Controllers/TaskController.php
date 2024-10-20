<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    /**
     * get all
     */
    public function index()
    {
        // $tasks = Task::all();
        $tasks = Task::where('done', '=', true)->get();
        $tasks = Task::orderBy('id', 'desc')->limit(2)->offset(1)->first();
        // $tasks = DB::orderBy('id', 'desc')->limit(2)->offset(1)->first();
        // $tasks = DB::select(DB::raw('select * from tasks'));
        // $tasks = DB::table('tasks')->select();
        // dd('哈喽 摆摆');
        return $tasks;
    }

    public function create()
    {
        $task = new Task;
        $task->title = 'task 1';
        $task->description = 'task description 1';
        $task->deadline = date('Y-m-d H:i:s');  // null by default
        $task->done = false;  // false by default
        $task->save();
        // otra manera es usando un array asociativo en User::create([]);
        $task2 = new Task;
        $task2->title = 'task 2';
        $task2->description = 'task description 2';
        $task2->deadline = date('Y-m-d H:i:s');  // null by default
        $task2->done = false;  // false by default
        $task2->save();

        $task3 = new Task;
        $task3->title = 'task 3';
        $task3->description = 'task description 3';
        $task3->deadline = date('Y-m-d H:i:s');  // null by default
        $task3->done = false;  // false by default
        $task3->save();

        // dd('哈喽 摆摆');
        return $task;
    }
}
