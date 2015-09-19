<!DOCTYPE html>
<html>
<head>
	<title>Basic Pills Example</title>
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery.ui.all.css" type="text/css" media="screen">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
	<div class='col-lg-12'>
		<section id="wizard">
			<div class="page-header">
				<h1>Wizard With Disabled Tab Click</h1>
			</div>
			<div id="rootwizard">
				<div class="navbar navbar-default">
					<div class="collapse navbar-collapse">
						<div class="container">
							<ul class="nav navbar-nav">
								{{-- <li><a href="#tab1" data-toggle="tab">First</a></li>
								<li><a href="#tab2" data-toggle="tab">Second</a></li>
								<li><a href="#tab3" data-toggle="tab">Third</a></li>
								<li><a href="#tab4" data-toggle="tab">Forth</a></li>
								<li><a href="#tab5" data-toggle="tab">Fifth</a></li>
								<li><a href="#tab6" data-toggle="tab">Sixth</a></li>
								<li><a href="#tab7" data-toggle="tab">Seventh</a></li> --}}
							</ul>
						</div>
					</div>
				</div>
				<div class="tab-content">
					<div class="tab-pane" id="tab1">

					</div>
					<div class="tab-pane" id="tab2">
						
					</div>
					<div class="tab-pane" id="tab3">
						<div class="col-lg-12">
							<div class="col-lg-10 col-lg-offset-1">
								<form action="{{ url('pendidikan') }}" method="POST" class="form-horizontal" role="form">
									<div class="form-group">
										<h4><strong>Langkah 3 : Pendidikan Sebelumnya</strong></h4>
									</div>
									
									<div class="form-group">
										<label for="program" class="col-sm-2 control-label">Jenjang *</label>
										<div class="col-sm-4">
											<label class="radio-inline">
												<input type="radio" name="jnjg" id="inlineRadio1" value="S1"> S1
											</label>
											<label for="" class="radio-inline">
												<input type="radio" name="jnjg" id="inlineRadio1" value="D4"> D4
											</label>
										</div>
									</div>
									
									<div class="form-group">
										<label for="tahun_akademik" class="col-sm-2 control-label">Program Studi* </label>
										<div class="col-sm-4">
											<input type="text" name="prgrmstd" id="input" class="form-control" required="required">
										</div>
									</div>
									
									<div class="form-group">
										<label for="tahun_akademik" class="col-sm-2 control-label">Akreditasi * </label>
										<div class="col-sm-2">
											<select name="akrdts" id="input" class="form-control" required="required">
												@foreach ($akreditasi as $element)
												<option value="{{ $element->id }}">{{ $element->akreditasi }}</option>
												@endforeach
											</select>
										</div>
									</div>

									<div class="form-group">
										<label for="tahun_akademik" class="col-sm-2 control-label">Perguruan Tinggi* </label>
										<div class="col-sm-4">
											<input type="text" name="pt" id="input" class="form-control" required="required">
										</div>
									</div>

									<div class="form-group">
										<label for="tahun_akademik" class="col-sm-2 control-label">Tahun masuk* </label>
										<div class="col-sm-2">
											<input type="text" name="thmsk" id="input" class="form-control" required="required">
										</div>
									</div>
									<div class="form-group">
										<label for="tahun_akademik" class="col-sm-2 control-label">Tahun lulus* </label>
										<div class="col-sm-2">
											<input type="text" name="thlls" id="input" class="form-control" required="required">
										</div>
									</div>
									
									<div class="form-group">
										<label for="tahun_akademik" class="col-sm-2 control-label">No. ijazah  </label>
										<div class="col-sm-4">
											<input type="text" name="noijzh" id="input" class="form-control" required="required">
										</div>
									</div>
									<div class="form-group">
										<label for="tahun_akademik" class="col-sm-2 control-label">IPK* </label>
										<div class="col-sm-2">
											<input type="text" name="ipk" id="input" class="form-control" required="required">
										</div>
										<label for="tahun_akademik" class="col-sm-1 control-label">Skala* </label>
										<div class="col-sm-2">
											<input type="text" name="skala" id="input" class="form-control" required="required" value="4">
										</div>
									</div>

									<hr>

									<div class="form-group">
										<label for="" class="col-sm-4 control-label	i-custom">Keanggotaan asosiasi profesi (jika ada)</label>
									</div>

									<div id="profesi">
										<div class="form-group">
											<label for="tahun_akademik" class="col-sm-1 control-label" id="">Asosiasi</label>
											<div class="col-sm-3">
												<input type="text" name="asosiasi[]" id="input" class="form-control" id="asosiasi">
											</div>
											<label for="tahun_akademik" class="col-sm-2 control-label">No. anggota  </label>
											<div class="col-sm-2" id="no_anggota">
												<input type="text" name="no_anggota[]" id="input" class="form-control" id="no_anggota">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-3">
											<button type="button" class="btn btn-primary" id="tambahProfesi">Tambah Profesi </button>
										</div>
									</div>

									{{-- ==============================================BUTTON ============================================= --}}
									<div class="form-group">
										<div class="col-sm-offset-9 col-sm-3">
											{{-- <button type="submit" class="btn btn-default">Sebelumnya </button> --}}
											<button type="button" class="btn btn-default" onClick="history.go(-1)">Sebelumnya </button>
											<button type="submit" class="btn btn-default">Berikutnya</button>
										</div>
									</div>
								</form>
							</div>
						</div>
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
			{{-- <h3>HTMLasasas</h3> --}}
			<div class="col-lg-12">
				<div class="col-lg-10 col-lg-offset-1">
					<div class="row">
						<div class="col-lg-8">
							@if (Session::has('notif'))
							<div class="alert alert-danger">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<strong>{{ Session::get('notif')}}!</strong>
							</div>
							@endif

						</div>
					</div>
					<div class="row">
						<div class="col-lg-8">
							<h4><strong>Selamat datang.</strong></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-8">
							<p>Berikut ini adalah formulir online pendaftaran mahasiswa baru Program Pascasarjana Fakultas Teknologi Industri Universitas Islam Indonesia.</p>
						</div>
					</div>
					<br>
					<br>
					<div class="row">
						<div class="col-lg-2">
							<p>Data pendaftar baru </p>
						</div>
						<div class="col-lg-offset-3 col-lg-2">
							<a href="programstudi" class="btn btn-default">Mulai Pendaftar Baru</a>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-lg-6">
							<form action="{{url('beranda')}}" method="POST" class="form-horizontal" role="form">
								<div class="form-group">
									<label for="tahun_akademik" class="col-sm-2 control-label">Email </label>
									<div class="col-sm-8">
										<input type="text" name="mail" id="input" class="form-control" required="required">
									</div>
								</div>

								<div class="form-group">
									<label for="tahun_akademik" class="col-sm-2 control-label">Pin </label>
									<div class="col-sm-4">
										<input type="password" name="passwd" id="input" class="form-control" required="required">
									</div>
									<div class="col-lg-offset-4 col-lg-2">
										<button type="submit" class="btn btn-default">Edit data pendaftaran</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</body>
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/jquery-ui.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.chained.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/jquery.bootstrap.wizard.min.js') }}"></script>
<script>
$(document).ready(function() {
$('#rootwizard').bootstrapWizard({onTabClick: function(tab, navigation, index) {
			alert('on tab click disabled');
			return false;
		}});
});

	
</script>
</html>
