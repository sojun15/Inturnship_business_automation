<?php

namespace App\Http\Controllers;

use App\Models\ClassModel;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index()
    {
        $classes = ClassModel::with('teacher')->get();
        
        return response()->json($classes);
    }

    public function store(Request $request)
    {
        $request->validate([
            'class_name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'teacher_id' => 'required|exists:users,id'
        ]);

        $class = ClassModel::create($request->all());

        return response()->json($class, 201);
    }

    public function destroy($id)
    {
        $class = ClassModel::find($id);

        if (!$class) {
            return response()->json(['error' => 'Class not found'], 404);
        }

        $class->delete();

        return response()->json(['message' => 'Class deleted successfully']);
    }
}