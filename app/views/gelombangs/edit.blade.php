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
						{{ Form::model($gelombang, array('method'=>'PUT','class'=>'form-horizontal','route' => array('tahungelombang.update',$gelombang->id))) }}
						<div class="form-group">
							<legend class=""><p class="control-label col-lg-offset-1">Edit Tahun Gelombang</p></legend>
						</div>
						<div class="form-group">
							<label class="col-sm-2 col-sm-offset-1 control-label">Tahun</label>
							<div class="col-sm-3">
								<input name="tahun" type="text" class="form-control" name="id" value="{{$gelombang->tahun}}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 col-sm-offset-1 control-label">Semester</label>
							<div class="col-sm-3">
								<input name="semester" type="text" class="form-control" name="prodi" value="{{$gelombang->semester}}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 col-sm-offset-1 control-label">Gelombang</label>
							<div class="col-sm-3">
								<input name="gelombang" type="text" class="form-control" name="prodi" value="{{$gelombang->gelombang}}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 col-sm-offset-1 control-label">Biaya</label>
							<div class="col-sm-3">
								<input name="biaya" type="text" class="form-control" name="prodi" value="{{$gelombang->biaya}}">
							</div>
						</div>	
						<div class="form-group">
							<label class="col-sm-2 col-sm-offset-1 control-label">Tanggal Tutup</label>
							<div class="col-sm-3">
								<input name="tanggalTutup" type="text" class="form-control" name="prodi" value="{{$gelombang->tanggalTutup}}">
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