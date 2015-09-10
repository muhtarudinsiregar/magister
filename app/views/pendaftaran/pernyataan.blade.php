@extends('layout.master')
@section('content')
<div class="col-lg-12">
	<div class="col-lg-10 col-lg-offset-1">
		<form action="{{ url('pendaftaran') }}" method="POST" class="form-horizontal" role="form">
			<div class="form-group">
				<h4><strong>Langkah 8 : Pernyataan</strong></h4>
			</div>
			<div class="form-group">
				<label for="" class="col-sm-7 i-custom control-label"><i>Mohon pastikan bahwa data yang anda masukkan sudah benar. </i></label>
			</div>
			<div class="form-group">
				<label for="" class="col-sm-7 i-custom control-label ">
					<p class="text-justify">
						Data yang tidak benar tidak akan diproses untuk tahap selanjutnya. 
						Bilamana kemudian dalam proses admisi ditemukan data yang tidak benar, maka proses akan dihentikan dan pendaftar dinyatakan gugur. 
					</p>
				</label>
			</div>
			<div class="form-group">
				<label for="" class="col-sm-7 i-custom control-label">
					<i>Klik tombol <strong>Sebelumnya</strong> untuk memeriksa kembali data isian anda.</i>
				</label>
			</div>
			<div class="form-group">
				<div class="col-sm-5">
					<div class="checkbox">
						<label>
							<input name='pernyataan' type="checkbox" value="1" id="pernyataan">
							Saya menyatakan bahwa data sudah benar.
						</label>
					</div>
				</div>
			</div>
			<div id="buttonPernyataan">
				<div class="form-group">
					<div class="col-sm-offset-9 col-sm-3">
						<button type="submit" class="btn btn-default">Sebelumnya </button>
						<button type="submit" class="btn btn-default" id="kirim" disabled="disable">Kirim</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
@stop