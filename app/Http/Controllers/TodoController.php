<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function create()
    {
        return view('add');
    }


    public function store(Request $request)
    {
        $request->validate([
            'todo_text' => 'required|max:255',
        ]);

        $todo = new Todo();
        $todo->title = $request->todo_text;
        $todo->user_id = $request->user_id;
        $todo->save();

        return redirect()->route('view');
    }

    public function index()
    {
        $todos = Todo::all();
        return view('view', compact('todos'));
    }


    public function update(Request $request, $id)
    {
        $todo = Todo::find($id);
        if ($request->has('done')) {
            $todo->completed = true;
        } elseif ($request->has('delete')) {
            $todo->delete();
        }
        $todo->save();

        return redirect()->route('view');
    }
}
