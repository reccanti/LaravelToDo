@extends('layouts.master')

@section('content')
    <form action="/api/tasks" method="POST">
        <input type="text" name="task" /><br />
        <input type="checkbox" name="done"/> Completed<br />
        <button type="submit">Submit</button>
    </form>    
@endsection