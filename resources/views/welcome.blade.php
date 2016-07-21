<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sprint Sync Planner</title>

  <link rel="stylesheet" href="{{ asset('vendor/forge/forge.css') }}" media="screen, projection" type="text/css">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
  <div class="welcome">
    <h1 class="heading -hero">DoSomething.org Sprint Sync Planner</h1>

    <h3>A summary of teams and work per sprint.</h3>

    <ul class="gallery -quartet" id="padding-top">
      <li>
        <figure class="polaroid">
          <img src={{asset('images/aaron.png')}}>
        </figure>
      </li>

      <li>
        <figure class="polaroid">
          <img src={{asset('images/andrea.png')}}>
        </figure>
      </li>

      <li>
        <figure class="polaroid">
          <img src={{asset('images/chloe.png')}}>
        </figure>
      </li>

      <li>
        <figure class="polaroid">
          <img src={{asset('images/dave.png')}}>
        </figure>
      </li>

      <li>
        <figure class="polaroid">
          <img src={{asset('images/dee.png')}}>
        </figure>
      </li>

      <li>
        <figure class="polaroid">
          <img src={{asset('images/diego.png')}}>
        </figure>
      </li>

      <li>
        <figure class="polaroid">
          <img src={{asset('images/fantini.png')}}>
        </figure>
      </li>

      <li>
        <figure class="polaroid">
          <img src={{asset('images/freddie.png')}}>
        </figure>
      </li>

      <li>
        <figure class="polaroid">
          <img src={{asset('images/james.png')}}>
        </figure>
      </li>

      <li>
        <figure class="polaroid">
          <img src={{asset('images/jeff.png')}}>
        </figure>
      </li>

      <li>
        <figure class="polaroid">
          <img src={{asset('images/jen.png')}}>
        </figure>
      </li>

      <li>
        <figure class="polaroid">
          <img src={{asset('images/jess.png')}}>
        </figure>
      </li>

      <li>
        <figure class="polaroid">
          <img src={{asset('images/luke.png')}}>
        </figure>
      </li>

      <li>
        <figure class="polaroid">
          <img src={{asset('images/joe.png')}}>
        </figure>
      </li>

      <li>
        <figure class="polaroid">
          <img src={{asset('images/katie.png')}}>
        </figure>
      </li>

      <li>
        <figure class="polaroid">
          <img src={{asset('images/kika.png')}}>
        </figure>
      </li>

      <li>
        <figure class="polaroid">
          <img src={{asset('images/matt.png')}}>
        </figure>
      </li>

      <li>
        <figure class="polaroid">
          <img src={{asset('images/morgan.png')}}>
        </figure>
      </li>

      <li>
        <figure class="polaroid">
          <img src={{asset('images/nami.png')}}>
        </figure>
      </li>

      <li>
        <figure class="polaroid">
          <img src={{asset('images/nick.png')}}>
        </figure>
      </li>

      <li>
        <figure class="polaroid">
          <img src={{asset('images/sena.png')}}>
        </figure>
      </li>

      <li>
        <figure class="polaroid">
          <img src={{asset('images/sergii.png')}}>
        </figure>
      </li>

      <li>
        <figure class="polaroid">
          <img src={{asset('images/shae.png')}}>
        </figure>
      </li>
    </ul>

    <div class="right-align">
      {!! link_to_route('teams.index', "Let's Go!", []) !!}
    </div>
  </div>
</body>
</html>
