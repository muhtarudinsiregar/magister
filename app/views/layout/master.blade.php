<!DOCTYPE html>
<html>
<head>
	<meta name="_token" content="{{ csrf_token() }}" />
	<meta name="csrf-param" content="_token" />
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery.ui.all.css" type="text/css" media="screen">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
	<title>Home</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<nav class="navbar navbar-default navbar-img" role="navigation">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand brand-custom" href=""><img src="{{ asset('images/logofulls2.png') }}" alt=""></a>
					</div>
				</nav>
			</div>
			<div class="col-lg-12">
				<nav class="navbar navbar-default" role="navigation">

					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<a class="navbar-brand">{{-- <p class="p-custom">Magister</p> --}}</a>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li><a class="no-hand" onClick="return false" href="{{ url ('beranda')}}">Beranda</a></li>
							<li><a class="no-hand" onClick="return false" href="{{ url ('programstudi')}}">Program Studi</a></li>
							<li><a class="no-hand" onClick="return false" href="{{ url('data-pribadi')}}">Data Pribadi</a></li>
							<li><a class="no-hand" onClick="return false" href="{{ url('pendidikan')}}">Pendidikan</a></li>
							<li><a class="no-hand" onClick="return false" href="{{ url('pekerjaan')}}">Pekerjaan</a></li>
							<li><a class="no-hand" onClick="return false" href="{{ url('pendanaan')}}">Pendanaan</a></li>
							<li><a class="no-hand" onClick="return false" href="{{ url('kontak')}}">Kontak</a></li>
							<li><a class="no-hand" onClick="return false" href="{{ url('jadwal')}}">Jadwal Tes</a></li>
							<li><a class="no-hand" onClick="return false" href="{{ url('pernyataan')}}">Pernyataan</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</nav>
			</div>
		</div>
		<div class="row">
			@yield('content')
		</div>
	</div>
	<script src="{{ asset('js/jquery.js') }}"></script>
	<script src="{{ asset('js/jquery-ui.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/jquery.chained.min.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>
	<script src="{{ asset('js/intercooler-0.9.0.min.js') }}"></script>
		@yield('script')
</body>
</html>	