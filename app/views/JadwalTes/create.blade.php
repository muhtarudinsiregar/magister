@extends('layout.master')
@section('content')
<div class="col-lg-12">
	<div class="col-lg-10 col-lg-offset-1">

		<form action=" {{ url('jadwal') }} " method="POST" class="form-horizontal" role="form">
			<div class="form-group">
				<h4><strong>Langkah 7 : Jadwal Tes [Create]</strong></h4>
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
							<input type="checkbox" value="T" id="pilihJadwal">
							Pilih Jadwal
						</label>
					</div>
				</div>
			</div>
			<div id="tanggalTes">
				<div class="form-group">
					<label for="" class="col-sm-2 control-label">Tanggal tes </label>
					<div class="col-sm-3">
						<input type="text" name="tgglTes" id="inputTanggal" class="form-control" required="required" disabled="disable">
					</div>
				</div>
				<div class="form-group">
					<label for="tahun_akademik" class="col-sm-2 control-label">Pukul </label>
					<div class="col-sm-3">
						<select name="jTes" id="input" class="form-control" required="required" disabled="disable">
							<option value=""></option>
							@foreach ($tes as $element)
							<option value="{{ $element->id }}"> {{ $element->sesi }} </option>
							@endforeach
							
						</select>
					</div>
					<label for="tahun_akademik" class="col-sm-2 control-label">WIB </label>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-9 col-sm-3">
					<a href="{{url('kontak')}}" class="btn btn-default">Sebelumnya</a>
					<button type="submit" class="btn btn-default">Berikutnya</button>
				</div>
			</div>
		</form>
	</div>
</div>
@stop
@section('script')
<script>
	$(function() {
		$( "#inputTanggal" ).datepicker({
			changeMonth: true,
			minDate: 0 ,
			dateFormat: "yy-mm-dd",
		});
	});
	// $("#pilihJadwal").is("checked",true)
	// {
	// 	$("#inputJam").prop("disabled",false);
	// 	$("#inputTanggal").prop("disabled",false);
	// }
	// $("#pilihJadwal").is("checked",false)
	// {

	// 	$("#inputJam").prop("disabled",true);
	// 	$("#inputTanggal").prop("disabled",true);
		
	// }
</script>
@stop