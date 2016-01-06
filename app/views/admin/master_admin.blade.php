<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admisi PPS</title>

	<meta name="_token" content="{{ csrf_token() }}" />
	<meta name="csrf-param" content="_token" />
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery.ui.all.css" type="text/css" media="screen">
	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('css/styles_admin.css') }}">
	<link rel="stylesheet" href="{{ asset('css/jquery-ui-timepicker-addon.css') }}">
	<link href="{{ asset('bootstrap3-editable/css/bootstrap-editable.css') }}" rel="stylesheet">


<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>Lumino</span>Admin</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> {{ Auth::user()->username }} <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
							<li><a href="{{url('users/'.Auth::id().'/edit')}}"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
							<li><a href="{{url('logout')}}"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>

		</div><!-- /.container-fluid -->
	</nav>

	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
		</form>
		<ul class="nav menu">
			<li><a href="{{url('dashboard')}}"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>
			<li><a href="{{url('studi')}}"><span class="glyphicon glyphicon-education"></span> Program Studi</a></li>
			<li><a href="{{url('konsentrasi')}}"><span class="glyphicon glyphicon-th"></span> Konsentrasi</a></li>
			<li><a href="{{url('sesites')}}"><span class="glyphicon glyphicon-time"></span> Sesi Tes</a></li>
			<li><a href="{{url('tahungelombang')}}"><span class="glyphicon glyphicon-calendar"></span> Tahun Gelombang</a></li>
			<li><a href="{{url('users')}}"><span class="glyphicon glyphicon-user"></span> User Admin</a></li>
			<li role="presentation" class="divider"></li>
		</ul>
	</div><!--/.sidebar-->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li class="active">{{$title}}</li>
			</ol>
		</div><!--/.row-->
		@yield('content')	
	</div>	<!--/.main-->

	<script src="{{ asset('js/jquery.js') }}"></script>
	<script src="{{ asset('js/jquery-ui.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/jquery.chained.min.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>
	<script src="{{ asset('js/jquery-ui-timepicker-addon.js') }}"></script>
	<script src="{{ asset('bootstrap3-editable/js/bootstrap-editable.js') }}"></script>

	<script>
		$('#calendar').datepicker({
		});

		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){          
				$(this).find('em:first').toggleClass("glyphicon-minus");      
			}); 
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
			if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
			if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>
	@yield('script')	
</body>

</html>
