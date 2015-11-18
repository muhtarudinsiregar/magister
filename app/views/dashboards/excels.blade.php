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
				<td>{{$users[0]['tahun']}}</td>
			</tr>
			<tr>
				<td>Semester</td>
				<td>{{$users[0]['semester']}}</td>
			</tr>
			<tr>
				<td>Gelombang</td>
				<td>{{$users[0]['gelombang']}}</td>
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

			@foreach ($users as $key => $element)
			<tr>
				<td>{{$no}}</td>
				<td>{{$users[$key]['nama']}}</td>
				<td>{{$users[$key]['agama_rel']['agama']}}</td>
				<td>{{$users[$key]['kotakab']}}</td>
				<td>{{$users[$key]['prodi']}}</td>
				<td>{{$users[$key]['konsentrasi']}}</td>
				<td>{{$users[$key]['pendidikan'][0]['IPK']}}</td>
				<td>{{$users[$key]['pendidikan'][0]['programStudi']}}</td>
				<td>{{$users[$key]['pendidikan'][0]['jenjang']}}</td>
				<td>{{$users[$key]['pendidikan'][0]['akreditasi']}}</td>
				<td>{{$users[$key]['pekerjaan'][0]['posisi']}}</td>
				<td>
					@if (is_null($users[$key]['pekerjaan'][0]['institusi']))
						Tidak Bekerja
					@else
					 	{{$users[$key]['pekerjaan'][0]['institusi']}}
					@endif
				</td>
				<td>{{$users[$key]['pendidikan'][0]['PT']}}</td>
			</tr>
			<?php $no++; ?>
			@endforeach
		</tbody>
	</table>
</body>
</html>