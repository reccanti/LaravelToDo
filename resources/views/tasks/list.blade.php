@extends('layouts.master')

@section('content')
    <div id="list" items="">
        <!-- Default rendering. This will be overwritten once Vue fetches server info -->
        <ol>
            @foreach(App\Item::all() as $item)
            <li>
                <form style="display:inline;" action="{{ 'api/tasks/' . $item->id }}" method="POST">
                    {{ method_field('DELETE') }}
                    <button type="submit">Delete</button>
                </form>
                <a href="{{ url('tasks/' . $item->id) }}">{{ $item->task }}</a>                
            </li>
            @endforeach
        </ol>
    </div>
    <div>
        <a href="{{ url('tasks/create') }}">Add Task</a>
    </div>
@endsection
