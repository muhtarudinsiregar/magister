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
			<div class="col-lg-12">
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
			</div>
			<div class="panel-body">
				<form action="{{url('users/'.$data->id)}}" method="POST" class="form-horizontal" role="form">
					<input type="hidden" name="_method" value="PUT">
					<h4>Ubah Data</h4>
					<div class="form-group">
						<label class="col-sm-2 control-label">Email</label>
						<div class="col-sm-10">
							<input type="text" name="email"  class="form-control" value="{{$data->email}}" required="required">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Nama</label>
						<div class="col-sm-10">
							<input type="text" name="username"  class="form-control" value="{{$data->username}}" required="required">
						</div>
					</div>
					<br>
					<h4>Ubah Password</h4>
					<div class="form-group">
						<label class="col-sm-2 control-label">Password</label>
						<div class="col-sm-10">
							<input type="password" name="password"  class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Konfirmasi Password</label>
						<div class="col-sm-10">
							<input type="password" name="pasword_conf"  class="form-control">
						</div>
					</div>						
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<button type="submit" class="btn btn-primary">Update</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@stop