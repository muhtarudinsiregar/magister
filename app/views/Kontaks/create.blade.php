@extends('layout.master')
@section('content')
<div class="col-lg-12">
	<div class="col-lg-10 col-lg-offset-1">
		<form action="{{ url('kontak')}}" method="POST" class="form-horizontal" role="form">
			<div class="form-group">
				<h4><strong>Langkah 6 : Kontak Darurat</strong></h4>
				<?php if ($errors->has()): ?>
					<div class="alert alert-danger">
						<ul class="square">
							<?php foreach ($errors->all() as $error): ?>
								<li><?php echo $error; ?></li>
							<?php endforeach ?>
						</ul>
					</div>
				<?php endif ?>
			</div>
			<div class="form-group">
				<label for="" class="col-sm-6 i-custom control-label"><i>Bilamana terjadi keadaan darurat dengan anda, siapakah yang harus kami hubungi?</i></label>
			</div>
			<div class="form-group">
				<label for="" class="col-sm-2 control-label">Nama*</label>
				<div class="col-sm-4">
					<input type="text" name="nama" id="input" class="form-control" required="required" value="{{Input::old('nama')}}">
				</div>
			</div>
			<div class="form-group">	
				<label for="input" class="col-sm-2 control-label">Hubungan *</label>
				<div class="col-sm-3">
					<select name="hubungan" id="input" class="form-control" required="required">
						<option value="">--</option>
						@foreach ($hub as $element)
						<option value="{{$element->id}}" 
							<?php if(Input::old('hubungan')== $element->id) { echo 'selected="selected"'; } ?>
						>{{$element->hubungan}}</option>
						@endforeach
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="" class="col-sm-2 control-label">Alamat* </label>
				<div class="col-sm-4">
					<input type="text" name="alamat" id="input" class="form-control" required="required" value="{{Input::old('alamat')}}">
				</div>
			</div>
			<div class="form-group">
				<label for="" class="col-sm-2 control-label">Kabupaten/kota* </label>
				<div class="col-sm-4">
					<input type="text" name="kotakab" id="input" class="form-control" required="required" value="{{Input::old('kotakab')}}">
				</div>
			</div>
			<div class="form-group">
				<label for="" class="col-sm-2 control-label">Propinsi* </label>
				<div class="col-sm-4">
					<input type="text" name="propinsi" id="input" class="form-control" required="required" value="{{Input::old('propinsi')}}">
				</div>
			</div>
			<div class="form-group">
				<label for="" class="col-sm-2 control-label">Negara* </label>
				<div class="col-sm-4">
					<input type="text" name="negara" id="input" class="form-control" required="required" value="Indonesia">
				</div>
			</div>
			<div class="form-group">
				<label for="" class="col-sm-2 control-label">No. telepon* </label>
				<div class="col-sm-4">
					<input type="text" name="noTelepon" id="input" class="form-control" required="required" value="{{Input::old('noTelepon')}}">
				</div>
			</div>
			<div class="form-group">
				<label for="" class="col-sm-2 control-label">Email </label>
				<div class="col-sm-4">
					<input type="email" name="email" id="input" class="form-control" value="{{Input::old('email')}}">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-9 col-sm-3">
					<a href="{{url('pendanaan')}}" class="btn btn-default">Sebelumnya</a>
					<button type="submit" class="btn btn-default">Berikutnya</button>
				</div>
			</div>
		</form>
	</div>
</div>
@stop
