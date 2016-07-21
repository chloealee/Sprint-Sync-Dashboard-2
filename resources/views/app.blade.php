<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sprint Sync Dashboard</title>

	<link rel="stylesheet" href="{{ asset('vendor/forge/forge.css') }}" media="screen, projection" type="text/css">
	<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
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
	<script type="text/javascript" src="dist/forge.js"></script>
</body>
</html>
