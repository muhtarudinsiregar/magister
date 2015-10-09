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
						<form action="{{url('studi')}}" method="POST" class="form-inline" role="form">
							<div class="form-group">
								<label>ID Program Studi</label>
								<input name= "id" type="text" class="form-control" id="" placeholder="ID">
							</div>
							<div class="form-group">
								<label>Program Studi</label>
								<input name= "prodi" type="text" class="form-control" id="" placeholder="Input Program Studi">
							</div>
							<button type="submit" class="btn btn-primary">Submit</button>
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
				<table data-toggle="table" data-url="tables/data2.json" class="table table-hover table-bordered">
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
							<td>{{$element->prodi}}</td>
							<td align="center">
								<button class="btn btn-primary">
									Edit
								</button>
								<button class="btn btn-danger" ic-delete-from="/studi/{{$element->id}}">
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