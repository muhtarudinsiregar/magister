<!DOCTYPE html>
<html>
<head>
	<title>Wizard With Disabled Tab Click</title>
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.0/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>
<body>
	<div class='container'>
		<section id="wizard">
			<div class="page-header">
				<h1>Wizard With Disabled Tab Click</h1>
			</div>
			<div id="rootwizard">
				<div class="navbar navbar-default">
					<div class="collapse navbar-collapse">
						<div class="container">
							<ul class="nav navbar-nav">
								<li><a href="#tab1" data-toggle="tab">First</a></li>
								<li><a href="#tab2" data-toggle="tab">Second</a></li>
								<li><a href="#tab3" data-toggle="tab">Third</a></li>
								<li><a href="#tab4" data-toggle="tab">Forth</a></li>
								<li><a href="#tab5" data-toggle="tab">Fifth</a></li>
								<li><a href="#tab6" data-toggle="tab">Sixth</a></li>
								<li><a href="#tab7" data-toggle="tab">Seventh</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="tab-content">
					<div class="tab-pane" id="tab1">
						@include('pendaftaran.data_pribadi')
					</div>
					<div class="tab-pane" id="tab2">
						2
					</div>
					<div class="tab-pane" id="tab3">
						3
					</div>
					<div class="tab-pane" id="tab4">
						4
					</div>
					<div class="tab-pane" id="tab5">
						5
					</div>
					<div class="tab-pane" id="tab6">
						6
					</div>
					<div class="tab-pane" id="tab7">
						7
					</div>
					<ul class="pager wizard">
						<li class="previous first" style="display:none;"><a href="#">First</a></li>
						<li class="previous"><a href="#">Previous</a></li>
						<li class="next last" style="display:none;"><a href="#">Last</a></li>
						<li class="next"><a href="#">Next</a></li>
					</ul>
				</div>
			</div>
			<h3>HTML</h3>
		</section>
	</div>
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="{{ asset('js/jquery.bootstrap.wizard.min.js') }}"></script>
	<script>
		$(document).ready(function() {
			$('#rootwizard').bootstrapWizard({onTabClick: function(tab, navigation, index) {
				alert('on tab click disabled');
				return false;
			}});
		});
	</script>
</body>
</html>
