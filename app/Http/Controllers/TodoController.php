<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        return view('todo.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @param Todo $todo
     * @return void
     */
    public function store(Request $request, Todo $todo)
    {
        $request->validate([
            'todo' => ['required', 'string', 'min:6']
        ]);

        $todo->name = $request->todo;
        $todo->save();

        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Todo $todo
     * @return void
     */
    public function edit(Todo $todo)
    {
        return view('todo.single', compact('todo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Todo $todo
     * @return void
     */
    public function update(Request $request, Todo $todo)
    {
        $todo->name = $request->todo;
        $todo->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Todo $todo
     * @return void
     */
    public function destroy(Todo $todo)
    {
        $todo->delete();
        return redirect()->back();
    }
}
