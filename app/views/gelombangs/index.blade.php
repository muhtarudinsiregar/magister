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
					<div class="panel-heading">Tahun Gelombang</div>
					<div class="panel-body">
						<table data-toggle="table" data-url="tables/data2.json" class="table table-hover table-bordered">
						    <thead>
						    <tr>
						        <th>Tahun</th>
						        <th>Semester</th>
						        <th>Gelombang</th>
						        <th>Biaya</th>
						        <th>Tanggal Tutup</th>
						        <th>Aktif</th>
						        <th align="center">Aksi</th>
						    </tr>
						    </thead>
						    <tbody>
						    	@foreach ($gelombang as $element)
						    		<tr>
						    			<td>{{$element->tahun}}</td>
						    			<td>{{$element->semester}}</td>
						    			<td>{{$element->gelombang}}</td>
						    			<td>{{$element->biaya}}</td>
						    			<td>{{$element->tanggalTutup}}</td>
						    			<td>{{$element->aktif}}</td>
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