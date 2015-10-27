@if (!empty($data_pendaftaran))
@foreach ($data_pendaftaran as $element)
<tr id='tr-{{$element->no}}'>
	<td>
		<a class="" data-toggle="modal" href='#modal-id'>{{$element->pendaftar->nama}}</a>
		<div class="modal fade" id="modal-id">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">Modal title</h4>
					</div>
					<div class="modal-body">
						
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Save changes</button>
					</div>
				</div>
			</div>
		</div>
	</td>
	<td>{{$element->studi->prodi}}</td>
	{{-- <td>{{$element->id_prodi}}</td> --}}
	<td>{{$element->konsentrasi->konsentrasi}}</td>
</tr>
@endforeach
@else
<tr >
	<td colspan="3" align="center"><div class="alert alert-danger">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<h4>Data Tidak Ada</h4>
	</div></td>
</tr>
@endif
