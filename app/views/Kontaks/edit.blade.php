@extends('layout.master_edit')
@section('content')
@if (Session::has('validator'))
	{{ $validator }}
@endif
		<?php if ($errors->has()): ?>
							<div class="alert alert-danger">
							<ul class="square">
								<?php foreach ($errors->all() as $error): ?>
									<li><?php echo $error; ?></li>
								<?php endforeach ?>
							</ul>
						</div>
					<?php endif ?>
<div class="col-lg-12">
	<div class="col-lg-10 col-lg-offset-1">
		{{ Form::model($kontak, array('method'=>'PUT','class'=>'form-horizontal','route' => array('kontaks.update', $kontak->id))) }}
			<div class="form-group">
				<h4><strong>Langkah 6 : Kontak Darurat</strong></h4>
			</div>
			<div class="form-group">
				<label for="" class="col-sm-6 i-custom control-label"><i>Bilamana terjadi keadaan darurat dengan anda, siapakah yang harus kami hubungi?</i></label>
			</div>
			<div class="form-group">
				<label for="" class="col-sm-2 control-label">Nama*</label>
				<div class="col-sm-4">
					{{ Form::text('nama',null,['class'=>'form-control']); }}
				</div>
			</div>
			<div class="form-group">	
				<label for="input" class="col-sm-2 control-label">Hubungan *</label>
				<div class="col-sm-3">
					<select name="hubungan" id="input" class="form-control" required="required">
						<option value=""></option>
						<option value="Orang Tua">Orang tua</option>
						<option value="Suami/istri">Suami/istri</option>
						<option value="Saudara">Saudara</option>
						<option value="Atasan/rekan kerja">Atasan/rekan kerja</option>
						<option value="Atasan/rekan kerja">Lainnya</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="" class="col-sm-2 control-label">Alamat* </label>
				<div class="col-sm-4">
					{{ Form::text('alamat',null,['class'=>'form-control','required'=>'required']); }}
				</div>
			</div>
			<div class="form-group">
				<label for="" class="col-sm-2 control-label">Kabupaten/kota* </label>
				<div class="col-sm-4">
				{{ Form::text('kotakab',null,['class'=>'form-control','required'=>'required']); }}
				</div>
			</div>
			<div class="form-group">
				<label for="" class="col-sm-2 control-label">Propinsi* </label>
				<div class="col-sm-4">
					{{ Form::text('propinsi',null,['class'=>'form-control','required'=>'required']); }}
				</div>
			</div>
			<div class="form-group">
				<label for="" class="col-sm-2 control-label">Negara* </label>
				<div class="col-sm-4">
					{{ Form::text('negara','Indonesia',['class'=>'form-control','required'=>'required']); }}
				</div>
			</div>
			<div class="form-group">
				<label for="" class="col-sm-2 control-label">No. telepon* </label>
				<div class="col-sm-4">
					{{ Form::text('noTelepon',null,['class'=>'form-control','required'=>'required']); }}
				</div>
			</div>
			<div class="form-group">
				<label for="" class="col-sm-2 control-label">Email* </label>
				<div class="col-sm-4">
					{{ Form::text('email',null,['class'=>'form-control','required'=>'required']); }}
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-9 col-sm-3">
					<button type="submit" class="btn btn-default">Sebelumnya </button>
					<button type="submit" class="btn btn-default">Berikutnya</button>
				</div>
			</div>
		{{ Form::close() }}
	</div>
</div>
@stop
