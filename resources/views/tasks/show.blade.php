@extends('app')

@section('content')
    <h2>
        {!! link_to_route('teams.show', $team->name, [$team->slug]) !!} -
        {{ $task->name }}
    </h2>

    {{ $task->description }}
@endsection