<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta name="viewport" content="width=device-width"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" href=""> <!-- For testing only -->
	<style type="text/css">
		.logo{
			width:300px;
			height: auto;
			
		}
		.judul{
			font-size: 2em;
			margin-top: 0.6em;
			margin-bottom: 0.3em;
			width: 288px;
		}
		body{
			width: 720px;
		}
		.row{
			width: 100%;
			height: auto;
		}
		header{
			width: 100%;
			height: auto;
		}
		.container{
			width: 100%;
			padding-left: 4em;
			padding-right: 3em;
			margin: 0px;
		}
		.col-1{
			display: inline-block;
			width: 25%;
			height: 10px;
		}
		p{
			width: auto;
		}
		.coma{
			display: inline-block;
			width: 1em;
		}
		.data-value{
			width: 15%;
		}
		*{
			/*line-height: 0.4em;*/
		}

		.tanda-tangan{
			width: 55%;
		}
		.tanggal{
			width: 100%;
		}
		.tgl{
			padding-left: 0em;
		}
		.nama-ttd{
			margin-top: 6em;
		}
		.col-alamat{
			display: inline-block;
			height: 7em;
			width: 100%;
		}
		.col-jk{
			display: inline-block;
			/*width: 25%;*/
			width: 50%;
		}
		.alamat{
			padding-top: -10px;
			margin-right: 2em;
		}
		.footer{
			margin-top: 1em;
		}
		.no-telp{
			padding-left: 1em;
		}
		.tinggi{
			height: 0.9em;
		}
		.jk{
			width: auto;
		}
		.titik-tanggal{
			padding-left: 1em;
		}
		.col-2{
			display: inline-block;
			width: 20%;
		}
		.col-3{
			display: inline-block;
			width: 30%;
		}
		.col-4{
			display: inline-block;
			width: 40%;
		}
		.col-5{
			display: inline-block;
			width: 50%;
		}
		.col-6{
			display: inline-block;
			width: 60%;
		}
		.waktu{
			width: 166px;
			height: 20%;
		}
		.offset{
			padding-left: 1em;
		}
		.col-1-offset{
			padding-left: 29%;
		}
		hr{
			margin-top: 0em;
		}
	</style>
