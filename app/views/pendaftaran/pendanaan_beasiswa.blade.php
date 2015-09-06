@extends('layout.master')
@section('content')
<div class="col-lg-12">
	<div class="col-lg-10 col-lg-offset-1">
		<form action="" method="POST" class="form-horizontal" role="form">
			<div class="form-group">
				<h4><strong>Langkah 5 : Pendanaan Beasiswa</strong></h4>
			</div>
			<div class="form-group">
				<label for="program" class="col-sm-2 control-label">Sumber pendanaan *</label>
				<div class="col-sm-3" id="pendanaan">
					<label class="radio-inline" >
						<input type="radio" name="inlineRadioOptions" id="sendiri"> Sendiri
					</label>
					<label for="" class="radio-inline">
						<input type="radio" name="inlineRadioOptions" id="beasiswa"> Beasiswa
					</label>
				</div>
			</div>
			<div id="inputPendanaan">
				<div class="form-group">	
					<label for="input" class="col-sm-2 control-label">Beasiswa</label>
					<div class="col-sm-3">
						<select name="" id="input" class="form-control" required="required">
							<option value="">Alumni</option>
							<option value="">Pascasarjana</option>
							<option value="">Sponsor lain</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-6 i-custom control-label"><i>Beasiswa alumni hanya diperuntukkan bagi pendaftar yang merupakan alumni Teknik Industri atau Teknik Informatika Universitas Islam Indonesia.</i></label>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-2 control-label">Pemberi beasiswa </label>
					<div class="col-sm-4">
						<input type="text" name="" id="input" class="form-control" required="required">
					</div>
				</div>
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
					<label for="" class="col-sm-2 control-label">Posisi </label>
					<div class="col-sm-4">
						<input type="text" name="" id="input" class="form-control" required="required">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-2 control-label">No. telepon </label>
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
					<label for="program" class="col-sm-2 control-label">Status Beasiswa</label>
					<div class="col-sm-4">
						<label class="radio-inline">
							<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Dalam proses
						</label>
						<label for="" class="radio-inline">
							<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Sudah disetujui
						</label>
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
@section('script')
<script>
	$(function(){
		$('input[type="radio"]').change(function(e)
		{
			if ($("#beasiswa").is(':checked'))
            {
                $('#inputPendanaan :input').prop('disabled', false);
            }
            else
            {
                $('#inputPendanaan :input').prop('disabled', true);
            };
		});
	});
	</script>
	@stop