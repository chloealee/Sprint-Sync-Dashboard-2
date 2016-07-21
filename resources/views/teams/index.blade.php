@extends('app')

@section('content')
    <h2 class="heading -emphasized">Teams</h2>
    <div class="body">

        @if ( !$teams->count() )
            <h5>You have no teams.</h5>
        @else
            <ul>
                @foreach( $teams as $team )
                    <li>
                        {!! Form::open(['class' => 'form-inline', 'method' => 'DELETE', 'route' => ['teams.destroy', $team->slug]]) !!}
                            <a href="{{ route('teams.show', $team->slug) }}">{{ $team->name }}</a>

                            <span class="right-align">
                                {!! link_to_route('teams.edit', 'Edit', [$team->slug], ['class' => 'button -tertiary']) !!}
                                {!! Form::submit('Delete', ['class' => 'button -tertiary']) !!}
                                {!! Form::close() !!}
                            </span>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>

    <div class='right-align'>
        {!! link_to_route('teams.create', 'Create Team', [], ['class' => 'button -tertiary']) !!}
    </div>
@endsection