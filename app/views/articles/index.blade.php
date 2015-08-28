@extends('layout.master')
@section('content')
<div class="col-lg-12">
	<div class="col-lg-offset-1 col-lg-10">
		<div class="panel panel-info">
			<div class="panel-heading">
				<h3 class="panel-title">A. Data Pribadi</h3>
			</div>
			<div class="panel-body">
				<form action="" method="POST" role="form">
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								<label for="exampleInputEmail1">Nama Lengkap</label>
								<input type="text" name="" id="input" class="form-control" value="" required="required" pattern="" title="Nama Lengkap">
								<h6 class="h6-custom">
									<label for="exampleInputEmail1">Nama Lengkap dan Gelar Akademik</label>
								</h6>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-2">
							<div class="form-group">
								<label for="exampleInputEmail1">Tempat/Tgl Lahir</label>
								<input type="text" name="" id="input" class="form-control" value="" required="required" pattern="" title="Nama Lengkap">
							</div>
						</div>
						<div class="col-lg-1">
							<label for="exampleInputEmail1">Tanggal</label>
							<input type="text" name="" id="input" class="form-control" required="required">
						</div>
						<div class="col-lg-1">
							<label for="exampleInputEmail1">Bulan</label>
							<input type="text" name="" id="input" class="form-control" required="required">
						</div>
						<div class="col-lg-1">
							<label for="exampleInputEmail1">Tahun</label>
							<input type="text" name="" id="input" class="form-control" required="required">
						</div>
						<div class="col-lg-2">
							<div class="form-group">
								<label for="exampleInputEmail1">Jenis Kelamin</label>
								<div class="checkbox">
									<label class="checkbox-inline"><input type="checkbox" name="jk[]"value="Wanita" checked>Wanita</label>
									<label class="checkbox-inline"><input type="checkbox" name="jk[]"value="Pria">Pria</label>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-1">
							<label for="exampleInputEmail1">Agama</label>
							<div class="checkbox">
								<label class="checkbox-inline"><input type="checkbox" value="Islam">Islam</label>
							</div>
						</div>
						<div class="col-lg-1">
							<b><h4>Pilih Satu</h4></b>
						</div>
						<div class="col-lg-4">
							<div class="form-group">
								<label for="exampleInputEmail1">Status Perkawinan</label>
								<div class="checkbox">
									<label class="checkbox-inline"><input type="checkbox" value="Lajang">Lajang</label>
									<label class="checkbox-inline"><input type="checkbox" value="Menikah">Menikah</label>
									<label class="checkbox-inline"><input type="checkbox" value="Janda/Duda">Janda/Duda</label>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="panel panel-primary">
								<div class="panel-heading">
									<h3 class="panel-title">Alamat Rumah</h3>
									<h6>Alamat Rumah di Yogyakarta</h6>
								</div>
								<div class="panel-body">
									<div class="row">
										<div class="col-lg-12">
											<div class="form-group">
												<textarea name="" id="input" class="form-control" rows="3" required="required"></textarea>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-6">
											<div class="form-group">
												<input type="text" name=""class="form-control" required="required">
												<h6 class="h6-custom">
													<label for="exampleInputEmail1">Telepon</label>
												</h6>
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<input type="text" name=""class="form-control" required="required">
												<h6 class="h6-custom">
													<label for="exampleInputEmail1">Email</label>
												</h6>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="panel panel-primary">
								<div class="panel-heading">
									<h3 class="panel-title">Alamat Rumah di Luar Yogyakarta</h3>
								</div>
								<div class="panel-body">
									<div class="row">
										<div class="col-lg-12">
											<div class="form-group">
												<textarea name="" id="input" class="form-control" rows="3" required="required"></textarea>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-6">
											<div class="form-group">
												<input type="text" name=""class="form-control" required="required">
												<h6 class="h6-custom">
													<label for="exampleInputEmail1">Telepon</label>
												</h6>
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<input type="text" name=""class="form-control" required="required">
												<h6 class="h6-custom">
													<label for="exampleInputEmail1">Faksimili</label>
												</h6>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-2">
							<div class="form-group">
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@stop
