@extends('layout.master')
@section('content')
<div class="col-lg-12">
	<div class="col-lg-10 col-lg-offset-1">
		<form action="" method="POST" class="form-horizontal" role="form">
			<div class="form-group">
				<h4>Langkah 3 : Pendidikan Sebelumnya</h4>
			</div>
			
			<div class="form-group">
				<label for="program" class="col-sm-2 control-label">Jenjang *</label>
				<div class="col-sm-4">
					<label class="radio-inline">
						<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> S1
					</label>
					<label for="" class="radio-inline">
						<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> D4
					</label>
				</div>
			</div>
			
			<div class="form-group">
				<label for="tahun_akademik" class="col-sm-2 control-label">Program Studi* </label>
				<div class="col-sm-4">
					<input type="text" name="" id="input" class="form-control" required="required">
				</div>
			</div>
			
			<div class="form-group">
				<label for="tahun_akademik" class="col-sm-2 control-label">Akreditasi * </label>
				<div class="col-sm-2">
					<select name="" id="input" class="form-control" required="required">
						<option value="">A</option>
						<option value="">B</option>
						<option value="">C</option>
						<option value="">Tidak terakreditasi</option>
					</select>
				</div>
			</div>

			<div class="form-group">
				<label for="tahun_akademik" class="col-sm-2 control-label">Perguruan Tinggi* </label>
				<div class="col-sm-4">
					<input type="text" name="" id="input" class="form-control" required="required">
				</div>
			</div>

			<div class="form-group">
				<label for="tahun_akademik" class="col-sm-2 control-label">Tahun masuk* </label>
				<div class="col-sm-2">
					<input type="text" name="" id="input" class="form-control" required="required">
				</div>
			</div>
			<div class="form-group">
				<label for="tahun_akademik" class="col-sm-2 control-label">Tahun lulus* </label>
				<div class="col-sm-2">
					<input type="text" name="" id="input" class="form-control" required="required">
				</div>
			</div>
		
			<div class="form-group">
				<label for="tahun_akademik" class="col-sm-2 control-label">No. ijazah  </label>
				<div class="col-sm-4">
					<input type="text" name="" id="input" class="form-control" required="required">
				</div>
			</div>
			<div class="form-group">
				<label for="tahun_akademik" class="col-sm-2 control-label">IPK* </label>
				<div class="col-sm-2">
					<input type="text" name="" id="input" class="form-control" required="required">
				</div>
				<label for="tahun_akademik" class="col-sm-1 control-label">Skala* </label>
				<div class="col-sm-2">
					<input type="text" name="" id="input" class="form-control" required="required" value="4">
				</div>
			</div>

			<hr>

			<div class="form-group">
				<label for="" class="col-sm-4 control-label	i-custom">Keanggotaan asosiasi profesi (jika ada)</label>
			</div>

			<div class="form-group">
				<label for="tahun_akademik" class="col-sm-2 control-label">Asosiasi  </label>
				<div class="col-sm-4">
					<input type="text" name="" id="input" class="form-control">
				</div>
			</div>

			<div class="form-group">
				<label for="tahun_akademik" class="col-sm-2 control-label">No. anggota  </label>
				<div class="col-sm-4">
					<input type="text" name="" id="input" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-3">
					<button type="submit" class="btn btn-primary">Tambah Profesi </button>
					<p>di klik bis nambah 2 input diatas</p>
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