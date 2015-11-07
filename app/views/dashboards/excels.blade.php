<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Document</title>
	<style>
	td{
		text-align: center;
	}

	table, th, td{
		border:1px solid #000000;
	}
	</style>
</head>
<body>
	<table>
		<tbody>
			<tr>
				<td>Tahun Akademik</td>
				<td>2015/2016</td>
			</tr>
			<tr>
				<td>Semester</td>
				<td>1</td>
			</tr>
			<tr>
				<td>Gelombang</td>
				<td>3</td>
			</tr>
			<tr>
				<td style="text-align:center">No</td>
				<td style="text-align:center">Nama</td>
				<td style="text-align:center">Agama</td>
				<td style="text-align:center">Kota Tinggal</td>
				<td style="text-align:center">Magister</td>
				<td style="text-align:center">Konsentrasi</td>
				<td style="text-align:center">IPK</td>
				<td style="text-align:center">Prodi Asal</td>
				<td style="text-align:center">Jenjang</td>
				<td style="text-align:center">Akreditasi</td>
				<td style="text-align:center">Pekerjaan</td>
				<td style="text-align:center">Instansi Kerja</td>
				<td style="text-align:center">Beasiswa</td>
			</tr>
			<?php $no=1 ?>
			@foreach ($users as $element)
			<tr>
				<td>{{$no}}</td>
				<td>{{$element->pendaftar->nama}}</td>
				<td>{{$element->pendaftar->id_agama}}</td>
				<td>{{$element->pendaftar->kotakab}}</td>
				<td>{{$element->studi->prodi}}</td>
				<td>{{$element->konsentrasi->konsentrasi}}</td>
				
			</tr>
			<?php $no++; ?>
			@endforeach
		</tbody>
	</table>
</body>
</html>