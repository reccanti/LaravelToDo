@extends('layouts.master')

@section('content')
    <p>{{ $item->task }}</p>
    <p>Done?: @if ($item->done) True @else False @endif </p>
    <p>
        <a href="{{ url('tasks/' . $item->id . '/edit') }}">Edit</a>
        <a href="{{ url('tasks') }}">Back</a>
    </p>

@endsection