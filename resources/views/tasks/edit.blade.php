@extends('layouts.master')

@section('content')
    <form action="/api/tasks/{{ $item->id }}" method="POST">
        {{ method_field('PATCH') }}
        <input type="text" name="task" value="{{ $item->task }}" /><br />
        <input type="checkbox" name="done" @if ($item->done) checked @endif /> Completed<br />
        <button type="submit">Submit</button>
    </form>
@endsection