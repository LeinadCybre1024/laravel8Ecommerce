<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
	<title>@yield('title')</title>
	<style type="text/css">
		
	.custom-login
	{
		padding-top: 100px;
		height: 500px;
	}
</style>
</head>
<body>
	@include('partials.navbar')
    @yield('content')
    @include('partials.footer')
</body>
</html>