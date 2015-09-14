@extends('layout.master_edit')
@section('content')
<div class="col-lg-12">
	<div class="col-lg-10 col-lg-offset-1">
		{{ Form::model($edit, array('method'=>'PUT','class'=>'form-horizontal','route' => array('pendidikans.update', $edit->id))) }}
			<div class="form-group">
				<h4><strong>Langkah 3 : Pendidikan Sebelumnya</strong></h4>
			</div>
			
			<div class="form-group">
				<label for="program" class="col-sm-2 control-label">Jenjang *</label>
				<div class="col-sm-4">
					<label class="radio-inline">
						<input type="radio" name="jnjg" id="inlineRadio1" value="S1" {{($edit->jenjang=='S1')?'checked':''}}> S1
					</label>
					<label for="" class="radio-inline">
						<input type="radio" name="jnjg" id="inlineRadio1" value="D4" {{($edit->jenjang=='D4')?'checked':''}}> D4
					</label>
				</div>
			</div>
			
			<div class="form-group">
				<label for="tahun_akademik" class="col-sm-2 control-label">Program Studi* </label>
				<div class="col-sm-4">
					<input type="text" name="prgrmstd" id="input" class="form-control" required="required" value="{{ $edit->programStudi }}">
				</div>
			</div>
			
			<div class="form-group">
				<label for="tahun_akademik" class="col-sm-2 control-label">Akreditasi * </label>
				<div class="col-sm-3">
					<select name="akrdts" id="input" class="form-control" required="required">
						@foreach ($akreditasi as $element)
							<?php $selected = ($element->id == $edit->akreditasi)? 'selected="selected"':'';  ?>
							<option value="{{ $element->id }}" {{$selected}}>{{ $element->akreditasi }}</option>
						@endforeach
					</select>
				</div>
			</div>

			<div class="form-group">
				<label for="tahun_akademik" class="col-sm-2 control-label">Perguruan Tinggi* </label>
				<div class="col-sm-4">
					<input type="text" name="pt" id="input" class="form-control" required="required" value="{{ $edit->PT }}">
				</div>
			</div>

			<div class="form-group">
				<label for="tahun_akademik" class="col-sm-2 control-label">Tahun masuk* </label>
				<div class="col-sm-2">
					<input type="text" name="thmsk" id="input" class="form-control" required="required" value="{{ $edit->tahunMasuk }}">
				</div>
			</div>
			<div class="form-group">
				<label for="tahun_akademik" class="col-sm-2 control-label">Tahun lulus* </label>
				<div class="col-sm-2">
					<input type="text" name="thlls" id="input" class="form-control" required="required" value="{{ $edit->tahunLulus }}">
				</div>
			</div>
		
			<div class="form-group">
				<label for="tahun_akademik" class="col-sm-2 control-label">No. ijazah  </label>
				<div class="col-sm-4">
					<input type="text" name="noijzh" id="input" class="form-control" required="required" value="{{ $edit->noIjazah }}">
				</div>
			</div>
			<div class="form-group">
				<label for="tahun_akademik" class="col-sm-2 control-label">IPK* </label>
				<div class="col-sm-2">
					<input type="text" name="ipk" id="input" class="form-control" required="required" value="{{ $edit->IPK }}">
				</div>
				<label for="tahun_akademik" class="col-sm-1 control-label">Skala* </label>
				<div class="col-sm-2">
					<input type="text" name="skala" id="input" class="form-control" required="required" value="{{ $edit->skala }}">
				</div>
			</div>

			<hr>

			<div class="form-group">
				<label for="" class="col-sm-4 control-label	i-custom">Keanggotaan asosiasi profesi (jika ada)</label>
			</div>

			<div id="profesi">
				@foreach ($profesi as $element)
					<div class="form-group">
						<label for="tahun_akademik" class="col-sm-1 control-label" id="">Asosiasi</label>
						<div class="col-sm-3">
							<input type="text" name="asosiasi[]" id="input" class="form-control" id="asosiasi" value="{{ $element->asosiasi }}">
						</div>
						<label for="tahun_akademik" class="col-sm-2 control-label">No. anggota  </label>
						<div class="col-sm-2" id="no_anggota">
							<input type="text" name="no_anggota[]" id="input" class="form-control" id="no_anggota" value="{{ $element->noAnggota }}">
						</div>
						<button class="btn btn-danger" type="button" id="hapusProfesi">Hapus</button>
					</div>
				@endforeach
			</div>
			<div class="form-group">
				<div class="col-sm-3">
					<button type="button" class="btn btn-primary" id="tambahProfesi">Tambah Profesi </button>
				</div>
			</div>

			{{-- ==============================================BUTTON ============================================= --}}
			<div class="form-group">
				<div class="col-sm-offset-9 col-sm-3">
					<button type="submit" class="btn btn-default">Sebelumnya </button>
					<button type="submit" class="btn btn-default">Berikutnya</button>
				</div>
			</div>
		{{Form::close()}}
	</div>
</div>
@stop