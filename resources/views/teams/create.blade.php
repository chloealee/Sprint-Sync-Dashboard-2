@extends('app')

@section('content')
    <h2 class="heading -emphasized">Create Team</h2>

    {!! Form::model(new App\Team, ['route' => ['teams.store']]) !!}
        @include('teams/partials/_form', ['submit_text' => 'Create Team'])

    <div class="body">
	    {!! link_to_route('teams.index', 'Back to Teams', array(), array('class' => 'button -tertiary')) !!}
    </div>

    {!! Form::close() !!}
@endsection