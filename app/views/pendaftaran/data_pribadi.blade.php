@extends('layout.master')
@section('content')
<div class="col-lg-12">
	<div class="col-lg-10 col-lg-offset-1">
		<form action="" method="POST" class="form-horizontal" role="form">
			<div class="form-group">
				<h4>Langkah 2 : Data Pribadi</h4>
			</div>
			{{--================================Data Pribadi===================================================  --}}
			<div class="form-group">
				<label for="tahun_akademik" class="col-sm-2 control-label">Email* </label>
				<div class="col-sm-4">
					<input type="text" name="" id="input" class="form-control" required="required">
				</div>
				<label for="tahun_akademik" class="col-sm-5 control-label i-custom"><i>Email digunakan untuk login ke sistem ini</i></label>
			</div>

			<div class="form-group">
				<label for="tahun_akademik" class="col-sm-2 control-label">Pin* </label>
				<div class="col-sm-3">
					<input type="text" name="" id="input" class="form-control" required="required">
				</div>
				<label for="tahun_akademik" class="col-sm-2 col-sm-offset-1 control-label i-custom"><i>Angka 4 digit</i></label>
			</div>

			<div class="form-group">
				<label for="tahun_akademik" class="col-sm-2 control-label">Nama* </label>
				<div class="col-sm-4">
					<input type="text" name="" id="input" class="form-control" required="required">
				</div>
			</div>

			<div class="form-group">
				<label for="tahun_akademik" class="col-sm-2 control-label">Tempat Lahir* </label>
				<div class="col-sm-4">
					<input type="text" name="" id="input" class="form-control" required="required">
				</div>
			</div>

			<div class="form-group">
				<label for="tahun_akademik" class="col-sm-2 control-label">Tanggal Lahir* </label>
				<div class="col-sm-4">
					<input type="text" name="" id="tanggalLahir" class="form-control" required="required">
				</div>
			</div>

			<div class="form-group">
				<label for="program" class="col-sm-2 control-label">Jenis Kelamin</label>
				<div class="col-sm-4">
					<label class="radio-inline">
						<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Pria
					</label>
					<label for="" class="radio-inline">
						<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Wanita
					</label>
				</div>
			</div>

			<div class="form-group">
				<label for="tahun_akademik" class="col-sm-2 control-label">Agama* </label>
				<div class="col-sm-4">
					<select name="" id="input" class="form-control" required="required">
						<option value="">Islam</option>
						<option value="">Lainnya</option>
					</select>
				</div>
			</div>

			<div class="form-group">
				<label for="tahun_akademik" class="col-sm-2 control-label">No. handphone* </label>
				<div class="col-sm-4">
					<input type="text" name="" id="input" class="form-control"required="required">
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
					<input type="text" name="" id="input" class="form-control" required="required">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Kabupaten/Kota</label>
				<div class="col-sm-4">
					<input type="text" name="" id="input" class="form-control" required="required">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">No. telepon</label>
				<div class="col-sm-4">
					<input type="text" name="" id="input" class="form-control" required="required">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<label class="radio-inline">
						<input type="radio" name="" id="dalamYogya" value="option1"> Sekarang tinggal di Yogyakarta
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
					<input type="text" name="" id="input" class="form-control" required="required">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Kabupaten/Kota</label>
				<div class="col-sm-4">
					<input type="text" name="" id="input" class="form-control" required="required">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Propinsi</label>
				<div class="col-sm-4">
					<input type="text" name="" id="input" class="form-control" required="required">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Negara</label>
				<div class="col-sm-4">
					<input type="text" name="" id="input" class="form-control" required="required" value="Indonesia">
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-2 control-label">No. telepon</label>
				<div class="col-sm-4">
					<input type="text" name="" id="input" class="form-control" required="required">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<label class="radio-inline">
						<input type="radio" name="" id="luarYogya" value="option1"> Sekarang tinggal di luar Yogyakarta
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