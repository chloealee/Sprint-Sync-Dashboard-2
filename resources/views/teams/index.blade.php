@extends('app')

@section('content')
    <h2>Teams</h2>

    @if ( !$teams->count() )
        <h5>You have no teams.</h5>
    @else
        <ul>
            @foreach( $teams as $team )
                <li>
                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('teams.destroy', $team->slug))) !!}
                        <a href="{{ route('teams.show', $team->slug) }}">{{ $team->name }}</a>
                        <!-- ( -->
                        <span class='buttons'>
                            {!! link_to_route('teams.edit', 'Edit', array($team->slug), array('class' => 'btn btn-info')) !!}
                            {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                        <!-- ) -->
                        </span>
                    {!! Form::close() !!}
                </li>
            @endforeach
        </ul>
    @endif

    <p>
        {!! link_to_route('teams.create', 'Create Team') !!}
    </p>
@endsection