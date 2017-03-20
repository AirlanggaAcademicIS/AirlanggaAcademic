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
                <select class="form-control select2" style="width: 15%;">
                  <option selected="selected">2014/1015 Ganjil</option>
                  <option>2015/2016 Ganjil</option>
                  <option>2016/1017 Ganjil</option>
                </select><br>
                <a href="{{url('/dosen/laporan/isilaporan')}}" class="btn btn-success btn-flat">OK</a>
</body>
@endsection

@section('code-footer')




@endsection