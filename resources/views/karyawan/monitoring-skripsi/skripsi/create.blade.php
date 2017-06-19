@extends('adminlte::layouts.app')

@section('htmlheader_title')
Tambah Data Skripsi
@endsection

@section('contentheader_title')
Tambah Data Skripsi
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
			<form id="tambahSkrispi" method="post" action="{{url('/karyawan/monitoring-skripsi/skripsi/create')}}" enctype="multipart/form-data"  class="form-horizontal">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="hidden" name="NIM_id" id="NIM_id" value="">
				<div class="form-group">
					<label for="" class="col-sm-2 control-label">NIM</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-md" id="NIM" name="NIM" placeholder="Masukkan NIM" required>
					</div>
				</div>
				<div class="form-group">
                  <label for="kbk_id" class="col-sm-2 control-label">KBK</label>
                  <div class="col-md-8">
                  <select name="kbk_id" class="form-control">
                  	@foreach($kbk as $k)
                    <option value="{{$k->id_kbk}}">{{$k->jenis_kbk}}</option>
                    @endforeach
                  </select>
                  </div>
                </div>
                <div class="form-group">
					<label for="Judul" class="col-sm-2 control-label">Judul</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-md" id="Judul" name="Judul" placeholder="Masukkan Judul" required>
					</div>
					</div>
				<div class="form-group">
                  <label for="skripsi_id" class="col-sm-2 control-label">Dosen Pembimbing 1</label>
                  <div class="col-md-8">
                  <select name="nip_id1" class="form-control">
                    @foreach($dosen as $d)
                    <option value="{{$d->nip}}">{{$d->nama_dosen}}</option>
                    @endforeach
                  </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="skripsi_id" class="col-sm-2 control-label">Dosen Pembimbing 2</label>
                  <div class="col-md-8">
                  <select name="nip_id2" class="form-control">
                  	@foreach($dosen as $d)
                    <option value="{{$d->nip}}">{{$d->nama_dosen}}</option>
                    @endforeach
                  </select>
                  </div>
                </div>

					<button type="submit" class="btn btn-primary" style="margin-left: 500px;">
							Simpan
						</button>
			</form>
			<br>
				<a href="{{url('karyawan/monitoring-skripsi/skripsi')}}">
					<button class="btn btn-danger" style="margin-left: 500px;">
					
							Kembali
					</button>
				</a>
		</div>
	</div>
</div>
@endsection

@section('code-footer') 
 <script type="text/javascript">
     
    $(document).ready(function () {

   $('#NIM').autocomplete({


       source:'{!!url('ajax')!!}',

       // source:"{{ URL::to('autocomplete')}}",
       minlength:2,
       autoFocus:true,

          
             select: function (event, ui) {
             var item = ui.item;
                 if(item) {
                     $("#NIM_id").val(item.nim_id);
                 }
             }

   });


});
 </script>
@endsection