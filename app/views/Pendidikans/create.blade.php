@extends('layout.master')
@section('content')
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
@stop