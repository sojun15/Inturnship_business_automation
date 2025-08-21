<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $students = User::all();
        return view('users.index',compact('students'));
    }

    public function store(Request $request):RedirectResponse
    {
        $validationUser = $request->validate([
            'title' => 'string|max:30|required',
            'description' => 'string|max:100' 
        ]);

        $student = new User();
        $student->title = $validationUser['title'];
        $student->description = $validationUser['description'];
        $student->save();

        return redirect()->route('users.index')->with('success','User created successfully');
    }

    public function create(){
        return view('users.create');
    }
}
