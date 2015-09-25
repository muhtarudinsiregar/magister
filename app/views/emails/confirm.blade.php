<!-- Inliner Build Version 4380b7741bb759d6cb997545f3add21ad48f010b -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
<html><body>
<h2>Konfirmasi Email</h2>
<div>
	<h5>Assalamu&rsquo;alaikum wr. wb.</h5>
	<p>Anda telah mendaftar di Program Pascasarjana Fakultas Teknologi Industri Universitas Islam Indonesia.</p>
	<table>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td>{{$nama}}</td>
		</tr>
		<tr>
			<td>Tanggal lahir</td>
			<td>:</td>
			<?php 
				$phpdate = strtotime( $tanggalLahir );
				$tanggalLahir = date( 'd-m-Y', $phpdate );
			 ?>
			<td>{{$tanggalLahir}}</td>
		</tr>
		<tr>
			<td>Telepon</td>
			<td>:</td>
			<td>{{$noTelepon}}</td>
		</tr>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td>{{$email}}</td>
		</tr>
		<tr>
			<td>Program</td>
			<td>:</td>
			<td>{{ $prodi }} / {{$konsentrasi}}</td>
		</tr>
		<br><tr>
		<td>Tahun</td>
		<td>:</td>
		<td>{{$tahun}}</td>
	</tr>
	<tr>
		<td>Semester</td>
		<td>:</td>
		<td>{{$semester}}</td>
	</tr>
	<tr>
		<td>Gelombang</td>
		<td>:</td>
		<td>{{$gelombang}}</td>
	</tr>
</table>
<h5>Tahap Berikutnya</h5>
<ol>
	<li>Pembayaran biaya pendaftaran</li>
	<p>Pembayaran dapat dilakukan secara langsung atau melalui transfer ke:  </p>
	<p>Bank [masih perlu dikonfirmasi ulang]</p>
	<p>No. rekening [masih perlu dikonfirmasi ulang]</p>
	<p>Nama [masih perlu dikonfirmasi ulang]</p>
	<li>Penyerahan/pengiriman berkas</li>
</ol>
<ul type="disc">
	<li>Form pendaftaran (lihat lampiran) yang telah ditandatangani</li>
	<li>Bukti pembayaran biaya pendaftaran</li>
	<li>Fotokopi ijazah S1/D4 yang telah dilegalisir</li>
	<li>Fotokopi transkrip S1/D4 yang telah dilegalisir</li>
	<li>Surat pengalaman kerja (khusus bagi pendaftar dengan IPK kurang dari 2,75).</li>
	<li>Rekomendasi dari pembimbing akademik/tugas akhir saat S1/D4</li>
	<li>Rekomendasi dari pimpinan/atasan (bagi yang masih bekerja)</li>
	<li>Pas foto berwarna 3x4 cm (2 lembar) dan 4x6 cm (2 lembar)</li>
	<li>Surat keterangan kesehatan dari dokter</li>
</ul>
<h5>Berkas diserahkan/dikirimkan kepada :</h5>
<p><strong>Direktur Program Pascasarjana</strong></p>
<p>Fakultas Teknologi Industri Universitas Islam Indonesia</p>
<p>Gedung KH. Mas Mansur, Kampus Terpadu </p>
<p>Jl. Kaliurang KM 14,5 Sleman 55584 Yogyakarta </p>
<li>Mengikuti ujian potensi akademik. Jadwal akan dikonfirmasi kemudian.</li>
<p>Terimakasih atas perhatian Anda.</p>
<p>Wassalamu&rsquo;alaykum wr. wb.</p>
<p>Program Pascasarjana </p>
<p>Fakultas Teknologi Industri Universitas Islam Indonesia</p>

</div>
</body></html>
