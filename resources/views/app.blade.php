<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sprint Sync Dashboard</title>

	<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">

	<link rel="stylesheet" href="dist/forge.css" media="screen, projection" type="text/css">

<!--
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"> -->

	<!-- Fonts -->
	<style>
      @font-face {
          font-family: 'Proxima Nova';
          src: url('fonts/ProximaNova-Bold.otf') format('opentype');
      }
      @font-face {
          font-family: 'Covered By Your Grace';
          src: url('fonts/CoveredByYourGrace.ttf') format('truetype');
      }
    </style>
</head>
<body>
	<div class="container">
		@if (Session::has('message'))
			<div class="flash alert-info">
				<p>{{ Session::get('message') }}</p>
			</div>
		@endif
		@if ($errors->any())
			<div class='flash alert-danger'>
				@foreach ( $errors->all() as $error )
					<p>{{ $error }}</p>
				@endforeach
			</div>
		@endif

		@yield('content')
	</div>

	<!-- Scripts -->
<!-- 	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script> -->
	<script type="text/javascript" src="dist/forge.js"></script>
</body>
</html>
