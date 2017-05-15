<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="/css/app.css">
	<style>
		.hero{
			background: blue;
			height: 100px;
		}
	</style>
</head>
<body>
	<div class="hero">
		
	</div>
	<div class="container">
		@include('layouts.nav')

		@yield('content')

		@include('layouts.footer')
	</div>
	<script src="/js/app.js"></script>
</body>
</html>