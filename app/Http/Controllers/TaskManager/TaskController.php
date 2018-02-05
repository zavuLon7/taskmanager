<?php

namespace App\Http\Controllers\TaskManager;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Task;
use App\User;

class TaskController extends Controller
{

    public function index()
    {

      $user = Auth::user();
      return view('tasks.list.index', compact('user'));
    }



    public function addTask(Request $request)
    {
      if(isset($request->action) && $request->action == 'save'){
          $task = new Task();
          $task->user_id = Auth::user()->id;
          $task->task = $request->task;
          $task->save();

          $data['status'] = 200;
          $data['data'] = $task;
          return response()->json($data);
      }

      return redirect()->route('taskmanager');
    }



    public function editTask(Request $request, $id)
    {
      if(isset($request->action) && $request->action == 'save'){
          $task = Task::where([['id', $id], ['user_id', Auth::user()->id]])->first();
          if(is_null($task)){
            $data['status'] = 404;
            $data['error'] = 'Task no found';
            return response()->json($data);
          }
          $task->task = $request->task;
          $task->save();

          $data['status'] = 200;
          $data['data'] = $task;
          return response()->json($data);
      }

      return redirect()->route('taskmanager');
    }



    public function deleteTask(Request $request, $id)
    {

      if(isset($request->action) && $request->action == 'delete'){
          $task = Task::where([['id', $id], ['user_id', Auth::user()->id]])->first();
          if(is_null($task)){
            $data['status'] = 404;
            $data['error'] = 'Task no found';
            return response()->json($data);
          }
          $data['status'] = 200;
          $data['data'] = $task;
          $task->delete();
          return response()->json($data);
      }

      return redirect()->route('taskmanager');
    }



}
