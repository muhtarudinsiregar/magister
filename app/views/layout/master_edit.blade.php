<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery.ui.all.css" type="text/css" media="screen">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<title>Home</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<nav class="navbar navbar-default navbar-inverse" role="navigation">

					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">EDIT PAGE</a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li><a href="{{ url ('berandas/'.Auth::id().'/edit')}}">Beranda</a></li>
							<li><a href="{{ url ('programstudis/'.Auth::id().'/edit')}}">Program Studi</a></li>
							<li><a href="{{ url('datapribadis/'.Auth::id().'/edit')}}">Data Pribadi</a></li>
							<li><a href="{{ url('pendidikans/'.Auth::id().'/edit')}}">Pendidikan</a></li>
							<li><a href="{{ url('pekerjaans/'.Auth::id().'/edit')}}">Pekerjaan</a></li>
							<li><a href="{{ url('pendanaans/'.Auth::id().'/edit')}}">Pendanaan</a></li>
							<li><a href="{{ url('kontaks/'.Auth::id().'/edit')}}">Kontak</a></li>
							<li><a href="{{ url('jadwals/'.Auth::id().'/edit')}}">Jadwal Tes</a></li>
							<li><a href="{{ url('pernyataans/'.Auth::id().'/edit')}}">Pernyataan</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li class="divider"></li>
									<li><a href="#">Separated link</a></li>
								</ul>
							</li>
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
	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/jquery.chained.min.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>
		@yield('script')
</body>
</html>	