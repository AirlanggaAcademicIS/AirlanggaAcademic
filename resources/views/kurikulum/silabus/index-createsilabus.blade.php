@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
<!-- Nama konten -->
  Nama konten 
@endsection

@section('contentheader_title')
<!-- Nama konten -->
	Form Tambah Silabus
@endsection

@section('main-content')
<!-- Kodingan HTML ditaruh di sini -->
  @include('kurikulum.silabus.content-createsilabus')
@endsection

@section('code-footer')
  



@endsection