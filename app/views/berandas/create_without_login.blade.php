@extends('layout.master')
@section('content')
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
	</div>
</div>
@stop