</head>
</head>
<body>
	<div class="container">
		<div class="header">
			<div class="row">
				<img class="logo" src="{{ asset('images/logofulls2.png') }}">
			</div>
			<div class="row" style="margin-top:-1em;">
				<div class="col-4">
					<p class="judul" style="padding-top:10px">Formulir Pendaftaran</p>
				</div>
				<div class="col-2 col-1-offset" style="width:30%;">
					<div class="tanggal">
						<p style="margin-bottom:0em;">Tanggal & Jam Pendaftaran</p>
					</div>
					<div class="tanggal" style="padding-top:-10px; border-style: solid;border-width:1px;">
						<p style="padding-left:2px;margin-top:-2px; margin-bottom:0em;padding-top:10px;">{{$waktu}}</p>
					</div>
				</div>
			</div>
			<hr />
		</div>
		<div class="content">
			<div class="row">
				<div class="col-1">
					<p>TAHUN </p>
				</div>
				<div class="col-1 coma">
					<p class="coma">:</p>
				</div>
				<div class="col-1 data-value">
					<p>{{$tahun}}</p>
				</div>
			</div>
			<div class="row">
				<div class="col-1">
					<p>SEMESTER</p>
				</div>
				<div class="col-1 coma">
					<p class="coma">:</p>
				</div>
				<div class="col-1 data-value">
					<p>{{$semester}}</p>
				</div>
			</div>
			<div class="row">
				<div class="col-1">
					<p>GELOMBANG </p>
				</div>
				<div class="col-1 coma">
					<p class="coma">:</p>
				</div>
				<div class="col-1 data-value">
					<p>{{$gelombang}}</p>
				</div>
			</div>
			<br />
			<div class="row">
				<div class="col-1">
					<p>PROGRAM </p>
				</div>
				<div class="col-1 coma">
					<p class="coma">:</p>
				</div>
				<div class="col-1 data-value" style="width:50%">
					<p>{{$prodi}}</p>
				</div>
			</div>
			<div class="row">
				<div class="col-1">
					<p>KONSENTRASI </p>
				</div>
				<div class="col-1 coma">
					<p class="coma">:</p>
				</div>
				<div class="col-1 data-value" style="width:50%">
					<p>{{$konsentrasi}}</p>
				</div>
			</div>
			<div style="width:100%; padding-top:1em; padding-bottom:-10px;">
				<hr />
			</div>
			<div class="row">
				<div class="col-1">
					<p>Nama </p>
				</div>
				<div class="col-1 coma">
					<p class="coma">:</p>
				</div>
				<div class="col-1 data-value" style="width:50%">
					<p>{{$nama}}</p>
				</div>
			</div>
			<div class="row">
				<div class="col-1">
					<p>Tempat Lahir </p>
				</div>
				<div class="col-1 coma">
					<p class="coma">:</p>
				</div>
				<div class="col-1 data-value">
					<p>{{$tempatLahir}}</p>
				</div>
			</div>
			<div class="row">
				<div class="col-1">
					<p>Tanggal Lahir </p>
				</div>
				<div class="col-1 coma">
					<p class="coma">:</p>
				</div>
				<div class="col-1 data-value">
					<p>{{$tanggalLahir}}</p>
				</div>
				<div class="col-1">
					<p class="">Jenis Kelamin: {{$jenisKelamin}}</p>
				</div>
			</div>
			<div class="row">
				<div class="col-1">
					<p>No Telp </p>
				</div>
				<div class="col-1 coma">
					<p class="coma">:</p>
				</div>
				<div class="col-1 data-value">
					<p>{{$noHP}}</p>
				</div>
			</div>
			<div class="row">
				<div class="col-1">
					<p>Email </p>
				</div>
				<div class="col-1 coma">
					<p class="coma">:</p>
				</div>
				<div class="col-1 data-value">
					<p>{{$email}}</p>
				</div>
			</div>
			<br />
			<div class="row" style="margin-bottom:-12px;">
				<div class="col-alamat">
					<p>Alamat Rumah di Yogyakarta</p>
					<div class="alamat">
						<p style="text-align:justify;margin-top:-4px;">
							{{$alamatYk}} , {{$kotakabYK}}
						</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-1" style="width:100%;">
					<p style="margin-top:-15px;">No Telp : {{$noTelpYK}}</p>
				</div>
			</div>
			
			<div class="row" style="margin-top:-12px;">
				<div class="col-alamat">
					<p>Alamat Rumah di Luar Yogyakarta</p>
					<div class="alamat">
						<p style="text-align:justify;margin-top:-4px;">
							{{$alamat}}, {{$kotakab}}, {{$propinsi}}, {{$negara}}. 
						</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-1" style="margin-bottom:1em;width:100%;">
					<p style="margin-top:-15px;">No Telp : {{$noTelepon}}</p>
				</div>
			</div>
		</div>
		<hr style="margin-bottom:0em;" />
		<div class="footer">
			<div class=" row pernyataan" style="text-align:justify;">
				<p style="margin-top:0px;">
					Saya menyatakan bahwa semua keterangan pada 

					formulir ini dan formulir online 

					saya berikan dengan penuh kesadaran, kejujuran, dan kebenaran. Saya

					bertanggung-jawab atas segala akibatnya.
				</p>
			</div>
			<div class="row">
				<div class="col-1 tanda-tangan">
					<p style="margin-top:0px;">Ditandatangani di: ........................</p>
				</div>
			</div>
			<div class="row">
				<div class="col-1 tanggal">
					<p style="width:20em;">Tanggal &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:.........................</p>
				</div>
			</div>
			<div class="row">
				<div class="col-1 nama-ttd">
					<p class="">{{$nama}}</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html >