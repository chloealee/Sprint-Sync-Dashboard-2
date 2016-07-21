@extends('app')

@section('content')
    <h2 class="heading -emphasized">Create Task for Team {{ $team->name }}</h2>

    <div class="body">
    	<div class="form">
		    {!! Form::model(new App\Task, ['route' => ['teams.tasks.store', $team->slug], 'class'=>'']) !!}
		        @include('tasks/partials/_form', ['submit_text' => 'Create Task'])

		        <div class="options">
		    		{!! link_to_route('teams.show', 'Back to ' . $team->name . ' tasks', [$team->slug], ['class'=>'button -tertiary']) !!}
		    	</div>
		    {!! Form::close() !!}
    	</div>
    </div>
@endsection