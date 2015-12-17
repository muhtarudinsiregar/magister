@extends('admin.master_admin')
@section('content')
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header" style="margin-bottom:0px; margin-top:10px;">{{$title}}</h1>
	</div>
</div><!--/.row-->
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="row">
					<div class="col-lg-12">
						<h4><b>Data Pendaftar</b></h4>
					</div>
					<div class="col-lg-12">
						<table class="table table-bordered table-hover">
							<tbody>
								<tr>
									<td>Nama</td>
									<td>{{ $validasi->pendaftar->nama}}</td>
								</tr>
								<tr>
									<td>Tanggal</td>
									<td>
										<?php 
											$tanggal = $validasi->waktu;
											$tanggal = explode(" ", $tanggal);
											echo $tanggal[0];
										 ?>
									</td>
								</tr>
								<tr>
									<td>Pukul</td>
									<td>
										<?php 
											$tanggal = $validasi->waktu;
											$tanggal = explode(" ", $tanggal);
											echo $tanggal[1];
										 ?>
									</td>
								</tr>
								<tr>
									<td>Program</td>
									<td>
										{{ $validasi->studi->prodi }}
									</td>
								</tr>
								<tr>
									<td>Konsentrasi</td>
									<td>{{ $validasi->konsentrasi->konsentrasi }}</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-lg-6 pull-left">
						<h4><b>Lampiran</b></h4>
					</div>
					<div class="col-lg-6 pull-left">
						<h4><b>Data</b></h4>
					</div>
					<div class="col-lg-6">
						<table class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>No</th>
									<th>Dokumen</th>
									<th>Cacah</th>
									<th>Ada</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>
										Formulir pendaftaran yang telah ditandatangani
									</td>
									<td>
										
									</td>
									<td>
										<div class="checkbox checkbox-custom">
											<label>
												<input type="checkbox" value="">
											</label>
										</div>
									</td>
								</tr>
								<tr>
									<td>2</td>
									<td>
										Bukti pembayaran pendaftaran
									</td>
									<td>
										
									</td>
									<td>
										<div class="checkbox checkbox-custom">
											<label>
												<input type="checkbox" value="">
											</label>
										</div>
									</td>
								</tr>
								<tr>
									<td>3</td>
									<td>
										Fotokopi ijazah S1/D4 yang telah dilegalisir 
									</td>
									<td>
										<p>2 Lbr</p>
									</td>
									<td>
										<div class="checkbox checkbox-custom">
											<label>
												<input type="checkbox" value="">
											</label>
										</div>
									</td>
								</tr>
								<tr>
									<td>4</td>
									<td>
										Fotokopi transkrip S1/D4 yang telah dilegalisir dan
										Surat pengalaman kerja (jika IPK kurang dari 2,75)

									</td>
									<td>
										<p>2 Lbr</p>
									</td>
									<td>
										<div class="checkbox checkbox-custom">
											<label>
												<input type="checkbox" value="">
											</label>
										</div>
									</td>
								</tr>
								<tr>
									<td>5</td>
									<td>
										Rekomendasi dari pembimbing akademik/tugas akhir S1/D4 dan/atau dari pimpinan/atasan (bagi yang masih bekerja) 

									</td>
									<td>
										<p>2 Lbr</p>
									</td>
									<td>
										<div class="checkbox checkbox-custom">
											<label>
												<input type="checkbox" value="">
											</label>
										</div>
									</td>
								</tr>
								<tr>
									<td>6</td>
									<td>
										Pas foto berwarna 3×4 cm 
									</td>
									<td>
										<p>2 Lbr</p>
									</td>
									<td>
										<div class="checkbox checkbox-custom">
											<label>
												<input type="checkbox" value="">
											</label>
										</div>
									</td>
								</tr>
								<tr>
									<td>7</td>
									<td>
										Pas foto berwarna 4×6 cm 
									</td>
									<td>
										<p>2 Lbr</p>
									</td>
									<td>
										<div class="checkbox checkbox-custom">
											<label>
												<input type="checkbox" value="">
											</label>
										</div>
									</td>
								</tr>
								<tr>
									<td>8</td>
									<td>
										Surat keterangan kesehatan dari dokter
									</td>
									<td>
										
									</td>
									<td>
										<div class="checkbox checkbox-custom">
											<label>
												<input type="checkbox" value="">
											</label>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					{{-- <div class="col-lg-12">
						<h4><b>Data</b></h4>
					</div> --}}
					<div class="col-md-6">
						<table class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>No</th>
									<th>Item</th>
									<th>Data Input</th>
									<th>Sesuai</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Program studi</td>
									<td> {{$pendidikan->programStudi}} </td>
									<td>
										<div class="checkbox checkbox-custom">
											<label>
												<input type="checkbox" value="">
											</label>
										</div>
									</td>
								</tr>
								<tr>
									<td>2</td>
									<td>Akreditasi program studi</td>
									<td> {{$pendidikan->akreditasi}} </td>
									<td>
										<div class="checkbox checkbox-custom">
											<label>
												<input type="checkbox" value="">
											</label>
										</div>
									</td>
								</tr>
								<tr>
									<td>3</td>
									<td>IPK</td>
									<td> {{$pendidikan->IPK}} </td>
									<td>
										<div class="checkbox checkbox-custom">
											<label>
												<input type="checkbox" value="">
											</label>
										</div>
									</td>
								</tr>
								<tr>
									<td>4</td>
									<td>Jalur (S1/D4)</td>
									<td> {{$pendidikan->jenjang}} </td>
									<td>
										<div class="checkbox checkbox-custom">
											<label>
												<input type="checkbox" value="">
											</label>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
						<button type="button" class="btn btn-large btn-block btn-primary">Validasi</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop