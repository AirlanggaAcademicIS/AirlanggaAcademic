@extends('adminlte::layouts.app')

@section('htmlheader_title')
Edit Data Skripsi
@endsection

@section('contentheader_title')
Edit Data Skripsi
@endsection

@section('code-header')

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script> 
<link rel="stylesheet" href="{{ asset('/css/dropzone.css') }}">

@endsection

@section('main-content')
<style>
	.form-group label{
		text-align: left !important;
	}
</style>
	<!-- Ini buat menampilkan notifikasi -->
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
				
				<form id="tambahSkripsi" method="post" action="{{url('/karyawan/monitoring-skripsi/skripsi/'.$skripsi->id_skripsi.'/edit')}}" enctype="multipart/form-data"  class="form-horizontal">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

			<!-- Menampilkan input text biasa -->
				<div class="form-group">
					<label for="NIM_id" class="col-sm-2 control-label">NIM</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-md" id="NIM_id" name="NIM_id" placeholder="Masukkan NIM" value="{{$skripsi->NIM_id}}" required>
					</div>
				</div>
				<div class="form-group">
                  <label for="kbk_id" class="col-sm-2 control-label">KBK</label>
                  <div class="col-md-8">
                  <select name="kbk_id" class="form-control" value="{{$skripsi->kbk_id}}">
                    <option value="1" <?php if($skripsi->kbk_id=="1") echo "selected"; ?> >Data Mining</option>
                    <option value="2" <?php if($skripsi->kbk_id=="2") echo "selected"; ?> >Sistem Pengambilan Keputusan</option>
                    <option value="3" <?php if($skripsi->kbk_id=="3") echo "selected"; ?> >Information System Engineering</option>
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
					<label for="nip_petugas_id" class="col-sm-2 control-label">NIP</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-md" id="nip_petugas_id" name="nip_petugas_id" placeholder="Masukkan NIP" value="{{$skripsi->nip_petugas_id}}"  required>
					</div>
				</div>
				<div class="form-group">
                  <label for="skripsi_id" class="col-sm-2 control-label">Dosen Pembimbing 1</label>
                  <div class="col-md-8">
                  <select name="nip_id1" class="form-control" value="{{$skripsi->skripsi_id}}">
                    <option value="1" <?php if($skripsi->skripsi_id=="1") echo "selected"; ?> >Dosen 1</option>
                    <option value="2" <?php if($skripsi->skripsi_id=="2") echo "selected"; ?> >Dosen 2</option>
                    <option value="3" <?php if($skripsi->skripsi_id=="3") echo "selected"; ?> >Dosen 3</option>
                    <option value="4" <?php if($skripsi->skripsi_id=="4") echo "selected"; ?> >Dosen 4</option>
                  </select>
                  </div>
                </div>	
                <div class="form-group">
                  <label for="skripsi_id" class="col-sm-2 control-label">Dosen Pembimbing 2</label>
                  <div class="col-md-8">
                  <select name="nip_id2" class="form-control" value="{{$skripsi->skripsi_id}}">
                    <option value="1" <?php if($skripsi->skripsi_id=="1") echo "selected"; ?> >Dosen 1</option>
                    <option value="2" <?php if($skripsi->skripsi_id=="2") echo "selected"; ?> >Dosen 2</option>
                    <option value="3" <?php if($skripsi->skripsi_id=="3") echo "selected"; ?> >Dosen 3</option>
                    <option value="4" <?php if($skripsi->skripsi_id=="4") echo "selected"; ?> >Dosen 4</option>
                  </select>
                  </div>
                </div>

				<div class="form-group text-center">
					<div class="col-md-8 col-md-offset-2">
					<button type="submit" class="btn btn-primary btn-md">
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
 <script type="text/javascript">
     
    $(document).ready(function () {

   $('#nama').autocomplete({


       source:'{!!url('ajax')!!}',

       // source:"{{ URL::to('autocomplete')}}",
       minlength:2,
       autoFocus:true,

          
             select: function (event, ui) {
             var item = ui.item;
                 if(item) {
                     $("#NIM").val(item.NIM);
                 }
             }

   });


});
 </script>
@endsection

