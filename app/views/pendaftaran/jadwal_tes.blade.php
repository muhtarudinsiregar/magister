@extends('layout.master')
@section('content')
<div class="col-lg-12">
	<div class="col-lg-10 col-lg-offset-1">

		<form action="" method="POST" class="form-horizontal" role="form">
			<div class="form-group">
				<h4>Langkah 7 : Jadwal Tes</h4>
			</div>
			<div class="form-group">
				<label for="" class="col-sm-7 i-custom control-label"><i>Jadwal tes bersifat tentatif. Kepastian jadwal pasti akan kami konfirmasikan melalui email/no. handphone anda. </i></label>
			</div>
			<div class="form-group">
				<label for="" class="col-sm-7 i-custom control-label">
					Pastikan bahwa semua dokumen persyaratan pendaftaran sudah kami terima sebelum jadwal tes yang anda pilih. Jika anda tidak memilih jadwal, maka jadwal tes sepenuhnya mengikuti konfirmasi dari kami. 
				</label>
			</div>
			<div class="form-group">
				<label for="" class="col-sm-7 i-custom control-label">
					Kami hanya akan mengkonfirmasikan kepastian jadwal tes anda apabila semua dokumen persyaratan sudah kami terima.
				</label>
			</div>
			<div class="form-group">
				<div class="col-sm-2">
					<div class="checkbox">
						<label>
							<input type="checkbox" value="" id="pilihJadwal">
							Pilih Jadwal
						</label>
					</div>
				</div>
			</div>
			<div id="tanggalTes">
				<div class="form-group">
					<label for="" class="col-sm-2 control-label">Tanggal tes </label>
					<div class="col-sm-3">
						<input type="text" name="" id="input" class="form-control" required="required" disabled="disabled">
					</div>
				</div>
				<div class="form-group">
					<label for="tahun_akademik" class="col-sm-2 control-label">Pukul </label>
					<div class="col-sm-3">
						<select name="" id="input" class="form-control" required="required" disabled="disabled">
							<option value=""></option>
						</select>
					</div>
				</div>
			</div>
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