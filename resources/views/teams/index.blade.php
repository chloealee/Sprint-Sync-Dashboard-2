@extends('app')

@section('content')
    <h2>Teams</h2>

    @if ( !$teams->count() )
        You have no teams
    @else
        <ul>
            @foreach( $teams as $team )
                <li><a href="{{ route('teams.show', $team->slug) }}">{{ $team->name }}</a></li>
            @endforeach
        </ul>
    @endif
@endsection