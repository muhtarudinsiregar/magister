@if (!empty($data_pendaftaran))
@foreach ($data_pendaftaran as $element)
<tr id='tr-{{$element->no}}'>
	<td>
		<a class="" target="_blank" href="{{ url('validasis/'.$element->no) }}">{{$element->pendaftar->nama}}</a>
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
