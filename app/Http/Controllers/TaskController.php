<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function SaveTask(Request $request){

        $this->validate($request,[
             'task'=>'required|max:100|min:5'
        ]);

        $task = new Task();
        $task->task = $request->task;
        $task->save();

        $data=Task::all();
        return view('tasks')->with('tasks',$data);
        // return redirect()->back();
    }

    public function MarkAsCompleted($id){
        $task = Task::find($id);
        $task->isCompleted=1;
        $task->save();
        return redirect()->back();
    }

    public function MarkAsNotCompleted($id){
        $task = Task::find($id);
        $task->isCompleted=0;
        $task->save();
        return redirect()->back();
    }

    public function DeleteTask($id){
        $task = Task::find($id);
        $task->delete();
        return redirect()->back();
    }

    public function UpdateTask($id){

        $task = Task::find($id);
        return view('updateTask')->with('tasksdata',$task);
    }

    public function UpdateTaskToNew(Request $request)
    {
        $this->validate($request,[
            'task'=>'required|max:100|min:5'
        ]);

        $id = $request->id;
        $updatedtask = $request->task;
        $data = Task::find($id);
        $data->task = $updatedtask;
        $data->save();

        $data = Task::all();
        return redirect('/tasks');
    }
}
