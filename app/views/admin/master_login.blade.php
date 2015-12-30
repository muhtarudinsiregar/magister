<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>

	<meta name="_token" content="{{ csrf_token() }}" />
	<meta name="csrf-param" content="_token" />
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery.ui.all.css" type="text/css" media="screen">
	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('css/styles_admin.css') }}">
	<link rel="stylesheet" href="{{ asset('css/jquery-ui-timepicker-addon.css') }}">
	<link href="{{ asset('bootstrap3-editable/css/bootstrap-editable.css') }}" rel="stylesheet">
	<style>
	body{
		background-color: #367591;
	}
	</style>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>
<body>
	@yield('content')
	<script src="{{ asset('js/jquery.js') }}"></script>
	<script src="{{ asset('js/jquery-ui.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>