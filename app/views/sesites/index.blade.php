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
				</div>
			</div>
			<?php if ($errors->has()): ?>
				<div class="row">
					<div class="col-lg-12">
						<div class="alert alert-danger">
							<ul class="square">
								<?php foreach ($errors->all() as $error): ?>
									<li><?php echo $error; ?></li>
								<?php endforeach ?>
							</ul>
						</div>
					</div>	
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
			
			<div class="panel-body">
				<form action="{{url('sesites')}}" method="POST" class="" role="form">
					<div class="col-lg-2" style="padding-right:5px;">
						<div class="form-group">
							<label>Jam</label>
							<input required type="text" id="jam_awal" class="form-control" name="jam_awal">
						</div>
					</div>
					<div class="col-lg-1" style="padding-right:5px;padding-left:5px;">
						<div class="form-group">
							<label for=""></label>
							<p style="margin-top:11px;margin-left:19px;">S/D</p>
						</div>
					</div>	
					<div class="col-lg-2" style="padding-left:5px;">
						<div class="form-group">
							<label>Jam</label>
							<input required type="text" id="jam_akhir" class="form-control" name="jam_akhir">
						</div>
					</div>
					<div class="col-lg-1">
						<div class="form-group">
							<label for="" style="color:white;">Tambah</label>
							<button type="submit" class="btn btn-primary">Tambah</button>
						</div>
					</div>
				</form>
				<table class="table table-hover table-bordered">
					<thead>
						<tr>
							<th style="text-align:center">Sesi</th>
							<th style="text-align:center">Aksi</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($sesites as $element)
						<tr>
							<td style="text-align:center">{{$element->sesi}}</td>
							<td align="center">
								<button class="btn btn-primary">
									Edit
								</button>
								<button class="btn btn-danger hapus" id="{{$element->id}}">
									Hapus
									<i class="fa fa-spinner fa-spin" style="display: none" data="{{$element->id}}"></i>
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
	$('#jam_awal').timepicker({
		hourMin: 8,
		hourMax: 16
	});
	$('#jam_akhir').timepicker({
		hourMin: 8,
		hourMax: 16
	});
	$(document).ready(function(){
		$('.hapus').click(function(){
			var konfirmasi = confirm("Data Ingin Dihapus?");
			if (konfirmasi)
			{
				var del_id= $(this).attr('id');
				var $ele = $(this).parent().parent();
				$.ajax({
					type:'DELETE',
					url:"{{ url('sesites')}}"+'/'+del_id,
					data:del_id,
					beforeSend:function(){
						$("i[data=" +del_id+ "]").show();
					},
					complete: function(data){
						if(data=='yes'){
							console.log('success');
						}else{
							console.log('success');
							$("i[data=" +del_id+ "]").hide();
							$ele.fadeOut().remove();
						}
					}
				})
			};
		})
	});
</script>
@stop