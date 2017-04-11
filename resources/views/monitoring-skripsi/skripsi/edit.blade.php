@extends('adminlte::layouts.app')

@section('htmlheader_title')
Edit Biodata
@endsection

@section('contentheader_title')
Edit Biodata
@endsection

@section('code-header')

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script> 

@endsection

@section('main-content')
<style>
	.form-group label{
		text-align: left !important;
	}
</style>

	@foreach (['danger', 'warning', 'success', 'info'] as $msg)
	@if(Session::has('alert-' . $msg))
<div class="alert alert-{{ $msg }}">
	<p class="" style="border-radius: 0">{{ Session::get('alert-' . $msg) }}</p>
</div>
	{!!Session::forget('alert-' . $msg)!!}
	@endif
	@endforeach


<div class="row">
	<div class="col-md-12">
		<div class="">

			@if (count($errors) > 0)
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
			<br>
			<form id="tambahSkripsi" method="post" action="{{url('/monitoring-skripsi/skripsi/'.$skripsi->id_skripsi.'/edit')}}" enctype="multipart/form-data"  class="form-horizontal">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

			<!-- Menampilkan input text biasa -->
				<div class="form-group">
					<label for="NIM" class="col-sm-2 control-label">NIM</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-md" id="NIM" name="NIM" placeholder="Masukkan NIM" value="{{$skripsi->NIM}}" required>
					</div>
				</div>
				<div class="form-group">
                  <label for="id_kbk" class="col-sm-2 control-label">KBK</label>
                  <div class="col-md-8">
                  <select name="id_kbk" class="form-control" value="{{$skripsi->id_kbk}}">
                    <option id="id_kbk" name="id_kbk"  value="1" <?php if($skripsi->id_kbk=="1") echo "selected"; ?> >Data Mining</option>
                    <option id="id_kbk" name="id_kbk" value="2" <?php if($skripsi->id_kbk=="2") echo "selected"; ?> >Sistem Pengambilan Keputusan</option>
                    <option id="id_kbk" name="id_kbk" value="3" <?php if($skripsi->id_kbk=="3") echo "selected"; ?> >Information System Engineering</option>
                  </select>
                  </div>
                </div>
                <div class="form-group">
					<label for="Judul" class="col-sm-2 control-label">Judul</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-md" id="Judul" name="Judul" placeholder="Masukkan Judul" value="{{$skripsi->Judul}}" required>
					</div>
					</div>
				 <div class="form-group">
					<label for="upload_berkas_proposal" class="col-sm-2 control-label">File Proposal</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-md" id="upload_berkas_proposal" name="upload_berkas_proposal" placeholder="Masukkan Link File" value="{{$skripsi->upload_berkas_proposal}}" required>
					</div>
					</div>
               
                 <div class="form-group">
					<label for=" tanggal_pengumpulan_proposal" class="col-sm-2 control-label">Tanggal Pengumpulan Proposal</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-md" id="datepicker" name=" tanggal_pengumpulan_proposal" placeholder="Masukkan Tanggal" value="{{$skripsi->tanggal_pengumpulan_proposal}}" required>
					</div>
				</div>


                <div class="form-group">
					<label for="tgl_sidangpro" class="col-sm-2 control-label">Tanggal Sidang Proposal</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-md" id="datepicker" name="tgl_sidangpro" placeholder="Masukkan Tanggal" value="{{$skripsi->tgl_sidangpro}}" required>
					</div>
				</div>

				<div class="bootstrap-timepicker">
                <div class="form-group">
                  <label for="waktu_sidangprop" class="col-sm-2 control-label">Waktu Sidang Proposal</label>
                  <div class="col-md-8">
                  <div class="input-group">
                    <input type="text" name="waktu_sidangprop" class="form-control timepicker" value="{{$skripsi->waktu_sidangpro}}">

                    <div class="input-group-addon">
                      <i class="fa fa-clock-o"></i>
                    </div>
                  </div>
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->
              </div>


				<div class="form-group">
					<label for="tempat_sidangpro" class="col-sm-2 control-label">Tempat Sidang Proposal</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-md" id="tempat_sidangpro" name="tempat_sidangpro" placeholder="Masukkan Tempat" value="{{$skripsi->tempat_sidangpro}}" required>
					</div>
					</div>

					<div class="form-group">
                  <label for="id_statusprop" class="col-sm-2 control-label">Status Proposal</label>
                  <div class="col-md-8">
                  <select name="id_statusprop" class="form-control" value="{{$skripsi->id_statusprop}}">
                    <option id="id_statusprop" name="id_statusprop" value="1" <?php if($skripsi->id_statusprop=="1") echo "selected"; ?> >BELUM</option>
                    <option id="id_statusprop" name="id_statusprop" value="2" <?php if($skripsi->id_statusprop=="2") echo "selected"; ?>>REVISI</option>
                    <option id="id_statusprop" name="id_statusprop" value="3" <?php if($skripsi->id_statusprop=="3") echo "selected"; ?>>LULUS</option>
                  </select>
                </div>
                </div>

                <div class="form-group">
					<label for="nilai_sidangpro" class="col-sm-2 control-label">Nilai Sidang Proposal</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-md" id="nilai_sidangpro" name="nilai_sidangpro" placeholder="Masukkan Nilai" value="{{$skripsi->nilai_sidangpro}}" required>
					</div>
					</div>

					<div class="form-group">
					<label for="upload_berkas_skripsi" class="col-sm-2 control-label">File Skripsi</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-md" id="upload_berkas_skripsi" name="upload_berkas_skripsi" placeholder="Masukkan Link File" value="{{$skripsi->upload_berkas_skripsi}}" required>
					</div>
					</div>
               
                 <div class="form-group">
					<label for=" tanggal_pengumpulan_skripsi" class="col-sm-2 control-label">Tanggal Pengumpulan Skripsi</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-md" id="datepicker" name=" tanggal_pengumpulan_skripsi" placeholder="Masukkan Tanggal" value="{{$skripsi->tanggal_pengumpulan_skripsi}}" required>
					</div>
				</div>


                <div class="form-group">
					<label for="tgl_sidangskrip" class="col-sm-2 control-label">Tanggal Sidang Skripsi</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-md" id="datepicker" name="tgl_sidangskrip" placeholder="Masukkan Tanggal" value="{{$skripsi->tgl_sidangskrip}}" required>
					</div>
				</div>

				<div class="bootstrap-timepicker">
                <div class="form-group">
                  <label for="waktu_sidangskrip" class="col-sm-2 control-label">Waktu Sidang Skripsi</label>
                  <div class="col-md-8">
                  <div class="input-group">
                    <input type="text" name="waktu_sidangskrip" class="form-control timepicker" value="{{$skripsi->waktu_sidangskrip}}">

                    <div class="input-group-addon">
                      <i class="fa fa-clock-o"></i>
                    </div>
                  </div>
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->
              </div>


				<div class="form-group">
					<label for="tempat_sidangskrip" class="col-sm-2 control-label">Tempat Sidang Skripsi</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-md" id="tempat_sidangskrip" name="tempat_sidangskrip" placeholder="Masukkan Tempat" value="{{$skripsi->tempat_sidangskrip}}" required>
					</div>
					</div>

					<div class="form-group">
                  <label for="id_statusskrip" class="col-sm-2 control-label">Status Skripsi</label>
                  <div class="col-md-8">
                  <select name="id_statusskrip" class="form-control" value="{{$skripsi->id_statusskrip}}">
                    <option id="id_statusskrip" name="id_statusskrip" value="1" <?php if($skripsi->id_statusskrip=="1") echo "selected"; ?>>BELUM</option>
                    <option id="id_statusskrip" name="id_statusskrip" value="2" <?php if($skripsi->id_statusskrip=="2") echo "selected"; ?>>REVISI</option>
                    <option id="id_statusskrip" name="id_statusskrip" value="3" <?php if($skripsi->id_statusskrip=="3") echo "selected"; ?>>LULUS</option>
                  </select>
                  </div>
                </div>

                <div class="form-group">
					<label for="nilai_sidangskrip" class="col-sm-2 control-label">Nilai Sidang Skripsi</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-md" id="nilai_sidangskrip" name="nilai_sidangskrip" placeholder="Masukkan Nilai" value="{{$skripsi->nilai_sidangskrip}}" required>
					</div>
					</div>

					<div class="form-group">
                  <label for="is_verified" class="col-sm-2 control-label">Status Konsultasi</label>
                  <div class="col-md-8">
                  <select name="is_verified" class="form-control" value="{{$skripsi->is_verified}}">
                    <option id="is_verified" name="is_verified" value="1" <?php if($skripsi->id_verified=="1") echo "selected"; ?>>BELUM</option>
                    <option id="is_verified" name="is_verified" value="2" <?php if($skripsi->id_verified=="2") echo "selected"; ?>>VERIFIKASI</option>
                  </select>
                  </div>
                </div>

				<div class="form-group">
					<label for="nip_petugas" class="col-sm-2 control-label">NIP</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-md" id="nip_petugas" name="nip_petugas" placeholder="Masukkan NIP" value="{{$skripsi->nip_petugas}}" required>
					</div>
				</div>

				<div class="form-group text-center">
					<div class="col-md-8 col-md-offset-2">
					<button type="submit" class="btn btn-primary btn-lg">
							Confirm
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection

@section('code-footer')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
$( function() {
    var date = $('#datepicker').datepicker({ dateFormat: 'yy/mm/dd' }).val();

  } );
  </script>

  <script type="text/javascript">
$('.clockpicker').clockpicker({
    placement: 'top',
    align: 'left',
    donetext: 'Done'
});
</script>
@endsection

