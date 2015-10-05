@extends('layout.master')
@section('content')
<div class="col-lg-12">
	<div class="col-lg-10 col-lg-offset-1">
		<form action="{{ url('pekerjaan') }}" method="POST" class="form-horizontal" role="form">
			<div class="form-group">
				<h4><strong>Langkah 4 : Pekerjaan[create]</strong></h4>
				<?php if ($errors->has()): ?>
					<div class="alert alert-danger">
						<ul class="square">
							<?php foreach ($errors->all() as $error): ?>
								<li><?php echo $error; ?></li>
							<?php endforeach ?>
						</ul>
					</div>
				<?php endif ?>
			</div>
			@if (empty($edit))
			<div class="form-group">
				<div class="col-sm-3">
					<div class="checkbox">
						<label>
							<input type="checkbox" value="y" id="statusKerja" name="sttskrja" checked="checked">
							Saat ini tidak bekerja
						</label>
					</div>
				</div>	
			</div>
			<div id="inputPekerjaan">
				<div class="form-group">
					<label for="" class="col-sm-2 control-label">Posisi </label>
					<div class="col-sm-4">
						<input type="text" name="pos" id="input" class="form-control" value="{{Input::old('pos')}}">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-2 control-label">Institusi </label>
					<div class="col-sm-4">
						<input type="text" name="ins" id="input" class="form-control" value="{{Input::old('ins')}}">
					</div>
				</div>
				<br>
				<div class="form-group">
					<label for="" class="col-sm-2 control-label">Alamat </label>
					<div class="col-sm-4">
						<input type="text" name="almt" id="input" class="form-control" value="{{Input::old('almt')}}">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-2 control-label">Kabupaten/kota </label>
					<div class="col-sm-4">
						<input type="text" name="kotkab" id="input" class="form-control" value="{{Input::old('kotkab')}}">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-2 control-label">Propinsi </label>
					<div class="col-sm-4">
						<input type="text" name="prop" id="input" class="form-control" value="{{Input::old('prop')}}">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-2 control-label">Negara </label>
					<div class="col-sm-4">
						<input type="text" name="neg" id="input" class="form-control" value="Indonesia">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-2 control-label">No. telepon </label>
					<div class="col-sm-4">
						<input type="text" name="notel" id="input" class="form-control" value="{{Input::old('notel')}}">
					</div>
				</div>

				<div class="form-group">
					<label for="" class="col-sm-2 control-label">No. faksimili </label>
					<div class="col-sm-4">
						<input type="text" name="nofax" id="input" class="form-control" value="{{Input::old('nofax')}}">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-2 control-label">Email </label>
					<div class="col-sm-4">
						<input type="text" name="mail" id="input" class="form-control" value="{{Input::old('mail')}}">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-2 control-label">Lama Bekerja </label>
					<div class="col-sm-2">
						<input type="text" name="thnkrj" id="input" class="form-control" value="{{Input::old('thnkrj')}}">
					</div>
				</div>
			</div>
			@else
			<div class="form-group">
				<div class="col-sm-3">
					<div class="checkbox">
						<label>
							<input type="checkbox" value="y" id="statusKerja" name="sttskrja">
							Saat ini tidak bekerja
						</label>
					</div>
				</div>	
			</div>
			<div id="inputPekerjaan">
				<div class="form-group">
					<label for="" class="col-sm-2 control-label">Posisi </label>
					<div class="col-sm-4">
						<input type="text" name="pos" id="input" class="form-control" value="{{ $edit->posisi }}">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-2 control-label">Institusi </label>
					<div class="col-sm-4">
						<input type="text" name="ins" id="input" class="form-control" value="{{ $edit->institusi }}">
					</div>
				</div>
				<br>
				<div class="form-group">
					<label for="" class="col-sm-2 control-label">Alamat </label>
					<div class="col-sm-4">
						<input type="text" name="almt" id="input" class="form-control" value="{{ $edit->alamat }}">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-2 control-label">Kabupaten/kota </label>
					<div class="col-sm-4">
						<input type="text" name="kotkab" id="input" class="form-control" value="{{ $edit->kotakab }}">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-2 control-label">Propinsi </label>
					<div class="col-sm-4">
						<input type="text" name="prop" id="input" class="form-control" value="{{ $edit->propinsi }}">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-2 control-label">Negara </label>
					<div class="col-sm-4">
						<input type="text" name="neg" id="input" class="form-control" value="{{ $edit->negara }}">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-2 control-label">No. telepon </label>
					<div class="col-sm-4">
						<input type="text" name="notel" id="input" class="form-control" value="{{ $edit->noTelepon }}">
					</div>
				</div>

				<div class="form-group">
					<label for="" class="col-sm-2 control-label">No. faksimili </label>
					<div class="col-sm-4">
						<input type="text" name="nofax" id="input" class="form-control" value="{{ $edit->noFaximile }}">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-2 control-label">Email </label>
					<div class="col-sm-4">
						<input type="text" name="mail" id="input" class="form-control" value="{{ $edit->email }}">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-2 control-label">Lama Bekerja </label>
					<div class="col-sm-1">
						<input type="text" name="thnkrj" id="input" class="form-control" value="{{ $edit->tahunMulai }}">
					</div>
					<label for="" class="col-sm-2 control-label">Tahun </label>
				</div>
			</div>
			@endif
			
			

			<hr>
			<div class="form-group">
				<h5>Riwayat Pekerjaan (Jika Ada)</h5>
				<div class="notif">

				</div>
			</div>
			@if ($data->isEmpty())
			@else
			<div id="riwayat" ic-confirm="Anda yakin akan menghapus data ini?" ic-target="ic-id">
				@foreach ($data as $element)
				<div class="form-group">
					<label for="" class="col-sm-1 control-label">Posisi </label>
					<div class="col-sm-2">
						<input type="text" name="pos_riw[]" id="input" class="form-control" value="{{ $element->posisi }}">
					</div>
					<label for="" class="col-sm-1 control-label">Institusi </label>
					<div class="col-sm-3">
						<input type="text" name="ins_riw[]" id="input" class="form-control" value="{{ $element->institusi }}">
					</div>
					<label for="" class="col-sm-2 control-label">Masa Kerja </label>
					<div class="col-lg-1">
						<input type="text" name="th_riw[]" id="input" class="form-control" value="{{ $element->masaKerja }}">
					</div>

					<label for="" class="col-sm-1 control-label">tahun</label> 
					<button class="btn btn-danger" type="button" id="hapusPekerjaan" ic-delete-from="pekerjaan/{{ $element->id}}">
						<i class="glyphicon glyphicon-remove"></i>
						<i class="ic-indicator fa fa-spinner fa-spin" style="display: none"></i>
					</button>
				</div>
				@endforeach
			</div>
			@endif
			<div class="form-group">
				<div class="col-sm-3">
					<button type="button" class="btn btn-default" id="tambahPekerjaan" data-toggle="modal" data-target="#myModal">
						Tambah Riwayat Pekerjaan
					</button>
				</div>
			</div>
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="myModalLabel" align="center">Tambah Riwayat Pekerjaan</h4>
						</div>
						<div class="modal-body" id="#modalTambah">
							<div id="notifProfesi">

							</div>
							<div id="riwayatModal" ic-target="#notifProfesi">
								<div id="riwayat">
									<div class="form-group">
										<label for="" class="col-sm-1 control-label">Posisi </label>
										<div class="col-sm-2">
											<input type="text" name="pos_riw2[]" id="input" class="form-control">
										</div>
										<label for="" class="col-sm-1 control-label">Institusi </label>
										<div class="col-sm-3">
											<input type="text" name="ins_riw2[]" id="input" class="form-control">
										</div>
										<label for="" class="col-sm-2 control-label">Masa Kerja </label>
										<div class="col-lg-1">
											<input type="text" name="th_riw2[]" id="input" class="form-control">
										</div>
										<label for="" class="col-sm-1 control-label">tahun</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-3">
									<button type="button" class="btn btn-primary" id="tambahRiwayatButton">
										<i class="glyphicon glyphicon-plus"></i>
									</button>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<button type="button" class="btn btn-primary" ic-target="#notifProfesi" ic-post-to="RiwayatPekerjaanSaved" onclick="setTimeout(function () { window.location.reload(); }, 1)">Submit</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		{{-- butttonnnnnnnnnnnnnnnnnnnnnnnnnnn --}}
		<div class="form-group">
			<div class="col-sm-offset-9 col-sm-3">
				<a href="{{url('pendidikan')}}" class="btn btn-default">Sebelumnya</a>
				<button type="submit" class="btn btn-default">Berikutnya</button>
			</div>
		</div>
	</form>
