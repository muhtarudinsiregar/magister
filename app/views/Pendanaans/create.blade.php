@extends('layout.master')
@section('content')
<div class="col-lg-12">
	<div class="col-lg-10 col-lg-offset-1">
	<?php if ($errors->has()): ?>
					<div class="alert alert-danger">
					<ul class="square">
						<?php foreach ($errors->all() as $error): ?>
							<li><?php echo $error; ?></li>
						<?php endforeach ?>
					</ul>
				</div>
			<?php endif ?>
		<form action="{{ url('pendanaans') }}" method="POST" class="form-horizontal" role="form">
			<div class="form-group">
				<h4><strong>Langkah 5 : Pendanaan Beasiswa</strong></h4>
			</div>
			<div class="form-group">
				<label for="program" class="col-sm-2 control-label">Sumber pendanaan *</label>
				<div class="col-sm-3" id="pendanaan">
					<label class="radio-inline" >
						<input type="radio" value="sendiri" name="dana" id="sendiri"> Sendiri
					</label>
					<label for="" class="radio-inline">
						<input type="radio" value="beasiswa" name="dana" id="beasiswa"> Beasiswa
					</label>
				</div>
			</div>
			<div id="inputPendanaan">
				<div class="form-group">	
					<label for="input" class="col-sm-2 control-label">Beasiswa</label>
					<div class="col-sm-3">
						<select name="beasiswa" id="input" class="form-control" required="required">
							<option value="">--</option>
							@foreach ($beasiswa as $element)
								<option value=" {{ $element->id }} "> {{ $element->beasiswa }} </option>
							@endforeach
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-6 i-custom control-label"><i>Beasiswa alumni hanya diperuntukkan bagi pendaftar yang merupakan alumni Teknik Industri atau Teknik Informatika Universitas Islam Indonesia.</i></label>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-2 control-label">Pemberi beasiswa </label>
					<div class="col-sm-4">
						<input type="text" name="pemberi" id="input" class="form-control" required="required">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-2 control-label">Alamat </label>
					<div class="col-sm-4">
						<input type="text" name="almt" id="input" class="form-control" required="required">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-2 control-label">Kabupaten/kota </label>
					<div class="col-sm-4">
						<input type="text" name="kotakab" id="input" class="form-control" required="required">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-2 control-label">Propinsi </label>
					<div class="col-sm-4">
						<input type="text" name="prop" id="input" class="form-control" required="required">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-2 control-label">Negara </label>
					<div class="col-sm-4">
						<input type="text" name="neg" id="input" class="form-control" required="required" value="Indonesia">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-2 control-label">No. telepon </label>
					<div class="col-sm-4">
						<input type="text" name="notel" id="input" class="form-control" required="required">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-2 control-label">No. faksimili </label>
					<div class="col-sm-4">
						<input type="text" name="nofax" id="input" class="form-control" required="required">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-2 control-label">Email </label>
					<div class="col-sm-4">
						<input type="text" name="mail" id="input" class="form-control" required="required">
					</div>
				</div>
				<div class="form-group">
					<label for="program" class="col-sm-2 control-label">Status Beasiswa</label>
					<div class="col-sm-4">
						<label class="radio-inline">
							<input type="radio" name="sttsbea" id="inlineRadio1" value="Dalam proses"> Dalam proses
						</label>
						<label for="" class="radio-inline">
							<input type="radio" name="sttsbea" id="inlineRadio1" value="udah disetujui"> Sudah disetujui
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