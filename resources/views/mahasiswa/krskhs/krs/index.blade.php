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
    				  <div style="margin-: 10px">
  				    <!-- Href ini biar diklik masuk ke form tambah -->
    				    <a href="{{url('/mahasiswa/krskhs/krs/create')}}" type="button" class="btn btn-info btn-md" >
        				<i class="fa fa-plus-square"></i>Ambil</a>
                </div>
              <div style="margin-right: 10px">
              <!-- Href ini biar diklik masuk ke form tambah -->
                <a href="{{url('/mahasiswa/krskhs/krs/{}/update')}}" type="button" class="btn btn-info btn-md" >
                <i class="fa fa-plus-square"></i>Edit</a>
                </div>
  				    </div>
  				  <div id="LihatKrs" class="tab-pane fade">
    				  <h3>Lihat Krs</h3>
              <!--Facru, isi tabelnya di kolom bawah, trus jangan lupa delete tulisan ini!!! -->
    				  <p>Some content in menu 1.</p>
  				  </div>
            </div>
        </div>
    </div>
  </div>
@endsection

@section('code-footer')

@endsection