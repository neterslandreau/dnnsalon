<html lang="{{ config('app.locale') }}">
  <head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>{{ config('app.name', 'Laravel') }}</title>

	<link href="/css/app.css" rel="stylesheet">

	<script>
		window.Laravel = {!! json_encode([
			'csrfToken' => csrf_token(),
		]) !!};
	</script>


	<link href="/css/app.css" rel="stylesheet">

	<link href="/css/modern-business.css" rel="stylesheet">

	<link href="/css/font-awesome.css" rel="stylesheet" type="text/css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body>
	<div id="app"></div>

	@include('partials.nav')

	@yield('content')

	<script src="/js/app.js"></script>
</body>

</html>