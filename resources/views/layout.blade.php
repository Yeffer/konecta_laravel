<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<script src="/js/app.js" defer></script>
</head>
<body>
	@include('partials.nav')
	@yield('content')
</body>
</html>