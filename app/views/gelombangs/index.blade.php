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
						<form action="{{url('tahungelombang')}}" method="POST" class="" role="form">
							<div class="col-lg-2" style="padding-left:0px;">
								<div class="form-group">
									<label for="">Tahun</label>
									<input type="text" name="tahun" class="form-control" placeholder="Tahun">
								</div>
							</div>
							<div class="col-lg-1">
								<label for="">Semester</label>
								<input type="text" class="form-control" name="semester" placeholder="Sem">
							</div>
							<div class="col-lg-1">
								<div class="form-group">
									<label>Gel</label>
									<input name= "gelombang" type="text" class="form-control" id="" placeholder="Gel">
								</div>
							</div>
							<div class="col-lg-2">
								<div class="form-group">
									<label for="">Biaya</label>
									<input type="text" name="biaya" class="form-control" placeholder="Biaya"> 
								</div>
							</div>
							<div class="col-lg-2">
								<div class="form-group">
									<label for="">Tanggal Tutup</label>
									<input type="text" name="tanggalTutup" class="form-control" placeholder="Tanggal Tutup" id="tglTtp">
								</div>
							</div>
							<div class="col-lg-1">
								<div class="form-group">
									<label style="color:white;">Tambah</label>
									<button type="submit" class="btn btn-primary">Tambah</button>
								</div>
							</div>
						</form>
					</div>
				</div>
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
				<div class="row" id="hapusNotif">
					<div class="col-lg-12">
						<div class="alert alert-success" style="margin-bottom:4px;">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<strong>Berhasil Menghapus Data!</strong>
						</div>
					</div>	
				</div>
			</div>
			<div class="panel-body">
				<table  class="table table-hover table-bordered">
					<thead>
						<tr>
							<th>Tahun</th>
							<th>Semester</th>
							<th>Gelombang</th>
							<th>Biaya</th>
							<th>Tanggal Tutup</th>
							<th style="text-align:center">Aktif</th>
							<th style="text-align:center">Aksi</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($gelombang as $element)
						
						<tr class="<?php 
							if ($element->aktif=='1') {
								echo "success";
							}
						 ?>">
							<td>{{$element->tahun}}</td>
							<td>{{$element->semester}}</td>
							<td>{{$element->gelombang}}</td>
							<td>{{$element->biaya}}</td>
							<td>{{$element->tanggalTutup}}</td>
							<td style="text-align:center">
								<input type="checkbox">
							</td>
							<td align="center">
								<button class="btn btn-primary">
									Edit
								</button>
								<button class="btn btn-danger hapus" id="{{$element->id}}">
									Hapus
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
	$("#tglTtp").datepicker({
		changeYear:true,
		minDate: 0 ,
		dateFormat: "yy-mm-dd"
	});
	$(document).ready(function(){
		$('#hapusNotif').hide();
		$('.hapus').click(function(){
			var konfirmasi = confirm("Data Ingin Dihapus?");
			if (konfirmasi)
			{
				var del_id= $(this).attr('id');
				var $ele = $(this).parent().parent();
				$.ajax({
					type:'DELETE',
					url:"{{ url('tahungelombang')}}"+'/'+del_id,
					data:del_id,
					success: function(data){
						if(data=='yes'){
							console.log('success');
						}else{
							console.log('success');
							$('#hapusNotif').show();
							$ele.fadeOut().remove();
						}
					}
				})
			};
		})
	});
</script>
@stop