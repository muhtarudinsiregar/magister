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
					<div class="col-lg-2">
						<form action="{{url('exportToExcel')}}" method="POST">
							<div class="form-group">
								<label>Tahun</label>
								<select  name="tahun" id="tahun" class="form-control" required="required">
									@foreach ($tahun as $element)
									<option value="{{$element->tahun}}">{{$element->tahun}}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="col-lg-1">
							<div class="form-group">
								<label>Semester</label>
								<select  name="semester" id="semester" class="form-control" required="required">
									@foreach ($semester as $element)
									<option value="{{$element->semester}}">{{$element->semester}}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="col-lg-1">
							<div class="form-group">
								<label>Gelombang</label>
								<select name="gelombang" id="gelombang" class="form-control" required="required">
									@foreach ($gelombang as $element)
									<option value="{{$element->gelombang}}">{{$element->gelombang}}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="form-group">
								<label>Program Studi</label>
								<select name="studi" id="studi" class="form-control" required="required">
									@foreach ($studi as $element)
									<option value="{{$element->id}}">{{$element->prodi}}</option>
									@endforeach
								</select>
							</div>
						</div>
						
						<div class="col-lg-1">
							<div class="form-group">
								<label style="color:white;">Cari</label>
								<button type="button" class="btn btn-primary tes" id="filter">Cari <span class="fa fa-search"></span></button>
							</div>
						</div>
					</div>
					<table class="table table-hover table-bordered table-responsive text-center" id="records_table">
						<thead>
							<tr>
								<th class="text-center">Nama</th>
								<th class="text-center">Prodi</th>
								<th class="text-center">Konsentrasi</th>
								{{-- <th align="center">Aksi</th> --}}
							</tr>
						</thead>
						<tbody id="output">
						</tbody>
					</table>
					<button id="export" class="btn btn-success" type="submit"><span class="fa fa-download"></span> Export Ke Excel</button>
				</div>
			</form>
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
$("#export").hide();
$("#filter").click(function(){
	var cari = '<?php echo URL::to("cariPendaftar"); ?>';
	var formData = {
		tahun : $('#tahun').val(),
		semester : $('#semester').val(),
		gelombang : $('#gelombang').val(),
		studi : $('#studi').val(),
		konsentrasi : $('#konsentrasi').val()
	};
	$.ajax({
		url:cari,
		type:'GET',
		dataType:"HTML",
		data:formData
	}).done(
	function(data)
	{
		if (data==0) {
			alert("data tidak ada");
		}else{
			$("#output").html(data);
			$("#export").show();
		}
	});
});
$("#konsentrasi").chained("#studi");
</script>
@stop
