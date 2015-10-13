	@if (!empty($data_pendaftaran))
	@foreach ($data_pendaftaran as $element)
	<tr id='tr-{{$element->no}}'>
		<td>{{$element->pendaftar->nama}}</td>
		<td>{{$element->studi->prodi}}</td>
		{{-- <td>{{$element->id_prodi}}</td> --}}
		<td>{{$element->konsentrasi->konsentrasi}}</td>
	</tr>
	@endforeach
	@else
	<tr >
		<td colspan="3" align="center"><h4>Data Tidak Ada</h4></td>
	</tr>

	@endif