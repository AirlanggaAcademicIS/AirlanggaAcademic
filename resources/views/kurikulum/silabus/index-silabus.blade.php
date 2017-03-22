@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
<!-- Nama konten -->
  Nama konten 
@endsection

@section('contentheader_title')
<!-- Nama konten -->
	Silabus Mata Kuliah Kalkulus (Kode MAA100)
@endsection

@section('main-content')
<!-- Kodingan HTML ditaruh di sini -->
  @include('kurikulum.silabus.content-silabus')
@endsection

@section('code-footer')
  



@endsection