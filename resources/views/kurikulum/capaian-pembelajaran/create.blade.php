@extends('adminlte::layouts.app')

@section('htmlheader_title')
Tambah Biodata
@endsection

@section('contentheader_title')
Tambah Biodata
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
			<form id="tambahBiodata" method="post" action="{{url('/kurikulum/capaian-pembelajaran/create')}}" enctype="multipart/form-data"  class="form-horizontal">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<!-- Menampilkan input text biasa -->
			 <div class="form-group">
          <label for="id_prodi" class="col-sm-2 control-label">Id Prodi</label>
          <div class="col-md-8">
            <input type="text" class="form-control input-lg" id="id_prodi" name="id_prodi" placeholder="Masukkan id_prodi" required>
          </div>
        </div>

        <!-- Menampilkan input text biasa -->
        <div class="form-group">
          <label for="id_kategori_cp" class="col-sm-2 control-label">ID Kategori Capaian Pembelajaran</label>
          <div class="col-md-8">
            <input type="text" class="form-control input-lg" id="id_kategori_cp" name="id_kategori_cp" placeholder="Masukkan kategori capaian pembelajaran" required>
          </div>
        </div>

        <!-- Menampilkan textarea -->
        <div class="form-group">
          <label for="kode_cp" class="col-sm-2 control-label">Kode Capaian Pembelajaran</label>
          <div class="col-md-8">
            <textarea id="kode_cp" name="kode_cp" placeholder=" Masukkan Kode Capaian Pembelajaran" required cols="82" rows="5" required>
            </textarea>
          </div>
        </div>

                <!-- Menampilkan input text biasa -->
        <div class="form-group">
          <label for="deskripsi_cp" class="col-sm-2 control-label">Deskripsi Capaian Pembelajaran</label>
          <div class="col-md-8">
            <input type="text" class="form-control input-lg" id="deskripsi_cp" name="deskripsi_cp" placeholder="Masukkan kategori capaian pembelajaran" required>
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
@endsection

