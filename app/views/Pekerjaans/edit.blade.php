@extends('layout.master_edit')
@section('content')
<div class="col-lg-12">
	<div class="col-lg-10 col-lg-offset-1">
		{{ Form::model($edit, array('method'=>'PUT','class'=>'form-horizontal','route' => array('pekerjaan.update', $edit->id))) }}
			<div class="form-group">
				<h4><strong>Langkah 4 : Pekerjaan</strong></h4>
			</div>
			<div class="form-group">
				<div class="col-sm-3">
					<div class="checkbox">
						<label>
							<input type="checkbox" value="y" id="statusKerja" name="sttskrja">
							Saat ini tidak bekerja
						</label>
					</div>
				</div>	
				{{-- <label for="tahun_akademik" class="col-sm-2 control-label">Posisi </label> --}}
			</div>
			<div id="inputPekerjaan">
				<div class="form-group">
					<label for="" class="col-sm-2 control-label">Posisi </label>
					<div class="col-sm-4">
						<input type="text" name="pos" id="input" class="form-control" required="required" value="{{ $edit->posisi }}">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-2 control-label">Institusi </label>
					<div class="col-sm-4">
						<input type="text" name="ins" id="input" class="form-control" required="required" value="{{ $edit->institusi }}">
					</div>
				</div>
				<br>
				<div class="form-group">
					<label for="" class="col-sm-2 control-label">Alamat </label>
					<div class="col-sm-4">
						<input type="text" name="almt" id="input" class="form-control" required="required" value="{{ $edit->alamat }}">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-2 control-label">Kabupaten/kota </label>
					<div class="col-sm-4">
						<input type="text" name="kotkab" id="input" class="form-control" required="required" value="{{ $edit->kotakab }}">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-2 control-label">Propinsi </label>
					<div class="col-sm-4">
						<input type="text" name="prop" id="input" class="form-control" required="required" value="{{ $edit->propinsi }}">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-2 control-label">Negara </label>
					<div class="col-sm-4">
						<input type="text" name="neg" id="input" class="form-control" required="required" value="{{ $edit->negara }}">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-2 control-label">No. telepon </label>
					<div class="col-sm-4">
						<input type="text" name="notel" id="input" class="form-control" required="required" value="{{ $edit->noTelepon }}">
					</div>
				</div>
		
				<div class="form-group">
					<label for="" class="col-sm-2 control-label">No. faksimili </label>
					<div class="col-sm-4">
						<input type="text" name="nofax" id="input" class="form-control" required="required" value="{{ $edit->noFaximile }}">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-2 control-label">Email </label>
					<div class="col-sm-4">
						<input type="text" name="mail" id="input" class="form-control" required="required" value="{{ $edit->email }}">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-2 control-label">Tahun Kerja </label>
					<div class="col-sm-1">
						<input type="text" name="thnkrj" id="input" class="form-control" required="required" value="{{ $edit->tahunMulai }}">
					</div>
					<label for="" class="col-sm-2 control-label">Tahun </label>
				</div>
			</div>

			<hr>
			
			<div class="form-group">
				<h5>Riwayat Pekerjaan (Jika Ada)</h5>
			</div>
			<div id="riwayat">
				@foreach ($data as $element)
					<div class="form-group">
						<label for="" class="col-sm-1 control-label">Posisi </label>
						<div class="col-sm-2">
							<input type="text" name="pos_riw[]" id="input" class="form-control" required="required" value="{{ $element->posisi }}">
						</div>
						<label for="" class="col-sm-1 control-label">Institusi </label>
						<div class="col-sm-3">
							<input type="text" name="ins_riw[]" id="input" class="form-control" required="required" value="{{ $element->institusi }}">
						</div>
						<label for="" class="col-sm-2 control-label">Masa Kerja </label>
						<div class="col-lg-1">
							<input type="text" name="th_riw[]" id="input" class="form-control" required="required" value="{{ $element->masaKerja }}">
						</div>
						<label for="" class="col-sm-1 control-label">tahun</label> 
						<button class="btn btn-danger" type="button" id="hapusPekerjaan"><i class="glyphicon glyphicon-remove"></i></button>
					</div>
				@endforeach
			</div>
			<div class="form-group">
				<div class="col-sm-3">
					<button type="button" class="btn btn-default" id="tambahPekerjaan">Tambah Pekerjaan</button>
				</div>
			</div>
			</div>
			{{-- butttonnnnnnnnnnnnnnnnnnnnnnnnnnn --}}
			<div class="form-group">
				<div class="col-sm-offset-9 col-sm-3">
					<button type="button" class="btn btn-default">Sebelumnya </button>
					<button type="submit" class="btn btn-default">Berikutnya</button>
				</div>
			</div>
		</form>
	</div>
</div>
@stop
@section('script')
<script type="text/javascript">
	$(function() {		
		$("#tambahPekerjaan ").click(function(e){
                e.preventDefault();
                $("#riwayat").append('<div class="form-group"><label for="" class="col-sm-1 control-label">Posisi </label><div class="col-sm-2"><input type="text" name="pos_riw[]" id="input" class="form-control" required="required"></div><label for="" class="col-sm-1 control-label">Institusi </label><div class="col-sm-3"><input type="text" name="ins_riw[]" id="input" class="form-control" required="required"></div><label for="" class="col-sm-2 control-label">Masa Kerja </label><div class="col-lg-1"><input type="text" name="th_riw[]" id="input" class="form-control" required="required"></div><label for="" class="col-sm-1 control-label">tahun</label><button class="btn btn-danger" type="button" id="hapusPekerjaan"><i class="glyphicon glyphicon-remove"></i></button></div>');
            });
            $(document).on("click","#hapusPekerjaan",function(){
                $(this).parent().remove();
            });
	});	
</script>

@stop

