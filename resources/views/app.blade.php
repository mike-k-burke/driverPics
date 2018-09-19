<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>List Loads</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
	<script src="{{ asset('js/jquery.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</head>
<body>
	@include('includes.navbar')
	<div class="container">
		@yield('content')
	</div><!--.container-->
	@yield('javascript')
</body>
</html>