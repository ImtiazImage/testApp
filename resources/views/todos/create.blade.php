@extends('todos.layout');
@section('content')
    <h1 class="text-2xl border-b pb-4">What next yo uneed To-DO?</h1>
    <x-alert />
    <form action="/todos/create" method="post" class="py-5">
        @csrf
        <input type="text" name="title" class="p-2 border rounded"/>
        <input type="submit" value="Create" class="p-2 border rounded" />
    </form>
    <a href="/todos" class='m-5 p-2 bg-white-400 cursor-pointer rounded border'>Back</a>
@endsection
