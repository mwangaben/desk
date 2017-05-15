<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'Chess More')</title>
	<link rel="stylesheet" href="/css/app.css">
	<link rel="stylesheet" href="/css/template.css">
</head>
<body>
   @include('layouts.nav')
	<div class="container">
	  <div class=" wrapper">
		@yield('content')
    @include('layouts.sidebar')
	  </div>
	</div>
	<script src="/js/app.js"></script>
</body>
</html>