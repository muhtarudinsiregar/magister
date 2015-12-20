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
					<form action="{{ url('validasi/'.$validasi->no) }}" method="POST" class="form-horizontal" role="form">
						<div class="col-lg-12 pull-left">
							<h4><b>Lampiran</b></h4>
						</div>
						<div class="col-lg-12">
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
													<input type="hidden" value="0" name="form_pendaftaran">
													<input type="checkbox" value="1" name="form_pendaftaran" {{($validasi->validasi =='1')?'checked="checked"':''}}>
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
													<input type="hidden" value="0" name="bukti">
													<input type="checkbox" value="1" name="bukti" {{($validasi->validasi =='1')?'checked="checked"':''}}>
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
													<input type="hidden" value="0" name="ijazah">
													<input type="checkbox" value="1" name="ijazah" {{($validasi->validasi =='1')?'checked="checked"':''}}>
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
													<input type="hidden" value="0" name="transkrip">
													<input type="checkbox" value="1" name="transkrip" {{($validasi->validasi =='1')?'checked="checked"':''}}>
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
													<input type="hidden" value="0" name="rekomendasi">
													<input type="checkbox" value="1" name="rekomendasi" {{($validasi->validasi =='1')?'checked="checked"':''}}>
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
													<input type="hidden" value="0" name="foto3">
													<input type="checkbox" value="1" name="foto3" {{($validasi->validasi =='1')?'checked="checked"':''}}>
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
													<input type="hidden" value="0" name="foto4">
													<input type="checkbox" value="1" name="foto4" {{($validasi->validasi =='1')?'checked="checked"':''}}>
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
													<input type="hidden" value="0" name="surat_kesehatan">
													<input type="checkbox" value="1" name="surat_kesehatan" {{($validasi->validasi =='1')?'checked="checked"':''}}>
												</label>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>

						<div class="col-lg-12">
							<h4><b>Data</b></h4>
						</div>
						<div class="col-md-12">
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
													<input type="hidden" value="0" name="program_studi">
													<input type="checkbox" value="1" name="program_studi" {{($validasi->validasi =='1')?'checked="checked"':''}}>
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
													<input type="hidden" value="0" name="akreditasi">
													<input type="checkbox" value="1" name="akreditasi" {{($validasi->validasi =='1')?'checked="checked"':''}}>
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
													<input type="hidden" value="0" name="ipk">
													<input type="checkbox" value="1" name="ipk" {{($validasi->validasi =='1')?'checked="checked"':''}}>
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
													<input type="hidden" value="0" name="jenjang">
													<input type="checkbox" value="1" name="jenjang" {{($validasi->validasi =='1')?'checked="checked"':''}}>
												</label>
											</div>
										</td>
									</tr>
									{{-- <tr>
										<td colspan="4">
											<div class="checkbox checbox-custom pull-right">
												<label for="">
												<input type="checkbox" id="checkAll">
													Checklist Semua
												</label>
											</div>
										</td>
									</tr> --}}
								</tbody>
							</table>
							<button type="submit" class="btn btn-large btn-block btn-primary">Validasi</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@stop
{{-- @section('script')
<script>
	$("#checkAll").click(function () {
		$('input:checkbox').not(this).prop('checked', this.checked);
	});
</script>
@stop --}}