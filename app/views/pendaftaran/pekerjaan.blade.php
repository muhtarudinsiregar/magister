@extends('layout.master')
@section('content')
<div class="col-lg-12">
	<div class="col-lg-10 col-lg-offset-1">
		<form action="" method="POST" class="form-horizontal" role="form">
			<div class="form-group">
				<h4>Langkah 4 : Pekerjaan</h4>
			</div>
			<div class="form-group">
				<div class="col-sm-3">
					<div class="checkbox">
						<label>
							<input type="checkbox" value="1" id="statusKerja">
							Saat ini tidak bekerja
						</label>
					</div>
				</div>	
				{{-- <label for="tahun_akademik" class="col-sm-2 control-label">Posisi </label> --}}
			</div>
			<div id="inputPekerjaan">
				<div class="form-group">
					<label for="" class="col-sm-2 control-label">Posisi </label>
					<div class="col-sm-4">
						<input type="text" name="" id="input" class="form-control" required="required">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-2 control-label">Institusi </label>
					<div class="col-sm-4">
						<input type="text" name="" id="input" class="form-control" required="required">
					</div>
				</div>
				<br>
				<div class="form-group">
					<label for="" class="col-sm-2 control-label">Alamat </label>
					<div class="col-sm-4">
						<input type="text" name="" id="input" class="form-control" required="required">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-2 control-label">Kabupaten/kota </label>
					<div class="col-sm-4">
						<input type="text" name="" id="input" class="form-control" required="required">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-2 control-label">Propinsi </label>
					<div class="col-sm-4">
						<input type="text" name="" id="input" class="form-control" required="required">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-2 control-label">Negara </label>
					<div class="col-sm-4">
						<input type="text" name="" id="input" class="form-control" required="required" value="Indonesia">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-2 control-label">No. telepon </label>
					<div class="col-sm-4">
						<input type="text" name="" id="input" class="form-control" required="required">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-2 control-label">Program Studi </label>
					<div class="col-sm-4">
						<input type="text" name="" id="input" class="form-control" required="required">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-2 control-label">No. faksimili </label>
					<div class="col-sm-4">
						<input type="text" name="" id="input" class="form-control" required="required">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-2 control-label">Email </label>
					<div class="col-sm-4">
						<input type="text" name="" id="input" class="form-control" required="required">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-2 control-label">Tahun Kerja </label>
					<div class="col-sm-2">
						<input type="text" name="" id="input" class="form-control" required="required">
					</div>
				</div>
			</div>

			<hr>
			
			<div class="form-group">
				<h5>Riwayat Pekerjaan (Jika Ada)</h5>
			</div>
			<div id="riwayat">
				<div class="form-group">
					<label for="" class="col-sm-2 control-label">Posisi </label>
					<div class="col-sm-4">
						<input type="text" name="" id="input" class="form-control" required="required">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-2 control-label">Institusi </label>
					<div class="col-sm-4">
						<input type="text" name="" id="input" class="form-control" required="required">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-2 control-label">Masa Kerja </label>
					<div class="col-lg-2">
						<input type="text" name="" id="input" class="form-control" required="required">
					</div>
					<label for="" class="col-sm-2 control-label">tahun</label>
				</div>
				<div class="form-group">
					<div class="col-sm-3">
						<button type="button" class="btn btn-default">Tambah Pekerjaan</button>
					</div>
				</div>
			</div>
			{{-- butttonnnnnnnnnnnnnnnnnnnnnnnnnnn --}}
			<div class="form-group">
				<div class="col-sm-offset-9 col-sm-3">
					<button type="button" class="btn btn-default">Sebelumnya </button>
					<button type="submit" class="btn btn-default">Berikutnya</button>
				</div>
			</div>
		</form>
	</div>
</div>
<script>
	

</script>
@stop

