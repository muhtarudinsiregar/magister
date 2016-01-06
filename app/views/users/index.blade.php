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
							<a class="btn btn-primary" data-toggle="modal" href='#modal-id'>Tambah Admin</a>
							<br>
							<div class="modal fade" id="modal-id">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
											<h4 class="modal-title">Tambah Admin</h4>
										</div>
										<div class="modal-body">
											<form action="{{url('users')}}" method="POST" class="form-horizontal" role="form">
												<div class="form-group">
													<label class="col-sm-2 control-label">Email</label>
													<div class="col-sm-10">
														<input type="text" name="email"  class="form-control" required="required">
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label">Nama</label>
													<div class="col-sm-10">
														<input type="text" name="username"  class="form-control" required="required">
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label">Password</label>
													<div class="col-sm-10">
														<input type="password" name="password"  class="form-control" required="required">
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label">Konfirmasi Password</label>
													<div class="col-sm-10">
														<input type="password" name="pasword_conf"  class="form-control" required="required">
													</div>
												</div>						
												<div class="form-group">
													<div class="col-sm-10 col-sm-offset-2">
														<button type="submit" class="btn btn-primary">Tambah Admin</button>
													</div>
												</div>
											</form>
										</div>
										<div class="modal-footer">
											{{-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											<button type="button" class="btn btn-primary">Save changes</button> --}}
										</div>
									</div>
								</div>
							</div>
						</div>
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
					</div>
					<br>
					<table class="table table-bordered table-hover">
						<thead>
							<tr>
								<th>No</th>
								<th>Email</th>
								<th>Nama</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1; ?>
							@foreach ($data as $element)
							<tr>
								<td class="text-center">{{$no}}</td>
								<td class="text-center">{{$element->email}}</td>
								<td class="text-center">{{$element->username}}</td>
								<td align="center">
								<form class="right" method="POST" action="{{ url('users/'.$element->id) }}">
								<input type="hidden" name="_method" value="DELETE">

								<a href="{{url('users/'.$element->id.'/edit')}}" class="btn btn-primary">Edit</a>
									<button class="btn btn-danger hapus" id="{{$element->id}}">
										Hapus
										<i data="{{$element->id}}"></i>
									</button>
								</form>
								</td>
							</tr>
							<?php $no++; ?>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	@stop