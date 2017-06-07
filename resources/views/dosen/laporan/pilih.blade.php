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
				
                <select class="form-control select2" id="tahun" name="tahun" style="width: 15%;">
                  <option selected="selected" value="2017">2016/2017 Genap</option>
                  
                  
                  
                </select><br>
                <a href="{{url('/dosen/laporan')}}" class="btn btn-success btn-flat">OK</a>
</body>
@endsection

@section('code-footer')




@endsection