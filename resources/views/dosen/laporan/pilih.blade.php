@extends('adminlte::layouts.app')
<html>
@section('code-header')


@endsection

@section('htmlheader_title')
<!-- Nama konten -->
Nama konten
<title></title>
<head></head> 
@endsection

@section('contentheader_title')
Laporan kinerja dosen
@endsection

@section('main-content')
<!-- Kodingan HTML ditaruh di sini -->

<body>
<label>Pilih tahun ajar :</label>
				<form id="tambah_pengmas" method="post" action="{{url('/dosen/laporan/pilih')}}" enctype="multipart/form-data">
				
                <select class="form-control select2" id="tahun" name="tahun" style="width: 15%;">
                  <option selected="selected" value="2015">2015</option>
                  <option value="2016">2016</option>
                  <option value="2017">2017</option>
                  
                </select><br>
                <button type='submit' class="btn btn-success btn-flat">OK</a>
</body>
@endsection

@section('code-footer')




@endsection