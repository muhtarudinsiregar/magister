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
			margin-bottom: 0.6em;
		}
		body{
			width: 620px;
		}
		.row{
			width: 100%;
			height: auto;
		}
		.container{
			
			margin: 0px;
		}
		.col-1{
			display: inline-block;
			width: 25%;
			height: 10px;
		}
		p{
			/*margin-top: 10px;*/
		}
		.coma{
			display: inline-block;
			width: 3em;
		}
		.data-value{
			width: 30%;
		}
		*{
			/*line-height: 0.4em;*/
		}

		.tanda-tangan{
			width: 55%;
		}
		.tanggal{
			width: 40%;
		}
		.tgl{
			padding-left: 6em;
		}
		.nama-ttd{
			margin-top: 4em;
		}
		.col-alamat{
			display: inline-block;
			/*width: 25%;*/
			width: 50%;
		}
		.alamat{
			padding-top: -10px;
			margin-right: 2em;
		}
		.footer{
			margin-top: 2em;
		}
		.no-telp{
			padding-left: 1em;
		}
		.tinggi{
			height: 0.9em;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="header">
			<div class="row">
				<img class="logo" src="{{ asset('images/logofulls2.png') }}">
				<p class="judul">Formulir Pendaftaran</p>
			</div>
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
			<div class="row">
				<div class="col-1">
					<p>PROGRAM </p>
				</div>
				<div class="col-1 coma">
					<p class="coma">:</p>
				</div>
				<div class="col-1 data-value">
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
				<div class="col-1 data-value">
					<p>{{$konsentrasi}}</p>
				</div>
			</div>
			<div class="row">
				<div class="col-1">
					<p>Nama </p>
				</div>
				<div class="col-1 coma">
					<p class="coma">:</p>
				</div>
				<div class="col-1 data-value">
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
							{{$alamatYk}}
						</p>
					</div>
				</div>
				<div class="col-alamat" style="width:30%;">
					<p class="no-telp">No Telp : {{$noTelpYK}}</p>
				</div>
			</div>
			<div class="row" style="margin-top:-12px;">
				<div class="col-alamat">
					<p>Alamat Rumah di Luar Yogyakarta</p>
					<div class="alamat">
						<p style="text-align:justify;margin-top:-4px;margin-bottom:0px;">
							{{$alamat}}, {{$kotakab}}, {{$propinsi}}, {{$negara}} 
						</p>
					</div>
				</div>
				<div class="col-1" style="width:30%;">
					<p class="no-telp">No Telp : {{$noTelepon}}</p>
				</div>
			</div>
		</div>
		<div class="footer">
			<div class=" row pernyataan" style="text-align:justify;">
				<p>
					Saya menyatakan bahwa semua keterangan pada 

					formulir ini dan formulir online 

					saya berikan dengan penuh kesadaran, kejujuran, dan kebenaran, untuk itu saya

					bertanggung-jawab atas segala akibatnya.
				</p>
			</div>
			<div class="row">
				<div class="col-1 tanda-tangan">
					<p style="">Ditandatangani di: .....................</p>
				</div>
				<div class="col-1 tanggal">
					<p class="tgl">Tanggal .......................</p>
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