@extends('layout.master')
@section('content')
<div class="col-lg-12">
	<div class="col-lg-10 col-lg-offset-1">
		{{ Form::model($edit, array('method'=>'PUT','class'=>'form-horizontal','route' => array('pendidikan.update', $edit->id))) }}
		<div class="form-group">
			<h4><strong>Langkah 3 : Pendidikan Sebelumnya [Back-Edit]</strong></h4>
		</div>
		<?php if ($errors->has()): ?>
			<div class="alert alert-danger">
				<ul class="square">
					<?php foreach ($errors->all() as $error): ?>
						<li><?php echo $error; ?></li>
					<?php endforeach ?>
				</ul>
			</div>
		<?php endif ?>
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
				<input type="text" name="ipk" id="input" class="form-control" required="required" value="{{number_format($edit->IPK, 2, '.', ''); }}"> 
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

		<div id="profesi" ic-target="closest .form-group">
			@if (!empty($profesi))
			@foreach ($profesi as $element)
			<div id="tes" class="form-group"  ic-confirm="Anda yakin akan menghapus data ini?">
				<label for="tahun_akademik" class="col-sm-1 control-label" id="">Asosiasi</label>
				<div class="col-sm-3">
					<input type="text" name="asosiasi[]" id="input" class="form-control" id="asosiasi" value="{{ $element->asosiasi }}">
				</div>
				<label for="tahun_akademik" class="col-sm-2 control-label">No. anggota  </label>
				<div class="col-sm-2" id="no_anggota">
					<input type="text" name="no_anggota[]" id="input" class="form-control" id="no_anggota" value="{{ $element->noAnggota }}">
				</div>
				<button class="btn btn-danger"  type="button" id="hapusProfesi1" ic-delete-from="pendidikan/{{ $element->id}}">
					<i class="glyphicon glyphicon-remove"></i>
					<i class="ic-indicator fa fa-spinner fa-spin" style="display: none"></i>
				</button>
			</div>
			@endforeach
			@endif
		</div>
			{{-- <div class="form-group">
				<div class="col-sm-3">
					<button type="button" class="btn btn-primary" id="tambahProfesi">
						Tambah Profesi
					</button>
				</div>
			</div> --}}
			<button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#myModal">
				Tambah Profesi
			</button>
			<!-- Modal -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="myModalLabel" align="center">Tambah Profesi</h4>
						</div>
						<div class="modal-body" id="#modalTambah">
							<div id="notifProfesi">
								
							</div>
							<div id="profesiModal">
								<div id="tes" class="form-group"  ic-confirm="Anda yakin akan menghapus data ini?">
									<label for="tahun_akademik" class="col-sm-1 col-sm-offset-1 control-label" id="">Asosiasi</label>
									<div class="col-sm-3">
										<input type="text" name="asosiasi2[]" id="input" class="form-control" id="asosiasi">
									</div>
									<label for="tahun_akademik" class="col-sm-2 control-label">No. anggota  </label>
									<div class="col-sm-2" id="no_anggota">
										<input type="text" name="no_anggota2[]" id="input" class="form-control" id="no_anggota">
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-3">
									<button type="button" class="btn btn-primary" id="tambahProfesiButton">
										<i class="glyphicon glyphicon-plus"></i>
									</button>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<button id="submit" type="button" class="btn btn-primary" ic-target="#notifProfesi" ic-post-to="profesiSaved" onclick="redirect()">Submit</button>
						</div>
					</div>
				</div>
			</div>

			{{-- ==============================================BUTTON ============================================= --}}
			<div class="form-group">
				<div class="col-sm-offset-9 col-sm-3">
					<a href="{{url('data-pribadi')}}" class="btn btn-default">Sebelumnya</a>
					<button type="submit" class="btn btn-default">Berikutnya</button>
				</div>
			</div>
			{{Form::close()}}
		</div>
	</div>
	@stop
	@section('script')
	<script>
		$("#tambahProfesiButton").click(function(e){
			e.preventDefault();
			$("#profesiModal").append('<div class="form-group"><label class="col-sm-1 col-sm-offset-1 control-label" id="">Asosiasi</label><div class="col-sm-3"><input type="text" name="asosiasi2[]" id="input" class="form-control" id="asosiasi"></div><label class="col-sm-2 control-label">No. anggota</label><div class="col-sm-2" id="no_anggota"><input type="text" name="no_anggota2[]" id="input" class="form-control" id="no_anggota"></div><button class="btn btn-danger" type="button" id="hapusProfesi">Hapus</button></div>');
		});
		// var data_table = "";
		// $.ajax({
		// 	url:'http://localhost/magister/public/load',
		// 	data:"",
		// 	dataType:'json',
		// 	success: function(data){	
		// 		for(var i=0;i<data.length;i++){
		// 			data_table +='<div class="form-group"><label for="tahun_akademik" class="col-sm-1 control-label" id="">Asosiasi</label><div class="col-sm-3"><input type="text" name="asosiasi[]" id="input" class="form-control" id="asosiasi" value="'+data[i].asosiasi+'"></div><label for="tahun_akademik" class="col-sm-2 control-label">No. anggota  </label><div class="col-sm-2" id="no_anggota"><input type="text" name="no_anggota[]" id="input" class="form-control" id="no_anggota" value="'+data[i].noAnggota+'"></div><button class="btn btn-danger"  type="button" id="hapusProfesi1" ic-delete-from="pendidikan/'+data[i].id+'"><i class="glyphicon glyphicon-remove"></i><i class="ic-indicator fa fa-spinner fa-spin" style="display: none"></i></button></div>';
		// 		}
		// 		$("#profesi").append(data_table);
		// 		console.log(data);
		// 	}
		// });
		function redirect(){
			location.reload(false);
		}
	</script>
	@stop