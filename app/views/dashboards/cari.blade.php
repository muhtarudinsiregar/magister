	@foreach ($data_pendaftaran as $element)
	<tr id='tr-{{$element->no}}'>
		<td>{{$element->pendaftar->nama}}</td>
		<td>{{$element->studi->prodi}}</td>
		{{-- <td>{{$element->id_prodi}}</td> --}}
		<td>{{$element->konsentrasi->konsentrasi}}</td>
	</tr>
	@endforeach