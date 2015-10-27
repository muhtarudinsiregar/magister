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
			<?php if ($errors->has()): ?>
						<div class="alert alert-danger">
							<ul class="square">
								<?php foreach ($errors->all() as $error): ?>
									<li><?php echo $error; ?></li>
								<?php endforeach ?>
							</ul>
						</div>
					<?php endif ?>
			<div class="panel-body">
				{{ Form::model($studi, array('method'=>'PUT','class'=>'form-horizontal','route' => array('updateProdi'))) }}
				<div class="form-group">
					<div class="col-sm-6 col-sm-offset-2">
					<input type="text" class="form-control" name="id" value="{{$studi->id}}">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-6 col-sm-offset-2">
						<input type="text" class="form-control" name="prodi" value="{{$studi->prodi}}">
					</div>
				</div>					
				<div class="form-group">
					<div class="col-sm-10 col-sm-offset-2">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</div>
				{{Form::close()}}
			</div>
		</div>
	</div>
</div>
@stop