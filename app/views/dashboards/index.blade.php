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
					<div class="panel-heading">Dashboard</div>
					<div class="panel-body">
						<table data-toggle="table" data-url="tables/data2.json" class="table table-hover table-bordered">
						    <thead>
						    <tr>
						        <th>Nama</th>
						        <th>Tahun</th>
						        <th>Semester</th>
						        <th>Gelombang</th>
						        <th>Prodi</th>
						        <th>Konsentrasi</th>
						        <th align="center">Aksi</th>
						    </tr>
						    </thead>
						    <tbody>
						    	@foreach ($dashboards as $element)
						    		<tr>
						    			<td>{{$element->pendaftar->nama}}</td>
						    			<td>{{$element->tahun}}</td>
						    			<td>{{$element->semester}}</td>
						    			<td>{{$element->gelombang}}</td>
						    			<td>{{$element->studi->prodi}}</td>
						    			<td>{{$element->konsentrasi->konsentrasi}}</td>
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