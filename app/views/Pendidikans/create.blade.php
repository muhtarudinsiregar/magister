@extends('layout.master')
@section('content')
<div class="col-lg-12">
	<div class="col-lg-10 col-lg-offset-1">
		<form action="{{ url('pendidikan') }}" method="POST" class="form-horizontal" role="form">
			<div class="form-group">
				<h4><strong>Langkah 3 : Pendidikan Sebelumnya</strong></h4>
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
						<input type="radio" name="jnjg" id="inlineRadio1" value="S1" 
						<?php 
						if(Input::old('jnjg')== "S1") { 
							echo "checked='checked'";
						}
						?>
						> S1
					</label>
					<label for="" class="radio-inline">
						<input type="radio" name="jnjg" id="inlineRadio1" value="D4"
						<?php 
						if(Input::old('jnjg')== "D4") { 
							echo "checked='checked'";
						}
						?>
						> D4
					</label>
				</div>
			</div>
			
			<div class="form-group">
				<label for="tahun_akademik" class="col-sm-2 control-label">Program Studi* </label>
				<div class="col-sm-4">
					<input type="text" name="prgrmstd" id="input" class="form-control" required="required" value="{{Input::old('prgrmstd')}}">
				</div>
			</div>
			
			<div class="form-group">
				<label for="tahun_akademik" class="col-sm-2 control-label">Akreditasi * </label>
				<div class="col-sm-3">
					<select name="akrdts" id="input" class="form-control" required="required">
						@foreach ($akreditasi as $element)
						<option value="{{ $element->id }}"
							<?php if(Input::old('akrdts')== $element->id) { echo 'checked="checked"'; } ?>
								>{{ $element->akreditasi }}</option>
								@endforeach
							</select>
						</div>
					</div>

					<div class="form-group">
						<label for="tahun_akademik" class="col-sm-2 control-label">Perguruan Tinggi* </label>
						<div class="col-sm-4">
							<input type="text" name="pt" id="input" class="form-control" required="required" value="{{Input::old('pt')}}">
						</div>
					</div>

					<div class="form-group">
						<label for="tahun_akademik" class="col-sm-2 control-label">Tahun masuk* </label>
						<div class="col-sm-2">
							<input type="text" name="thmsk" id="input" class="form-control" required="required" value="{{Input::old('thmsk')}}">
						</div>
					</div>
					<div class="form-group">
						<label for="tahun_akademik" class="col-sm-2 control-label">Tahun lulus* </label>
						<div class="col-sm-2">
							<input type="text" name="thlls" id="input" class="form-control" required="required" value="{{Input::old('thlls')}}">
						</div>
					</div>
					
					<div class="form-group">
						<label for="tahun_akademik" class="col-sm-2 control-label">No. ijazah  </label>
						<div class="col-sm-4">
							<input type="text" name="noijzh" id="input" class="form-control" required="required" value="{{Input::old('noijzh')}}">
						</div>
					</div>
					<div class="form-group">
						<label for="tahun_akademik" class="col-sm-2 control-label">IPK* </label>
						<div class="col-sm-2">
							<input type="text" name="ipk" id="input" class="form-control" required="required" value="{{Input::old('ipk')}}">
						</div>
						<label for="tahun_akademik" class="col-sm-1 control-label">Skala* </label>
						<div class="col-sm-2">
							<input type="text" name="skala" id="input" class="form-control" required="required" value="4" value="{{Input::old('skala')}}">
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
								<input type="text" name="asosiasi"  class="form-control" id="asos">
							</div>
							<label for="tahun_akademik" class="col-sm-2 control-label" style="padding-left:40px;">No. anggota  </label>
							<div class="col-sm-2" id="no_anggota">
								<input type="text" name="no_anggota" class="form-control" id="anggota">
							</div>
							<button type="button" class="btn btn-primary btn-md" id="tambah">
								Tambah Profesi
							</button>
						</div>
					</div>
					
					<table class="table table-bordered table-hover">
						<thead>
							<tr>
								<th>Asosiasi</th>
								<th>No.Anggota</th>
								<th></th>
							</tr>
						</thead>
						<tbody id="output" ic-confirm="Benar data ingin dihapus?" ic-target="closest tr"></tbody>
						@foreach ($profesi as $element)
						<tr id="tr{{$element->id}}">
							<td>{{$element->id}}</td>
							<td>{{$element->noAnggota}}</td>
							<td align="center">
								<button class="btn btn-danger" ic-delete-from="{{url('pendidikan'/$element->id)}}">
									Hapus
									<i class="ic-indicator fa fa-spinner fa-spin" style="display: none"></i>
								</button>
							</td>
						</tr>
						@endforeach
					</table>

					{{-- ==============================================BUTTON ============================================= --}}
					<div class="form-group">
						<div class="col-sm-offset-9 col-sm-3">
							{{-- <button type="submit" class="btn btn-default">Sebelumnya </button> --}}
							<a href="{{url('data-pribadi')}}" class="btn btn-default">Sebelumnya</a>
							<button type="submit" class="btn btn-default">Berikutnya</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		@stop
		@section('script')
		<script>
			$(document).ready(function(){	
				$("#tambah").click(function(){
					var formData = {
						asosiasi : $('#asos').val(),
						no_anggota : $('#anggota').val()
					};
					$.ajax({
						type:"POST",
						url:"{{ url('profesiSaved') }}",
						data:formData,
						success:function(msg){
							console.log(msg.data);
						}
					})
					.done(function(msg){
						$("input[id=asos],input[id=anggota]").val("");
						$("#output").after(msg.data).hide().appendTo('#output').fadeTo(2000, 1);
					});
				});
			});
			$(document).on('click','hapus_btn',function(){
				var del_id= $(this).attr('id');
				var $ele = $(this).parent().parent();
				$.ajax({
					type:'DELETE',
					url:"{{ url('pendidikan')}}"+'/'+del_id,
					data:del_id,
					success: function(data){
						if(data=='yes'){
							console.log('success');
						}else{
							console.log('success');
							$ele.fadeOut().remove();
						}
					}
				})
			});
		</script>
		@stop