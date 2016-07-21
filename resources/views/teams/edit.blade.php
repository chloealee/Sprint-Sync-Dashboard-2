@extends('app')

@section('content')
    <h2 class="heading -emphasized">Edit {{ $team->name }}</h2>

    {!! Form::model($team, ['method' => 'PATCH', 'route' => ['teams.update', $team->slug]]) !!}
        @include('teams/partials/_form', ['submit_text' => 'Edit ' . $team->name])
    {!! Form::close() !!}

   	<div class="body">
	   	<div class="options">
		    {!! link_to_route('teams.index', 'Back to Teams', array(), array('class' => 'button -tertiary')) !!}
		</div>
	</div>
@endsection