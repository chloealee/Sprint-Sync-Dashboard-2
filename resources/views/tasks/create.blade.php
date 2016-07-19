@extends('app')

@section('content')
    <h2>Create Task for Team "{{ $team->name }}"</h2>

    {!! Form::model(new App\Task, ['route' => ['teams.tasks.store', $team->slug], 'class'=>'']) !!}
        @include('tasks/partials/_form', ['submit_text' => 'Create Task'])
    	{!! link_to_route('teams.show', 'Back to ' . $team->name . ' tasks', [$team->slug]) !!}
    {!! Form::close() !!}
@endsection