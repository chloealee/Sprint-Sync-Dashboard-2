@extends('app')

@section('content')
    <h2 class="heading -emphasized">
        {{ $team->name }} - {{ $task->name }}
    </h2>

    <div class="body">
	    <p>{{ $task->description }}<p>

	    <div class="options">
	    	{!! link_to_route('teams.show', 'Back to ' . $team->name, [$team->slug], ['class'=>'button -tertiary']) !!}
	    </div>
	</div>
@endsection