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
		<form action="{{ url('pendanaan') }}" method="POST" class="form-horizontal" role="form">
			<div class="form-group">
				<h4><strong>Langkah 5 : Pendanaan Beasiswa [Create-edit]</strong></h4>
			</div>
			<div class="form-group">
				<label for="program" class="col-sm-2 control-label">Sumber pendanaan *</label>
				<div class="col-sm-3" id="pendanaan">
					<label class="radio-inline" >
						<input type="radio" value="0" name="dana" id="sendiri"{{($data_beasiswa->danaBeasiswa=='0')?'checked':''}}> Sendiri
					</label>
					<label for="" class="radio-inline">
						<input type="radio" value="1" name="dana" id="beasiswa" {{($data_beasiswa->danaBeasiswa=='1')?'checked':''}}> Beasiswa
					</label>
				</div>
			</div>
			<div id="inputPendanaan">
				<div class="form-group">	
					<label for="input" class="col-sm-2 control-label">Beasiswa</label>
					<div class="col-sm-3">
						<select name="beasiswa" id="jenisBeasiswa" class="form-control" required="required">
							<option value="">--</option>
							@foreach ($beasiswa as $element)
							<?php $selected = ($element->id == $data_beasiswa->id_beasiswa)? 'selected="selected"':'';?>
							<option value="{{$element->id}}" {{$selected}}> {{ $element->beasiswa }} </option>
							@endforeach
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-6 i-custom control-label"><i><p class="text-justify">
						Beasiswa alumni hanya diperuntukkan bagi pendaftar yang merupakan alumni Teknik Industri atau Teknik Informatika Universitas Islam Indonesia.
					</p></i></label>
				</div>
				<div id="sponsor">
					<div class="form-group">
						<label for="" class="col-sm-2 control-label">Pemberi beasiswa </label>
						<div class="col-sm-4">
							<input type="text" name="pemberi" class="form-control" required="required">
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-2 control-label">Alamat </label>
						<div class="col-sm-4">
							<input type="text" name="almt"  class="form-control" required="required">
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-2 control-label">Kabupaten/kota </label>
						<div class="col-sm-4">
							<input type="text" name="kotakab"  class="form-control" required="required">
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-2 control-label">Propinsi </label>
						<div class="col-sm-4">
							<input type="text" name="prop"  class="form-control" required="required">
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-2 control-label">Negara </label>
						<div class="col-sm-4">
							<input type="text" name="neg"  class="form-control" required="required" value="Indonesia">
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-2 control-label">No. telepon </label>
						<div class="col-sm-4">
							<input type="text" name="notel"  class="form-control" required="required">
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-2 control-label">No. faksimili </label>
						<div class="col-sm-4">
							<input type="text" name="nofax"  class="form-control" required="required">
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-2 control-label">Email </label>
						<div class="col-sm-4">
							<input type="text" name="mail"  class="form-control" required="required">
						</div>
					</div>
					<div class="form-group">
						<label for="program" class="col-sm-2 control-label">Status Beasiswa</label>
						<div class="col-sm-4">
							<label class="radio-inline">
								<input type="radio" name="sttsbea" id="inlineRadio1" value="0"> Dalam proses
							</label>
							<label for="" class="radio-inline">
								<input type="radio" name="sttsbea" id="inlineRadio1" value="1"> Sudah disetujui
							</label>
						</div>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-9 col-sm-3">
					<a href="{{url('pekerjaan')}}" class="btn btn-default">Sebelumnya</a>
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
		$('input[name="dana"]').change(function()
		{
			if ($("#beasiswa").is(':checked'))
			{
				$('#jenisBeasiswa').prop('disabled', false);
				$('#sponsor :input').prop('disabled', true);
			}
			else
			{
				$('#inputPendanaan :input').prop('disabled', true);
			};
		});
		$('#jenisBeasiswa').change(function(){
			var a = $('#jenisBeasiswa :selected').val();
			if (a == 3)
			{
				$('#sponsor :input').prop('disabled', false);
			}else{
				$('#sponsor :input').prop('disabled', true);		
			}
		});
		$('input[name="beasiswa"]').is("checked",true)
		{
			$('#inputPendanaan :input').prop('disabled', false);
			$('#sponsor :input').prop('disabled', true);
		}
		if ($("#sendiri").prop("checked")) {
			$('#inputPendanaan :input').prop('disabled', true);
		};
	});
</script>
@stop