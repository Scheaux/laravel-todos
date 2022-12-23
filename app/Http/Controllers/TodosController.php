<?php

namespace App\Http\Controllers;

use App\Models\Todos;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index($id = null)
    {
        $todos = Todos::all();
        if ($id !== null) {
            $todos = $todos[$id - 1];
        }
        return view('todos.index', compact('todos'));
    }

    public function store(Request $request)
    {
        Todos::create(['title' => 'new todo', 'description' => 'test description']);
        return redirect()->back();
    }
}
