<?php

namespace App\Http\Controllers;

use App\Tasks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\user;


class TasksController extends Controller
{
    public function index(){


            $role = Auth::user()->is_admin;
            if($role == NULL){
            $id = Auth::user()->id;
            $tasks = Tasks::with('user')->where ('user_id',$id)->get();}
            else if($role == 1){
            // $tasks = Tasks::with('users') ->where ('name',Admin) ->get();
            $tasks = Tasks::where('user_id', '!=' , NULL) ->get();
            }

//         $tasks = Tasks::with('user')->where('user_id', '!=' ,NULL)->get();

//        $tasks = Tasks::all();
//        foreach ($tasks as $task) {
//            $user = User::where('id', $task->user_id)->first();
//            $task->user = $user;
//        }
//        return view('tasks')->with('tasks', $tasks);

        return view('tasks')->with('tasks',$tasks);

    }

    public function createTask()
    {
        return view('create-task');
    }

    public function addTask(Request $request){

        $this->validate($request, [
            'name' => 'required|min:5',
            'description' => 'required|max:50',
        ]);

        $id = Auth::user()->id;
        $task = new Tasks();
        $task->user_id = $id;
        $task->name = $request->name; 
        $task->description = $request->description;
        $task->save();
        session()->flash('notify','Task added with success.');
        return redirect('/tasks');
    }

    public function updateTask($id){
        $task = Tasks::where('id', $id)->first();
        return view('update-task')->with('task', $task);
    }

    public function updateTasksData(Request $request) {
        $data = array(
            'name' => $request->name,
            'description' => $request->description
        ); 
        $id = $request->id;
        $updateTask = Tasks::where('id', $id)->update($data);
        session()->flash('notify','Task updated with success.');
        return redirect('/tasks'); 
    }
    public function deleteTask($id){
        $task = Tasks::where('id', $id)->delete();
        session()->flash('notify','Task deleted with success.');
        return redirect('/tasks');
    }
}
?>
