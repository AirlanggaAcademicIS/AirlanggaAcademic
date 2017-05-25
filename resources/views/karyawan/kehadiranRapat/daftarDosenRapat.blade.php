@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Fitur 
@endsection

@section('contentheader_title')
DAFTAR RAPAT
@endsection

@section('main-content')
<!--
<div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Rapat</th>
                  <th>Tempat</th>
                  <th>Tanggal</th>
                  <th>Waktu</th>
                  <th>Jumlah Peserta</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>1</td>
                  <td>Rapat Koordinasi I</td>
                  <td>Ruang 102</td>
                  <td>Selasa, 21 Maret 2017 - 12.15 WIB</td>
                  <td>12.15 WIB</td>
                  <td><a href="/notulensi/kehadiranRapat/jumlah">21</a></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Rapat Koordinasi II</td>
                  <td>Ruang 102</td>
                  <td>Kamis, 23 Maret 2017 - 08.00 WIB</td>
                  <td>08.00 WIB</td>
          <td><a href="/notulensi/kehadiranRapat/jumlah">15</a></td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Rapat Audiensi</td>
                  <td>Ruang Labkom 5</td>
                  <td>Selasa, 4 April 2017 - 10.15 WIB</td>
                  <td>10.15 WIB</td>
                  <td><a href="/notulensi/kehadiranRapat/jumlah">32</a></td>
                </tr>
              </table>
            </div>
 -->
<!-- include summernote css/js-->
<div class="flash-message" style="margin-left: -16px;margin-right: -16px; margin-top: 13px;">
  @foreach (['danger', 'warning', 'success', 'info'] as $msg)
  @if(Session::has('alert-' . $msg))
<div class="alert alert-{{ $msg }}">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <p class="" style="border-radius: 0">{{ Session::get('alert-' . $msg) }}</p>
</div>
  {!!Session::forget('alert-' . $msg)!!}
  @endif
  @endforeach
</div>
<div style="overflow: auto">
<table id="myTable" class="table table-striped table-bordered" cellspacing="0">
  <thead>
    <tr>
      <th style="text-align:center">No</th>
      <th style="text-align:center">Nama Rapat</th>
      <th style="text-align:center">Tempat</th>
      <th style="text-align:center">Tanggal</th>      
      <th style="text-align:center">Jumlah Peserta</th>
    </tr>
    </thead>
  <tbody>
   @forelse($dosen_rapat as $i => $dosen_rapat) 
    <tr>
      <td>{{ $i+1 }}</td>
      <td width="40%" style="text-align:center">{{$dosen_rapat->nama_rapat}}</td>
      <td width="25%" style="text-align:center">{{$dosen_rapat->nama_ruang}}</td>
      <td width="25%" style="text-align:center">{{$dosen_rapat->waktu_pelaksanaan}}</td>
      <td width="25%" style="text-align:center">{{$dosen_rapat->deleted_at}}</td>
    </tr>
     @empty

    @endforelse
  </tbody>
</table>
</div>

@endsection

@section('code-footer')
	
@endsection