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
					@if (Session::has('message'))
					<div class="row">
						<div class="col-lg-12">
							<div class="alert alert-success" style="margin-bottom:0px;">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<strong>{{Session::get('message')}}</strong>
							</div>
						</div>
					</div>
					@endif
				</div>	
			</div>
			<div class="panel-body">
				<form action="{{url('studi')}}" method="POST" class="" role="form">
					<div class="col-lg-2" style="padding-left:0px;">
						<div class="form-group">
							<label>ID Program Studi</label>
							<input name= "id" type="text" class="form-control" id="" placeholder="ID">
						</div>
					</div>
					<div class="col-lg-3">
						<div class="form-group">
							<label>Program Studi</label>
							<input name= "prodi" type="text" class="form-control" id="" placeholder="Input Program Studi">
						</div>
					</div>
					<div class="col-lg-1">
						<div class="form-group">
							<label for=""></label>
							<button type="submit" class="btn btn-primary">Tambah</button>
						</div>
					</div>
				</form>
				<table data-toggle="table" class="table table-hover table-bordered" id="prodi">
					<thead>
						<tr>
							<th style="text-align:center;">ID</th>
							<th style="text-align:center;">Prodi</th>
							<th style="text-align:center;">Aksi</th>
						</tr>
					</thead>
					<tbody align="center">
						@foreach ($studis as $element)
						<tr>
							<td>{{$element->id}}</td>
							<td>
								<a href="#" data-pk="{{$element->id}}" id="prodi" data-url="{{url('updateProdi')}}" class="prodi-edit">{{$element->prodi}}</a></td>
							<td align="center">
								{{-- <a href="{{url('studi/'.$element->id.'/edit')}}" class="btn btn-primary">Edit</a> --}}
								<button type="button" class="btn btn-danger hapus" id="{{$element->id}}">
									Hapus
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
			type: 'text',
			name: 'prodi'
		});
		$('.hapus').click(function(){
			var konfirmasi = confirm("Data Ingin Dihapus?");
			if (konfirmasi)
			{
				var del_id= $(this).attr('id');
				var $ele = $(this).parent().parent();
				$.ajax({
					type:'DELETE',
					url:"{{ url('studi')}}"+'/'+del_id,
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