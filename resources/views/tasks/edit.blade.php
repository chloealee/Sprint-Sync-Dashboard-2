@extends('app')

@section('content')
    <h2 class="heading -emphasized">Edit Task "{{ $task->name }}"</h2>

    <div class="body">
    	<div class="form">
		    {!! Form::model($task, ['method' => 'PATCH', 'route' => ['teams.tasks.update', $team->slug, $task->slug]]) !!}
		        @include('tasks/partials/_form', ['submit_text' => 'Edit Task'])
		    {!! Form::close() !!}
	    </div>

	    <div class="options">
	    	{!! link_to_route('teams.show', 'Back to ' . $team->name, [$team->slug], ['class'=>'button -tertiary']) !!}
	    </div>
	</div>
@endsection