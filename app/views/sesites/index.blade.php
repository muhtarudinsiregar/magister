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
			<div class="panel-body">
				<div class="row">
					<div class="col-lg-12">
						<form action="{{url('sesites')}}" method="POST" class="" role="form">
							<div class="col-lg-3" style="padding-left:0px;">
								<div class="form-group">
									<label></label>
									<select name="" id="input" class="form-control" required="required">
										<option value=""></option>
									</select>
								</div>
							</div>
							<div class="col-lg-1">
								<label for=""></label>
								<div class="" style="boder:0px;">
									S/D
								</div>
							</div>
							<div class="col-lg-2">
								<div class="form-group">
									<label></label>

									<input name= "id" type="text" class="form-control" id="" placeholder="ID">
								</div>
							</div>
							<div class="col-lg-1">
								<div class="form-group">
									<label for=""></label>
									<button type="submit" class="btn btn-primary">Tambah</button>
								</div>
							</div>
						</form>
					</div>
				</div>
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
			</div>
			<div class="panel-body">
				<table class="table table-hover table-bordered">
					<thead>
						<tr>
							<th>Sesi</th>
							<th style="text-align:center">Aksi</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($sesites as $element)
						<tr>
							<td>{{$element->sesi}}</td>
							<td align="center">
								<button class="btn btn-primary">
									Edit
								</button>
								<button class="btn btn-danger" ic-delete-from="/sesites/{{$element->id}}">
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

@stop