@extends('app')

@section('content')
    <h2>Edit Team</h2>

    {!! Form::model($team, ['method' => 'PATCH', 'route' => ['teams.update', $team->slug]]) !!}
        @include('teams/partials/_form', ['submit_text' => 'Edit Team'])
    {!! Form::close() !!}
@endsection