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
						<form action="{{url('cariPendaftar')}}" method="POST" class="form-inline" role="form">
							<div class="form-group">
								<label>Tahun</label>
								<select  name="tahun" id="tahun" class="form-control" required="required">
									@foreach ($tahun as $element)
									<option value="{{$element->tahun}}">{{$element->tahun}}</option>
									@endforeach
								</select>
							</div>
							<div class="form-group">
								<label>Semester</label>
								<select  name="semester" id="semester" class="form-control" required="required">
									@foreach ($semester as $element)
									<option value="{{$element->semester}}">{{$element->semester}}</option>
									@endforeach
								</select>
							</div>
							<div class="form-group">
								<label>Gelombang</label>
								<select name="gel" id="gelombang" class="form-control" required="required">
									@foreach ($gelombang as $element)
									<option value="{{$element->gelombang}}">{{$element->gelombang}}</option>
									@endforeach
								</select>
							</div>
							<button type="button" class="btn btn-primary tes" id="filter">Submit</button>
						</form>
					</div>
				</div>
			</div>
			<div class="panel-body">
				<table class="table table-hover table-bordered" id="records_table">
					<thead>
						<tr>
							<th>Nama</th>
							<th>Prodi</th>
							<th>Konsentrasi</th>
							{{-- <th align="center">Aksi</th> --}}
						</tr>
					</thead>
					<tbody id="output">
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div><!--/.row-->
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">Dashboard</div>
			<div class="panel-body">
				<table class="table table-hover table-bordered">
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
<script>
	var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
	// $(document).ready(function(){	
	// 	$("#filter").click(function(){
	// 		var formData = {
	// 			tahun : $('#tahun').val(),
	// 			semester : $('#semester').val(),
	// 			gelombang : $('#gelombang').val()
	// 		};
	// 		$.ajax({
	// 			type:"POST",
	// 			url:"{{ url('cariPendaftar') }}",
	// 			data:formData,
	// 			success:function(data){
	// 				 // $("#output").html(data);
	// 				console.log(data);
	// 			}
	// 		})
	// 	});
	// });
$("#filter").click(function(){
	var cari = '<?php echo URL::to("cariPendaftar"); ?>';
	var formData = {
		tahun : $('#tahun').val(),
		semester : $('#semester').val(),
		gelombang : $('#gelombang').val()
	};
	$.ajax({
		url:cari,
		type:'GET',
		dataType:"HTML",
		data:formData
	}).done(
	function(data)
	{
		$("#output").html(data);
	});
});
</script>
@stop
