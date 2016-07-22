@extends('app')

@section('content')
    <h2 class="heading -emphasized">{{ $team->name }}</h2>
    <h2 class="heading -beta">Team Members:</h2>
    <div class="body">
        @if ( $team->slug == "northstar" )
            <ul class="gallery -quartet">
                <li>
                    <div class="avatar">
                        <img src={{asset('images/dave.png')}}>
                    </div>
                </li>
                <li>
                    <div class="avatar">
                        <img src={{asset('images/morgan.png')}}>
                    </div>
                </li>
            </ul>
        @elseif ( $team->slug == "mobile-app" )
            <ul class="gallery -quartet">
                <li>
                    <div class="avatar">
                        <img src={{asset('images/luke.png')}}>
                    </div>
                </li>
                <li>
                    <div class="avatar">
                        <img src={{asset('images/aaron.png')}}>
                    </div>
                </li>
            </ul>
        @elseif ( $team->slug == "sms" )
            <ul class="gallery -quartet">
                <li>
                    <div class="avatar">
                        <img src={{asset('images/james.png')}}>
                    </div>
                </li>
                <li>
                    <div class="avatar">
                        <img src={{asset('images/morgan.png')}}>
                    </div>
                </li>
            </ul>
        @elseif ( $team->slug == "onboarding" )
            <ul class="gallery -quartet">
                <li>
                    <div class="avatar">
                        <img src={{asset('images/jess.png')}}>
                    </div>
                </li>
                <li>
                    <div class="avatar">
                        <img src={{asset('images/andrea.png')}}>
                    </div>
                </li>
                <li>
                    <div class="avatar">
                        <img src={{asset('images/diego.png')}}>
                    </div>
                </li>
                <li>
                    <div class="avatar">
                        <img src={{asset('images/joe.png')}}>
                    </div>
                </li>
                <li>
                    <div class="avatar">
                        <img src={{asset('images/katie.png')}}>
                    </div>
                </li>
                <li>
                    <div class="avatar">
                        <img src={{asset('images/shae.png')}}>
                    </div>
                </li>
                <li>
                    <div class="avatar">
                        <img src={{asset('images/luke.png')}}>
                    </div>
                </li>
            </ul>
        @elseif ( $team->slug == "organ-donation" )
            <ul class="gallery -quartet">
                 <li>
                    <div class="avatar">
                        <img src={{asset('images/jen.png')}}>
                    </div>
                </li>
                <li>
                    <div class="avatar">
                        <img src={{asset('images/katie.png')}}>
                    </div>
                </li>
               <li>
                    <div class="avatar">
                        <img src={{asset('images/shae.png')}}>
                    </div>
                </li>
                <li>
                    <div class="avatar">
                        <img src={{asset('images/andrea.png')}}>
                    </div>
                </li>
            </ul>
        @elseif ( $team->slug == "ops" )
            <ul class="gallery -quartet">
                <li>
                    <div class="avatar">
                        <img src={{asset('images/morgan.png')}}>
                    </div>
                </li>
                <li>
                    <div class="avatar">
                        <img src={{asset('images/sergii.png')}}>
                    </div>
                </li>
               <li>
                    <div class="avatar">
                        <img src={{asset('images/sena.png')}}>
                    </div>
                </li>
                <li>
                    <div class="avatar">
                        <img src={{asset('images/matt.png')}}>
                    </div>
                </li>
                <li>
                    <div class="avatar">
                        <img src={{asset('images/katie.png')}}>
                    </div>
                </li>
            </ul>
            @elseif ( $team->slug == "quicksilver" )
            <ul class="gallery -quartet">
                <li>
                    <div class="avatar">
                        <img src={{asset('images/kika.png')}}>
                    </div>
                </li>
                <li>
                    <div class="avatar">
                        <img src={{asset('images/dee.png')}}>
                    </div>
                </li>
               <li>
                    <div class="avatar">
                        <img src={{asset('images/sergii.png')}}>
                    </div>
                </li>
                <li>
                    <div class="avatar">
                        <img src={{asset('images/matt.png')}}>
                    </div>
                </li>
                <li>
                    <div class="avatar">
                        <img src={{asset('images/james.png')}}>
                    </div>
                </li>
            </ul>
            @elseif ( $team->slug == "longshot" )
            <ul class="gallery -quartet">
                <li>
                    <div class="avatar">
                        <img src={{asset('images/andrea.png')}}>
                    </div>
                </li>
                <li>
                    <div class="avatar">
                        <img src={{asset('images/katie.png')}}>
                    </div>
                </li>
               <li>
                    <div class="avatar">
                        <img src={{asset('images/luke.png')}}>
                    </div>
                </li>
            </ul>
            @elseif ( $team->slug == "quasar" )
            <ul class="gallery -quartet">
                <li>
                    <div class="avatar">
                        <img src={{asset('images/jess.png')}}>
                    </div>
                </li>
                <li>
                    <div class="avatar">
                        <img src={{asset('images/sena.png')}}>
                    </div>
                </li>
               <li>
                    <div class="avatar">
                        <img src={{asset('images/dave.png')}}>
                    </div>
                </li>
               <li>
                    <div class="avatar">
                        <img src={{asset('images/jeff.png')}}>
                    </div>
                </li>
            </ul>
        @endif
    </div>

    <h2 class="heading -beta">Tasks:</h2>
    <div class="body">
        @if ( !$team->tasks->count() )
            <p>Your team has no tasks.<p>
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