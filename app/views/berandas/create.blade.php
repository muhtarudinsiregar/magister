@extends('layout.master')
@section('content')
<div class="col-lg-12">
	<div class="col-lg-10 col-lg-offset-1">
		<div class="row">
			<div class="col-lg-8">
			@if (Session::has('notif'))
				<div class="alert alert-warning">
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
@stop