</div>
</div>
@stop
@section('script')
<script type="text/javascript">
	$(function() {		
		$(function() {		
			$("#tambahRiwayatButton ").click(function(){
				$("#riwayatModal").append('<div class="form-group"><label for="" class="col-sm-1 control-label">Posisi </label><div class="col-sm-2"><input type="text" name="pos_riw2[]" id="input" class="form-control"></div><label for="" class="col-sm-1 control-label">Institusi </label><div class="col-sm-3"><input type="text" name="ins_riw2[]" id="input" class="form-control"></div><label for="" class="col-sm-2 control-label">Masa Kerja </label><div class="col-lg-1"><input type="text" name="th_riw2[]" id="input" class="form-control"></div><label for="" class="col-sm-1 control-label">tahun</label><button class="btn btn-danger" type="button" id="hapusPekerjaanModal"><i class="glyphicon glyphicon-remove"></i></button></div>');
			});
			$(document).on("click","#hapusPekerjaanModal",function(){
				$(this).parent().remove();
			});
		});	
		$("#statusKerja").click(function(){
			if ($(this).is(':checked'))
			{
				$('#inputPekerjaan :input').prop('disabled', true);
			}
			else
			{
				$('#inputPekerjaan :input').prop('disabled', false);
			};

		});
		$('#statusKerja').is("checked",true)
		{
			$('#inputPekerjaan :input').prop('disabled', true);
		}
		$('#statusKerja').is("checked",false)
		{
			$('#inputPekerjaan :input').prop('disabled', false);
		}

	});	
</script>

@stop

