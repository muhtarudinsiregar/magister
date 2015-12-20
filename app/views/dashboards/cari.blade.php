@if (!empty($data_pendaftaran))
@foreach ($data_pendaftaran as $element)
<tr id='tr-{{$element->no}}'>
	<td>
		<a class="" target="_blank" href="{{ url('validasis/'.$element->no) }}">{{$element->pendaftar->nama}}</a>
	</td>
	<td>
		<?php 
		$tanggal = $element->waktu;
		$tanggal = explode(" ", $tanggal);
		$tahun = date('d-m-Y',strtotime($tanggal[0]));
		// echo $tahun;
		$string = "2015-12-04";
		$string = strtotime($string);
		echo $tahun;
		?>
	</td>
	<td>
		<?php 
		$tanggal = $element->waktu;
		$tanggal = explode(" ", $tanggal);
		echo $tanggal[1];
		?>
	</td>
	<td>{{$element->studi->prodi}}</td>
	{{-- <td>{{$element->id_prodi}}</td> --}}
	<td>{{$element->konsentrasi->konsentrasi}}</td>
	<td>
		<input type="checkbox" disabled value="1" name="jenjang" {{($element->validasi =='1')?'checked="checked"':''}}>
	</td>
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
