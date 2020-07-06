@extends('todos.layout');

@section('content')
    <div class="flex justify-between border-b pb-4 ">
        <h1 class="text-2xl px-2">All Your Todos</h1>
        <a class=" mx-5 py-2 text-blue-400 cursor-pointer text-white" href="/todos/create">
            <span class="fas fa-plus-circle" />
        </a>
    </div>
        <ul class="my-5">
            <x-alert />
            @foreach($todos as $todo)
                <li class="flex justify-between p-2">
                    @if ($todo->completed)
                        <div>
                            <p class="line-through">{{$todo->title}}</p>
                        </div>
                    @else
                        <p>{{$todo->title}}</p>

                    @endif
                    <div>
                        <a href="/todos/edit/{{$todo->id}}" class="text-orange-400 cursor-pointer text-white">
                            <span class="fas fa-edit px-2"/></a>

                            <span class="fas fa-trash text-red-500 px-2 cursor-pointer"
                               onclick="event.preventDefault();
                               if(confirm('Are you Sure You want to delete this?')){
                                   document.getElementById('form-delete-{{$todo->id}}').submit();
                                   }"/>

                            <form action="{{route('todo.delete',$todo->id)}}" method="post" style="display: none;" id="{{'form-delete-'.$todo->id}}">
                                @csrf
                                @method('delete');
                            </form>

                        @if ($todo->completed)
                            <span class="fas fa-check text-green-400 px-2"
                                  onclick="event.preventDefault();document.getElementById('form-incompleted-{{$todo->id}}').submit()"/>

                            <form action="{{route('todo.incomplete',$todo->id)}}" method="post" style="display: none;" id="{{'form-incompleted-'.$todo->id}}">
                                @csrf
                                @method('delete');
                            </form>
                        @else
                            <span onclick="event.preventDefault();document.getElementById('form-completed-{{$todo->id}}').submit()"
                                  class="fas fa-check text-gray-300 cursor-pointer px-2"/>

                            <form action="{{route('todo.complete',$todo->id)}}" method="post" style="display: none;" id="{{'form-completed-'.$todo->id}}">
                                @csrf
                                @method('put');
                            </form>
                        @endif
                    </div>
                </li>
            @endforeach
        </ul>
@endsection

