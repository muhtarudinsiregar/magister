<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta name="viewport" content="width=device-width"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" href=""> <!-- For testing only -->

	<style type="text/css">

		/* Ink styles go here in production */

	</style>
	<style type="text/css">
		.logo{
			width:300px;
			height: auto;
			
		}

		td{
			padding-left:1em;
			padding-right: 1em;
			/*padding-top: 0.2em;*/
			text-align: justify;
			/*width: 10em;*/
			/*display: inline-block;*/
		}
		td .kolom{
			width: 1px;
		}


		p{
			text-align: justify;
			line-height: 1.1em;
			font-size: 0.95em;
			/*color:#CCC;*/
			margin: 0 0 6px 0;
			/*font-family:"Franklin Gothic Medium","Arial Narrow Bold",Arial,sans-serif;*/
		}
		table{
			width: 620px;
			border: 1px;
			/*display: inline-block;*/
		}
		tr{
			width: 100px;
		}
		body{
			width: 620px;
		}
		img{
			/*padding-left: 1em;*/
		}
		*{
			/*line-height: 17px;*/
			font-family: "arial, arial, verdana, sans-serif";
		}
		tr .batas td{
			padding-top: 1em;
		}
		.form_daftar{
			font-size: 32px;
			margin-top: 1px;
		}
	</style>
</head>
<body>
	<table class="body" cellpadding="0" cellspacing="10" style="width:100%; font-size: 14px; margin: 0; padding: 0;">
		<tbody>
			<tr>
				<td colspan="3">
					<img class="logo" src="{{ asset('images/logofulls2.png') }}">
				</td>
			</tr>
			<tr>
				<td class="" colspan="3">
					<p class="form_daftar">Formulir Pendaftaran</p>
				</td>
			</tr>
			<tr>
				<td class="kolom">TAHUN</td>
				<td>:</td>
				<td>{{$tahun}}</td>
			</tr>
			<tr>
				<td>SEMESTER</td>
				<td>:</td>
				<td>{{$semester}}</td>
			</tr>
			<tr>
				<td>GELOMBANG</td>
				<td>:</td>
				<td>{{$gelombang}}</td>
			</tr>
			<tr class="batas">
				<td>PROGRAM</td>
				<td>:</td>
				<td>{{$prodi}}</td>
			</tr>
			<tr>
				<td>KONSENTRASI</td>
				<td>:</td>
				<td>{{$konsentrasi}}</td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td>{{$nama}}</td>
			</tr>
			<tr>
				<td>Tempat Lahir</td>
				<td>:</td>
				<td>{{$tempatLahir}}</td>
				<td></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td>:</td>
				<td>{{$tanggalLahir}}</td>
				<td>Jenis Kelamin :</td>
				<td>{{$jenisKelamin}}</td>
			</tr>
			<tr>
				<td>No Telp</td>
				<td>:</td>
				<td>{{$noHP}}</td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td>{{$email}}</td>
			</tr>
			<tr>
				<td colspan="2">
					<strong>Alamat di Yogyakarta</strong>
				</td>
			</tr>
			<tr>
				<td style="height:60px;" colspan="3">
					{{$alamatYk}}
				</td>
				<td><strong>Telp:</strong></td>
				<td>{{$noTelpYK}}</td>
			</tr>
			<tr>
				<td colspan="2">
					<strong>Alamat di Luar Yogyakarta</strong>
				</td>
			</tr>
			<tr>
				<td style="height:60px;" colspan="3">
					{{$alamat}}, {{$kotakab}}, {{$propinsi}}, {{$negara}} 
				</td>
				<td><strong>Telp:</strong></td>
				<td>{{$noTelepon}}</td>
			</tr>
			<tr>
				<td colspan="7">
					<p>
						Saya menyatakan bahwa semua keterangan pada 

						formulir ini dan formulir online 

						saya berikan dengan penuh kesadaran, kejujuran, dan kebenaran, untuk itu saya

						bertanggung-jawab atas segala akibatnya.
					</p>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<p>
						Ditandatangani di: ..........
					</p>
				</td>
				<td>
					<p></p>
				</td>
				<td colspan="2">
					<p>
						tanggal ..........
					</p>
				</td>
			</tr>
			<tr>
				<td>
					<p style="margin-top:5em">{{$nama}}</p>
				</td>
			</tr>
		</tbody>
	</table>
</body>