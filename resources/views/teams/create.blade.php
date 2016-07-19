@extends('app')

@section('content')
    <h2>Create Team</h2>

    {!! Form::model(new App\Team, ['route' => ['teams.store']]) !!}
        @include('teams/partials/_form', ['submit_text' => 'Create Team'])
    {!! link_to_route('teams.index', 'Back to Teams') !!}
    {!! Form::close() !!}
@endsection