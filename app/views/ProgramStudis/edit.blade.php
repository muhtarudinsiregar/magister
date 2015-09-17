 @extends('layout.master_edit')
@section('content')
	<div class="col-lg-12">
		<div class="col-lg-10 col-lg-offset-1">
			
		{{ Form::model($edit, array('method'=>'PUT','class'=>'form-horizontal','route' => array('programstudi.update', $edit->no))) }}
				<div class="form-group">
					<h4 class=""><strong>Langkah 1 : Program Studi</strong></h4>
				</div>
				<div class="form-group">
					<label for="tahun_akademik" class="col-sm-2 control-label">Tahun Akademik</label>
					<div class="col-sm-8">
						<h5><b>2015/2016</b></h5>
					</div>
				</div>
				<div class="form-group">
					<label for="tahun_akademik" class="col-sm-2 control-label">Semester</label>
					<div class="col-sm-8">
						<h5><b>1 - Ganjil</b></h5>
					</div>
				</div>
				<div class="form-group">
					<label for="tahun_akademik" class="col-sm-2 control-label">Gelombang</label>
					<div class="col-sm-2">
						<select name="gel" id="input" class="form-control" required="required">
							@foreach ($tahun as $element)
								<?php $selected = ($element->gelombang == $edit->gelombang)? 'selected="selected"':'';  ?>
							 	<option value="{{ $element->gelombang }}" {{$selected}}>{{ $element->gelombang }}</option>
							@endforeach
						</select>
					</div>
				</div>
				<hr>
				<div class="form-group">
					<label for="program" class="col-sm-2 control-label">Program</label>
					<div class="col-sm-4">
						<select name="pro" id="jurusan" class="form-control" required="required">
							<option value="--">--</option>
							@foreach ($data['jurusan'] as $element)
								<?php $selected = ($element->id == $edit->id_prodi)? 'selected="selected"':'';  ?>
								<option value="{{ $element->id }}" {{$selected}}>{{ $element->prodi }}</option>
							@endforeach
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="program" class="col-sm-2 control-label">Konsentrasi</label>
					<div class="col-sm-4">
						<select name="kon" id="konsentrasi" class="form-control" required="required">
							<option value="--">--</option>
							@foreach ($data['konsentrasi'] as $konsentrasi)
								<?php $selected = ($konsentrasi->id == $edit->id_konsentrasi)? 'selected="selected"':'';  ?>
								<option value="{{ $konsentrasi->id }}" class="{{ $konsentrasi->id_prodi}}" {{$selected}}>{{ $konsentrasi->konsentrasi }}</option>
							@endforeach
							
						</select>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-10 col-sm-2">
						<button type="submit" class="btn btn-default">Berikutnya</button>
					</div>
				</div>
			{{Form::close()}}
		</div>
	</div>
@stop
@section('script')
	<script>
		$("#konsentrasi").chained("#jurusan");
	</script>
@stop