@extends('app')

@section('content')
    <h2 class="heading -emphasized">{{ $team->name }}</h2>

    <div class="body">
        @if ( !$team->tasks->count() )
            Your team has no tasks.
        @else
            <ul>
                @foreach( $team->tasks as $task )
                    <li>
                        {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('teams.tasks.destroy', $team->slug, $task->slug))) !!}
                            <a href="{{ route('teams.tasks.show', [$team->slug, $task->slug]) }}">{{ $task->name }}</a>
                                {!! link_to_route('teams.tasks.edit', 'Edit', array($team->slug, $task->slug), ['class'=> 'button -tertiary']) !!}
                                {!! Form::submit('Delete', ['class' => 'button -tertiary']) !!}
                        {!! Form::close() !!}
                    </li>
                @endforeach
            </ul>
        @endif
        <div class="options">
            <ul>
                <li>{!! link_to_route('teams.index', 'Back to Teams', [], ['class'=>'button -tertiary']) !!} </li>

                <li id="options-right-align">{!! link_to_route('teams.tasks.create', 'Create Task', $team->slug, ['class'=>'button -tertiary']) !!}</li>
            </ul>
        </div>
    </div>

@endsection