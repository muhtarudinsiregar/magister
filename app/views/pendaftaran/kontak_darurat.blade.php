@extends('layout.master')
@section('content')
<div class="col-lg-12">
	<div class="col-lg-10 col-lg-offset-1">
		<form action="" method="POST" class="form-horizontal" role="form">
			<div class="form-group">
				<h4>Langkah 6 : Kontak Darurat</h4>
			</div>
			<div class="form-group">
				<label for="" class="col-sm-6 i-custom control-label"><i>Bilamana terjadi keadaan darurat dengan anda, siapakah yang harus kami hubungi?</i></label>
			</div>
			<div class="form-group">
				<label for="" class="col-sm-2 control-label">Nama*</label>
				<div class="col-sm-4">
					<input type="text" name="" id="input" class="form-control" required="required">
				</div>
			</div>
			<div class="form-group">	
				<label for="input" class="col-sm-2 control-label">Hubungan *</label>
				<div class="col-sm-3">
					<select name="" id="input" class="form-control" required="required">
						<option value=""></option>
						<option value="">Orang tua</option>
						<option value="">Suami/istri</option>
						<option value="">Saudara</option>
						<option value="">Atasan/rekan kerja</option>
						<option value="">Lainnya</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="" class="col-sm-2 control-label">Alamat* </label>
				<div class="col-sm-4">
					<input type="text" name="" id="input" class="form-control" required="required">
				</div>
			</div>
			<div class="form-group">
				<label for="" class="col-sm-2 control-label">Kabupaten/kota* </label>
				<div class="col-sm-4">
					<input type="text" name="" id="input" class="form-control" required="required">
				</div>
			</div>
			<div class="form-group">
				<label for="" class="col-sm-2 control-label">Propinsi* </label>
				<div class="col-sm-4">
					<input type="text" name="" id="input" class="form-control" required="required">
				</div>
			</div>
			<div class="form-group">
				<label for="" class="col-sm-2 control-label">Negara* </label>
				<div class="col-sm-4">
					<input type="text" name="" id="input" class="form-control" required="required" value="Indonesia">
				</div>
			</div>
			<div class="form-group">
				<label for="" class="col-sm-2 control-label">No. telepon* </label>
				<div class="col-sm-4">
					<input type="text" name="" id="input" class="form-control" required="required">
				</div>
			</div>
			<div class="form-group">
				<label for="" class="col-sm-2 control-label">Email* </label>
				<div class="col-sm-4">
					<input type="text" name="" id="input" class="form-control" required="required">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-9 col-sm-3">
					<button type="submit" class="btn btn-default">Sebelumnya </button>
					<button type="submit" class="btn btn-default">Berikutnya</button>
				</div>
			</div>
		</form>
	</div>
</div>
@stop
