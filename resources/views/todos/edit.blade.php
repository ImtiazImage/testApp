@extends('todos.layout')

@section('content')
    <h1 class="text-2xl border-b pb-4">Update this Todo List</h1>

    <x-alert />

    <form action="{{route('todo.update',$todo->id)}}" method="post" class="py-5">
        @csrf
        @method('patch')
        <input type="text" name="title" value="{{$todo->title}}" class="p-2 border rounded"/>
        <input type="submit" value="Update" class="p-2 border rounded" />
    </form>
    <a href="/todos" class='m-5 p-2 bg-white-400 cursor-pointer rounded border'>Back</a>
@endsection
