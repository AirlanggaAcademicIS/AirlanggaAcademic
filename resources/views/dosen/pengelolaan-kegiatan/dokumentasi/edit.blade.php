@extends('adminlte::layouts.app')

@section('htmlheader_title')
Pengajuan LPJ Kegiatan Akademik
@endsection

@section('contentheader_title')
Pengajuan LPJ Kegiatan Akademik
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
		<div class="box box-primary">
			<div class="box-header with-border">

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
			<form id="tambahBiodata" method="post" action="{{url('dosen/pengelolaan-kegiatan/dokumentasi/'.$Status->id_kegiatan.'/editAction')}}" enctype="multipart/form-data"  class="form-horizontal">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<!-- Menampilkan input text biasa -->
				<!-- 
				<div class="form-group">
					<label for="nama" class="col-sm-2 control-label">Nomor Dokumentasi</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="id_dokumentasi" name="id_dokumentasi" placeholder="Masukkan Nama Gambar" required>
					</div>
				</div>
 -->
				<div class="form-group">
				<label for="nama" class="col-sm-2 control-label">Nama Kegiatan</label>
                <div class="col-md-8">
	                <select class="form-control select" style="width: 100%;" name = "kegiatan_id" value="{{$Status->id_kegiatan}}" onchange="javascript:handleSelect(this)">
	                	
	                  	 <option value="{{ $Status->id_kegiatan }}"> {{ $Status->nama }}</option>
	                  
	                </select>
	             </div>
              </div>
             
				<div class="form-group">
					<label for="nama" class="col-sm-2 control-label">Evaluasi Kegiatan</label>
					<div class="col-md-8">
						<textarea id="lesson_learned" name="lesson_learned" placeholder=" Masukkan Evaluasi Kegiatan" required cols="82" rows="5" value="{{$Status->lesson_learned}}">{{$Status->lesson_learned}}
						</textarea>
					</div>
				</div>

				<div class="form-group">
					<label for="nama" class="col-sm-2 control-label">Tanggal Pelaksanaan Kegiatan</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="datepicker" name="tglpelaksanaan" placeholder="Masukkan Tanggal" value="{{$Status->tglpelaksanaan}}" required>
					</div>
				</div>

				<div class="form-group">
					<label for="nama" class="col-sm-2 control-label">Ruang Pelaksanaan Kegiatan</label>
					<div class="col-md-8">
						<textarea id="lesson_learned" name="rpelaksanaan" placeholder=" Masukkan Ruang Pelaksanaan Kegiatan" required cols="82" rows="5" value="{{$Status->rpelaksanaan}}">{{$Status->rpelaksanaan}}
						</textarea>
					</div>
				</div>
				<!-- Menampilkan Deskripsi -->
				<div class="form-group">
					<label for="nama" class="col-sm-2 control-label">Masukkan Foto</label>
					<div class="col-md-8">
						<input type="file" id="gambar" name="url_foto">

                  		<p class="help-block">Pilih Gambar</p>
                	</div>
						<!-- <input type="text" class="form-control input-lg" id="url_gambar" name="url_foto" placeholder="Masukkan URL Gambar" required> -->
				</div>
				
				<!-- Menampilkan tanggal dengan datepicker -->
				

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
</div>
@endsection

@section('code-footer')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
$( function() {
    var date = $('#datepicker').datepicker({ dateFormat: 'yy/mm/dd' }).val();

  } );
    function renderHarga(t) {
        harga_satuan = t.options[t.selectedIndex];
        // alert( $(harga_satuan).attr("data-harga") );
        document.getElementById('harga_satuan').value = $(harga_satuan).attr("data-harga");
        $('#satuan').html($('option:selected', e).data('satuan'));
    }

    var elBrowse  = document.getElementById("gambar");
	elBrowse.addEventListener("change", function() {
		var files  = this.files;
		var errors = "";
		if (!files) {
			errors += "File upload not supported by your browser.";
		}
		if (files && files[0]) 
		{
			for(var i=0; i<files.length; i++) 
			{
				var file = files[i];
				if ( (/\.(png|jpeg|jpg|gif)$/i).test(file.name) ) 
				{
					readImage( file ); 
				} 
				else 
				{
					errors += file.name +" is unsupported Image extension\n";
					document.getElementById("gambar").value = null;  
				}
			}
		}
		if (errors) {
			alert(errors); 
		}
	});

  </script>

@endsection