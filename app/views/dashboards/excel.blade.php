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
				<td colspan="3"><h1>Data Pendaftar</h1></td>
			</tr>
			<tr>
				<td style="text-align:center">Nama</td>
				<td style="text-align:center">Prodi</td>
				<td style="text-align:center">Konsentrasi</td>
			</tr>

			@foreach ($users as $element)
			<tr>
				<td>{{$element->pendaftar->nama}}</td>
				<td>{{$element->studi->prodi}}</td>
				<td>{{$element->konsentrasi->konsentrasi}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>