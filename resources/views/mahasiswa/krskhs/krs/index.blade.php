@extends('adminlte::layouts.app')

@section('htmlheader_title')
Krs
@endsection

@section('contentheader_title')
Krs
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
            <ul class="nav nav-tabs nav-justified">
  				    <li class="active"><a data-toggle="tab" href="#AmbilKrs">Ambil Krs</a></li>  					
  				    <li><a data-toggle="tab" href="#LihatKrs">Lihat Krs</a></li>
			       </ul>

            <div class="tab-content">
  				    <div id="AmbilKrs" class="tab-pane fade in active">
    				  <h3>Ambil Krs</h3>
    				  <div style="margin-bottom: 10px">
  				    <!-- Href ini biar diklik masuk ke form tambah -->
    				    <a href="{{url('/mahasiswa/KrsKhs/Krs/create')}}" type="button" class="btn btn-info btn-md" >
        				<i class="fa fa-plus-square"></i>Ambil</a>
                </div>
  				    </div>
  				  <div id="LihatKrs" class="tab-pane fade">
    				  <h3>Lihat Krs</h3>
              <!--Facru, isi tabelnya di kolom bawah, trus jangan lupa delete tulisan ini!!! -->
    				  <p>Some content in menu 1.</p>
  				  </div>
            </div>

            <!--Pandu, ngerjakno seng nisor yo, nggawe file cetak, isok copas teko fara-->
            <!--Nama File PDF nak karyawan/kurikulum/mata kuliah/PDF, lek wes delete tulisan ini-->
            <!--<div class="col-md-3">
              <a target="_blank" style="width: 100%; margin-bottom: 5px;" href="{{url('/mahasiswa/KrsKhs/Krs/print/'}}" class="btn btn-primary btn-xs">
              <i class="fa fa-print"></i>Cetak</a>                                
            </div>-->
        </div>
    </div>
    </div>
@endsection

@section('code-footer')
<!-- <script src="{{asset('js/jquery.dataTables.min.js')}}"></script> -->
<script type="text/javascript">
    $(document).ready(function(){
        $('#data-table').DataTable();
    });
</script>
@endsection