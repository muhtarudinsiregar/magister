@extends('layout.master')
@section('content')
	<div class="col-lg-12">
		<div class="col-lg-10 col-lg-offset-1">
			<form action="" method="POST" class="form-horizontal" role="form">
				<div class="form-group">
					<h4 class=""><strong>Langkah 1 : Program Studi</strong></h4>
				</div>
				<div class="form-group">
					<label for="tahun_akademik" class="col-sm-2 control-label">Tahun Akademik</label>
					<div class="col-sm-8">
						<h5><b>2015/2016</b></h5>
					</div>
				</div>
				<div class="form-group">
					<label for="tahun_akademik" class="col-sm-2 control-label">Semester</label>
					<div class="col-sm-8">
						<h5><b>1 - Ganjil</b></h5>
					</div>
				</div>
				<div class="form-group">
					<label for="tahun_akademik" class="col-sm-2 control-label">Gelombang</label>
					<div class="col-sm-2">
						<select name="" id="input" class="form-control" required="required">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
						</select>
					</div>
				</div>
				<hr>
				<div class="form-group">
					<label for="program" class="col-sm-2 control-label">Program</label>
					<div class="col-sm-4">
						<select name="" id="input" class="form-control" required="required">
							<option value="Magister Teknik Industri">Magister Teknik Industri</option>
							<option value="Magister Teknik Informatika">Magister Teknik Informatika</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="program" class="col-sm-2 control-label">Konsentrasi</label>
					<div class="col-sm-4">
						<select name="" id="input" class="form-control" required="required">
							<option value="Forensika Digital"></option>
							<option value="Forensika Digital">Forensika Digital</option>
							<option value="Informatika Medis">Informatika Medis</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-10 col-sm-2">
						<button type="submit" class="btn btn-default">Berikutnya</button>
					</div>
				</div>
		</form>
		</div>
	</div>
@stop