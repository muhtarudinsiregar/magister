
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
			<div class="">
				<?php if ($errors->has()): ?>
					<div class="row">
						<div class="col-lg-12">
							<div class="alert alert-danger">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
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
						<div class="alert alert-success" style="margin-bottom:4px;">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<strong>{{Session::get('message')}}</strong>
						</div>
					</div>	
				</div>
				@endif
				<div class="row" id="hapusNotif" style="display:none;">
					<div class="col-lg-12">
						<div class="alert alert-success" style="margin-bottom:4px;">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<strong>Berhasil Menghapus Data!</strong>
						</div>
					</div>	
				</div>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-lg-12">
						{{ Form::model($sesites, array('method'=>'PUT','class'=>'form-horizontal','route' => array('tahungelombang.update',$sesites->id))) }}
						<div class="form-group">
							<legend class=""><p class="control-label col-lg-offset-1">Edit Tahun Gelombang</p></legend>
						</div>
						<div class="form-group">
							<label class="col-sm-2 col-sm-offset-1 control-label">Tahun</label>
							<div class="col-sm-3">
								<input required type="text" id="jam_awal" class="form-control" name="jam_awal">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 col-sm-offset-1 control-label">Semester</label>
							<div class="col-sm-3">
								<input required type="text" id="jam_akhir" class="form-control" name="jam_akhir">
							</div>
						</div>				
						<div class="form-group">
							<div class="col-sm-2 col-sm-offset-5">
								<button type="submit" class="btn btn-primary">Update</button>
							</div>
						</div>
						{{Form::close()}}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>	
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
	</script>
@stop