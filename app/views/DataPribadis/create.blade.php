@extends('layout.master')
@section('content')
@if (Session::has('validator'))
	{{ $validator }}
@endif
<div class="col-lg-12">
	<div class="col-lg-10 col-lg-offset-1">
		<form action="{{ url('data-pribadi') }}" method="POST" class="form-horizontal" role="form">
			<div class="form-group">
				<h4><strong>Langkah 2 : Data Pribadi</strong></h4>
			</div>
			<?php if ($errors->has()): ?>
					<div class="alert alert-danger">
					<ul class="square">
						<?php foreach ($errors->all() as $error): ?>
							<li><?php echo $error; ?></li>
						<?php endforeach ?>
					</ul>
				</div>
			<?php endif ?>
			{{--================================Data Pribadi===================================================  --}}
			<div class="form-group">
				<label for="tahun_akademik" class="col-sm-2 control-label">Email* </label>
				<div class="col-sm-4">
					<input type="text" name="mail" id="input" class="form-control" required="required">
				</div>
				<label for="tahun_akademik" class="col-sm-5 control-label i-custom"><i>Email digunakan untuk login ke sistem ini</i></label>
			</div>

			<div class="form-group">
				<label for="tahun_akademik" class="col-sm-2 control-label">Pin* </label>
				<div class="col-sm-3">
					<input type="password" name="pin" id="input" class="form-control" required="required">
				</div>
				<label for="tahun_akademik" class="col-sm-2 col-sm-offset-1 control-label i-custom"><i>Angka 4 digit</i></label>
			</div>

			<div class="form-group">
				<label for="tahun_akademik" class="col-sm-2 control-label">Nama* </label>
				<div class="col-sm-4">
					<input type="text" name="nm" id="input" class="form-control" required="required">
				</div>
			</div>

			<div class="form-group">
				<label for="tahun_akademik" class="col-sm-2 control-label">Tempat Lahir* </label>
				<div class="col-sm-4">
					<input type="text" name="tlhr" id="input" class="form-control" required="required">
				</div>
			</div>

			<div class="form-group">
				<label for="tahun_akademik" class="col-sm-2 control-label">Tanggal Lahir* </label>
				<div class="col-sm-4">
					<input type="text" name="tglhr" id="datepicker" class="form-control" required="required">
				</div>
			</div>

			<div class="form-group">
				<label for="program" class="col-sm-2 control-label">Jenis Kelamin</label>
				<div class="col-sm-4">
					<label class="radio-inline">
						<input type="radio" name="jenisK" value="Pria" checked="checked"> Pria
					</label>
					<label for="" class="radio-inline">
						<input type="radio" name="jenisK" value="Wanita"> Wanita
					</label>
				</div>
			</div>

			<div class="form-group">
				<label for="tahun_akademik" class="col-sm-2 control-label">Agama * </label>
				<div class="col-sm-3">
					<select name="agama" id="input" class="form-control" required="required">
						@foreach ($agama as $element)
							<option value="{{ $element->id }}">{{ $element->agama }}</option>
						@endforeach
					</select>
				</div>
			</div>

			<div class="form-group">
				<label for="tahun_akademik" class="col-sm-2 control-label">No. handphone* </label>
				<div class="col-sm-4">
					<input type="text" name="no_hp" id="input" class="form-control"required="required">
				</div>
			</div>

			<div class="form-group">
				<label for="" class="col-sm-8 control-label"><i class="i-custom">Komunikasi pendaftaran anda akan disampaikan melalui email dan/atau handphone.</i></label>
			</div>

			<hr>{{--================================Alamat di jogja===================================================  --}}

			<div class="form-group">
				<label for="" class="col-sm-4 control-label	i-custom">Alamat di Yogyakarta</label>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Alamat</label>
				<div class="col-sm-4">
					<input type="text" name="almtYk" id="input" class="form-control" required="required">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Kabupaten/Kota</label>
				<div class="col-sm-4">
					<input type="text" name="kotakabYk" id="input" class="form-control" required="required">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">No. telepon</label>
				<div class="col-sm-4">
					<input type="text" name="no_telYk" id="input" class="form-control" required="required">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<label class="radio-inline">
						<input type="radio" name="tinggalYk" id="dalamYogya" value="1" checked="checked"> Sekarang tinggal di Yogyakarta
					</label>
				</div>
			</div>

			<hr>{{--================================Alamat luar jogja===================================================  --}}


			<div class="form-group">
				<label for="" class="col-sm-4 control-label	i-custom">Alamat di Luar Yogyakarta</label>
			</div>

			<div class="form-group">
				<label class="col-sm-2 control-label">Alamat</label>
				<div class="col-sm-4">
					<input type="text" name="almtNyk" id="input" class="form-control" required="required">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Kabupaten/Kota</label>
				<div class="col-sm-4">
					<input type="text" name="kotakabNyk" id="input" class="form-control" required="required">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Propinsi</label>
				<div class="col-sm-4">
					<input type="text" name="prop" id="input" class="form-control" required="required">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Negara</label>
				<div class="col-sm-4">
					<input type="text" name="neg" id="input" class="form-control" required="required" value="Indonesia">
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-2 control-label">No. telepon</label>
				<div class="col-sm-4">
					<input type="text" name="no_telNyk" id="input" class="form-control" required="required">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<label class="radio-inline">
						<input type="radio" name="tinggalYk" id="luarYogya" value="0"> Sekarang tinggal di luar Yogyakarta
					</label>
				</div>
			</div>
			{{-- ==============================================BUTTON ============================================= --}}
			<div class="form-group">
				<div class="col-sm-offset-9 col-sm-3">
					<button type="submit" class="btn btn-default">Sebelumnya </button>
					<button type="submit" class="btn btn-default">Berikutnya</button>
				</div>
			</div>
		</form>
	</div>
</div>		
@stop
@section('script')
	<script>
	$(function(){
		$("input[name='tinggalYk']").change(function(){
			$('input[name="tinggalYk"]:checked').not(this).prop('checked', false);
		});

		$( "#datepicker" ).datepicker({
                dateFormat: "yy-mm-dd",
                yearRange: '-70:+0',
                changeYear: true,
                changeMonth: true,
            });

	});
	</script>
@stop	