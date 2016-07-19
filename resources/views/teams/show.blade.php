@extends('app')

@section('content')
    <h2>{{ $team->name }}</h2>

    @if ( !$team->tasks->count() )
        Your team has no tasks.
    @else
        <ul>
            @foreach( $team->tasks as $task )
                <li>
                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('teams.tasks.destroy', $team->slug, $task->slug))) !!}
                        <a href="{{ route('teams.tasks.show', [$team->slug, $task->slug]) }}">{{ $task->name }}</a>
                        (
                            {!! link_to_route('teams.tasks.edit', 'Edit', array($team->slug, $task->slug), array('class' => 'btn btn-info')) !!},

                            {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                        )
                    {!! Form::close() !!}
                </li>
            @endforeach
        </ul>
    @endif

    <p>
    	{!! link_to_route('teams.index', 'Back to Teams') !!} |
        {!! link_to_route('teams.tasks.create', 'Create Task', $team->slug) !!}
    </p>
@endsection