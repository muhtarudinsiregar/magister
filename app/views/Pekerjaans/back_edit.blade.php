@extends('layout.master')
@section('content')
<div class="col-lg-12">
	<div class="col-lg-10 col-lg-offset-1">
		{{ Form::model($edit, array('method'=>'PUT','class'=>'form-horizontal','route' => array('pekerjaan.update', $edit->id))) }}
		<div class="form-group">
			<h4><strong>Langkah 4 : Pekerjaan</strong></h4>
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
		<div class="form-group">
			<div class="col-sm-3">
				<div class="checkbox">
					<label>
						<?php $selected = (empty($edit) == true)? 'checked="checked"':'';  ?>
						<input type="checkbox" value="y" id="statusKerja" name="sttskrja" {{$selected}}>
						Saat ini tidak bekerja
					</label>
				</div>
			</div>	
			{{-- <label for="tahun_akademik" class="col-sm-2 control-label">Posisi </label> --}}
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

		<hr>

		<div class="form-group">
			<h5>Riwayat Pekerjaan (Jika Ada)</h5>
			<div class="notif">
				
			</div>
		</div>
		<div id="profesi">
			<div class="form-group">
				<label class="col-sm-1 control-label" id="">Posisi</label>
				<div class="col-sm-3">
					<input type="text" name="posisi"  class="form-control" id="posisi">
				</div>
				<label class="col-sm-1 control-label">Institusi</label>
				<div class="col-sm-3">
					<input type="text" name="institusi" class="form-control" id="institusi">
				</div>
				<label class="col-sm-2 control-label" style="width:8em;">Masa Kerja</label>
				<div class="col-sm-1">
					<input type="text" name="masaKerja" class="form-control" id="masaKerja">
				</div>
				<label class="control-label"></label>
				<div class="col-sm-1">
					<button type="button" class="btn btn-primary btn-md" id="tambah">
						Tambah
					</button>
				</div>
			</div>
		</div>
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>Posisi</th>
					<th>Institusi</th>
					<th>Masa Kerja</th>
					<th></th>
				</tr>
			</thead>
			<tbody id="output"></tbody>
			@foreach ($data as $element)
			<tr id="tr{{$element->id}}">
				<td>{{$element->posisi}}</td>
				<td>{{$element->institusi}}</td>
				<td>{{$element->masaKerja}}</td>
				<td align="center"><a href="pekerjaan/{{$element->id}}" class="btn btn-danger">Hapus</a></td>
			</tr>
			@endforeach
		</table>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-9 col-sm-3">
			<a href="{{ url('pendidikan') }}" class="btn btn-default">Sebelumnya</a>
			<button type="submit" class="btn btn-default">Berikutnya</button>
		</div>
	</div>
	{{Form::close()}}
</div>
@stop
@section('script')
<script type="text/javascript">
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
	if($("#statusKerja").prop('checked',false))
    	// alert("tes");
    	$("#inputPekerjaan :input").prop('disabled',false);  // checked
    	else
    		$("#inputPekerjaan :input").prop('disabled',true);

    	$(document).ready(function(){	
    		$("#tambah").click(function(){
    			var formData = {
    				posisi : $('#posisi').val(),
    				institusi : $('#institusi').val(),
    				masaKerja : $('#masaKerja').val()
    			};
    			$.ajax({
    				type:"POST",
    				url:"{{ url('RiwayatPekerjaanSaved') }}",
    				data:formData,
    				success:function(msg){
    					console.log(msg.msg);
    				}
    			})
    			.done(function(msg){
    				$("input[id=posisi],input[id=institusi],input[id=masaKerja]").val("");
    				$("#output").after(msg.data).hide().appendTo('#output').fadeTo(2000, 1);
    			});
    		});
    	});
    </script>
@stop