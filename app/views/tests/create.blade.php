@extends('layout.master')
@section('content')
<div class="col-lg-12">
	<div id="profesi">
		
		@foreach ($profesi as $element)
		{{ Form::model($element, array('method'=>'delete','class'=>'form-horizontal','route' => array('pendidikan.destroy', $element->id))) }}
		<div class="form-group"  ic-confirm="Anda yakin akan menghapus data ini?" ic-target="form-group">
			<label for="tahun_akademik" class="col-sm-1 control-label" id="">Asosiasi</label>
			<div class="col-sm-3">
				<input type="text" name="asosiasi[]" id="input" class="form-control" id="asosiasi" value="{{ $element->asosiasi }}">
			</div>
			<label for="tahun_akademik" class="col-sm-2 control-label">No. anggota  </label>
			<div class="col-sm-2" id="no_anggota">
				<input type="text" name="no_anggota[]" id="input" class="form-control" id="no_anggota" value="{{ $element->noAnggota }}">
			</div>
			<button class="btn btn-danger"  type="submit" id="hapusProfesi1">
				Hapus
				<i class="ic-indicator fa fa-spinner fa-spin" style="display: none"></i>
			</button>
			{{-- <a href="{{url('pendidikan/'.$element->id)}}" class="btn btn-danger" ic-delete-from="" >Hapus</a> --}}
		</div>
		{{Form::close()}}
		@endforeach
	</div>
</div>
@stop