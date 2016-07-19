@extends('app')

@section('content')
    <h2>{{ $team->name }}</h2>

    @if ( !$team->tasks->count() )
        Your team has no tasks.
    @else
        <ul>
            @foreach( $team->tasks as $task )
                <li><a href="{{ route('teams.tasks.show', [$team->slug, $task->slug]) }}">{{ $task->name }}</a></li>
            @endforeach
        </ul>
    @endif
@endsection