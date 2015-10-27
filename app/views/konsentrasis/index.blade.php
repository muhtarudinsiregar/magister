@extends('admin.master_admin')
@section('content')
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">{{$title}}</h1>
	</div>
</div><!--/.row-->
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			
			<div class="row">
				<div class="col-lg-12">
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
			</div>
			<div class="panel-body">
				<form action="{{url('konsentrasi')}}" method="POST" class="" role="form">
					<div class="col-lg-3" style="padding-left:0px;">
						<div class="form-group">
							<label>Program Studi</label>
							<select name="id_prodi" id="studi" class="form-control" required="required">
								@foreach ($prodi as $element)
								<option value="{{$element->id}}">{{$element->prodi}}</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="form-group">
							<label>ID Konsentrasi</label>
							<input name= "id" type="text" class="form-control" id="" placeholder="ID">
						</div>
					</div>
					<div class="col-lg-3">
						<div class="form-group">
							<label>Konsentrasi</label>
							<input name= "konsentrasi" type="text" class="form-control" id="" placeholder="Input Konsentrasi">
						</div>
					</div>
					<div class="col-lg-1">
						<div class="form-group">
							<label for="" style="color:white;">Tambah</label>
							<button type="submit" class="btn btn-primary">Tambah</button>
						</div>
					</div>
				</form>
				<table class="table table-hover table-bordered text-center">
					<thead>
						<tr>
							<th class="text-center">Program Studi</th>
							<th class="text-center">Konsentrasi</th>
							<th class="text-center">Aksi</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($konsentrasi as $element)
						<tr>
							<td><a href="#" data-pk="{{$element->id}}" data-type="select" data-name="prodi" data-url="{{url('konsentrasi/updateProdi')}}" data-source="{{url('getProdi')}}" class="prodi-edit">{{$element->studi->prodi}}</a></td>
							<td><a href="#" data-pk="{{$element->id}}" data-name="konsentrasi" data-url="{{url('konsentrasi/updateKonsentrasi')}}" class="konsentrasi-edit">{{$element->konsentrasi}}</a></td>
							<td align="center">
								<button class="btn btn-primary">
									Edit
								</button>
								<button class="btn btn-danger hapus" id="{{$element->id}}">
									Hapus
									<i class="ic-indicator fa fa-spinner fa-spin" style="display: none"></i>
								</button>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div><!--/.row-->
@stop
@section('script')
<script>
	$(document).ready(function(){
		$.fn.editable.defaults.mode = 'inline';
		$.fn.editable.defaults.ajaxOptions = {type: "post"};
		$('.prodi-edit').editable({
			type: 'select',
		});
		$('.konsentrasi-edit').editable({
			type: 'text',
			name: 'konsentrasi'
		});
		$('.hapus').click(function(){
			var konfirmasi = confirm("Data Ingin Dihapus?");
			if (konfirmasi)
			{
				var del_id= $(this).attr('id');
				var $ele = $(this).parent().parent();
				$.ajax({
					type:'DELETE',
					url:"{{ url('konsentrasi')}}"+'/'+del_id,
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
			};
		})
	});
</script>
@stop