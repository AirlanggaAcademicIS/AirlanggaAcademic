 @extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Laporan LPJ
@endsection

@section('contentheader_title')
Laporan LPJ
@endsection

@section('main-content')
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
<div style="margin-bottom: 10px">
  <!-- Href ini biar diklik masuk ke form tambah -->
  <a href="{{url('/pengelolaan-kegiatan/laporan_pelaksanaan/create')}}" type="button" class="btn btn-info btn-md" >
    <i class="fa fa-plus-square"></i>Tambah Laporan Pelaksanaan</a>
</div>
<div style="overflow: auto">
<table id="myTable" class="table table-striped table-bordered" cellspacing="0">
  <thead>
    <tr>
      <th style="text-align:center">Kode LPJ</th>
      <th style="text-align:center">Nama Kegiatan</th>
      <th style="text-align:center">Tanggal Pelaksanaan</th>      
      <th style="text-align:center">Tempat Pelaksanaan</th>
      <th style="text-align:center">Dana Pelaksanaan</th>
      <th style="text-align:center">Tindakan</th>
    </tr>
    </thead>
  <tbody>
   @forelse($laporan_pelaksanaan as $i => $pen) 
    <tr>
      <td  width="5%" style="text-align:center">{{ $i+1 }}</td>
      <td width="20%" style="text-align:center">{{$pen->nama_kegiatan}}</td>
      <td width="20%" style="text-align:center">{{$pen->tanggal_pelaksanaan}}</td>
      <td width="20%" style="text-align:center">{{$pen->tempat_pelaksanaan}}</td>
      <td width="20%" style="text-align:center">{{$pen->pelaksanaan_dana}}</td>
      <td width="15%" style="text-align:center" ><a onclick="return confirm('Anda yakin untuk menghapus laporan Pelaksanaan Kegiatan ini?');" href="{{url('/pengelolaan-kegiatan/laporan_pelaksanaan/'.$pen->id.'/delete/')}}" class="btn btn-danger btn-xs">
        <i class="fa fa-trash-o"></i> Hapus</a>
        <a href="{{url('/pengelolaan-kegiatan/laporan_pelaksanaan/'.$pen->id.'/edit/')}}" class="btn btn-warning btn-xs">
        <i class="fa fa-pencil-square-o"></i> Edit</a>
        </td>
    </tr>
     @empty
        <tr>
          <td colspan="6"><center>Belum ada Laporan Pelaksanaan Kegiatan</center></td>
        </tr>
    @endforelse
  </tbody>
</table>
</div>

@endsection

@section('code-footer')

@endsection