@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
<!-- Nama konten -->
Rencana Pembelajaran Semester 
@endsection

@section('contentheader_title')
<!-- Nama konten -->
Rencana Pembelajaran Semester
@endsection

@section('main-content')
<!-- Kodingan HTML ditaruh di sini -->
@include('kurikulum.rps.content')

@endsection

@section('code-footer')




@endsection