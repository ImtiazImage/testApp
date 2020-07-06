<?php

namespace App\Http\Controllers;

use App\Todo;
use App\Http\Requests\TodoCreateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TodoController extends Controller
{
    public function index(){
        $todos = Todo::orderBy('completed')->get();
        return view('todos.index',compact('todos'));
    }

    public function create(){
        return view('todos.create');
    }

    public function store(TodoCreateRequest $request){
        Todo::create($request->all());
        return redirect()->back()->with('message', 'Todo Created Successfully!!');
    }

    public function edit(Todo $todo){
        return view('todos.edit',compact('todo'));
    }

    public function update(TodoCreateRequest $request, Todo $todo){
        $todo->update(['title'=>$request->title]);
        return redirect(route('todo.index'))->with('message', 'Todo Updated!');
    }
    public function complete(Todo $todo){
        $todo->update(['completed'=>true]);
        return redirect()->back()->with('message', 'Todo marked as Completed!');
    }
    public function incomplete(Todo $todo){
        $todo->update(['completed'=>false]);
        return redirect()->back()->with('message', 'Todo marked as Incompleted!');
    }
    public function delete(Todo $todo){
        $todo->delete();
        return redirect()->back()->with('message', 'Todo deleted!');
    }
}
