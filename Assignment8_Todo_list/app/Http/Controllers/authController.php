<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request){
        $userid = $request->input('userid');
        $password = $request->input('password');
        $userName = $request->input('userName');

        session(['userName' => $userName]);

        return view('homePage', [
            'userName' => $userName,
            'tasks' => session('tasks', [])
        ]);
    }

    public function addTask(Request $request){

        $validator = Validator::make($request->all(), [
            'taskTitle' => 'required|min:3',
            'description' => 'nullable|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->route('homePage')->withErrors($validator)->withInput();
        }

        $taskTitle = $request->input('taskTitle');
        $description = $request->input('description');

        $tasks = session('tasks', []);

        // it is for adding new task
        $tasks[] = [
            'title' => $taskTitle,
            'description' => $description
        ];

        // Save array into session
        session(['tasks' => $tasks]);

        return view('homePage', [
            'userName' => session('userName'),
            'tasks' => $tasks
        ]);
    }
}

?>