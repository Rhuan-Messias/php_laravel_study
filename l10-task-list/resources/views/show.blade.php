@extends('layouts.app')
<!-- This directive make template know that it needs to get 
all the content from the layout template and add this content as well
-->

@section('title', $task -> title)


@section('content')
    <p>{{ $task -> description }}</p>

    @if($task->long_description)
        <p>{{$task->long_description}}</p>
    @endif

    <p>{{ $task -> created_at}}</p>
    <p>{{ $task -> updated_at}}</p>
@endsection