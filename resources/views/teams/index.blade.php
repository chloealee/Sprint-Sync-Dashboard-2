@extends('app')

@section('content')
    <h2>Teams</h2>

    @if ( !$teams->count() )
        You have no teams.
    @else
        <ul>
            @foreach( $teams as $team )
                <li>
                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('teams.destroy', $team->slug))) !!}
                        <a href="{{ route('teams.show', $team->slug) }}">{{ $team->name }}</a>
                        (
                            {!! link_to_route('teams.edit', 'Edit', array($team->slug), array('class' => 'btn btn-info')) !!},
                            {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                        )
                    {!! Form::close() !!}
                </li>
            @endforeach
        </ul>
    @endif

    <p>
        {!! link_to_route('teams.create', 'Create Team') !!}
    </p>
@endsection