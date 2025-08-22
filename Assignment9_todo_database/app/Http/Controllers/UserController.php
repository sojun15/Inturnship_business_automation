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

    public function edit($id)
    {
        $student = User::findOrFail($id);
        return view('users.edit',compact('student'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:30',
            'description' => 'required|string|max:100'
        ]);

        $student = User::findOrFail($id);
        $student->title = $validated['title'];
        $student->description = $validated['description'];
        $student->save();

        return redirect()->route('users.index')->with('success','Task updated successfully');
    }

    // function for deletion a particular task
    public function destroy($id)
    {
        $student = User::findOrFail($id);
        $student->delete();

        return redirect()->route('users.index')->with('success','user delete successful');
    }

    public function store(Request $request):RedirectResponse
    {
        $validationUser = $request->validate([
            'title' => 'string|max:30|required',
            'description' => 'string|max:100' 
        ]);

        // at first it will go validationUser and check those attributes are valid or not then store those attributes value into database particular column
        $student = new User();
        $student->title = $validationUser['title'];
        $student->description = $validationUser['description'];
        $student->save();

        return redirect()->route('users.index')->with('success','User created successfully');
    }

    // this function render the create.blade.php into view
    public function create(){
        return view('users.create');
    }
}
