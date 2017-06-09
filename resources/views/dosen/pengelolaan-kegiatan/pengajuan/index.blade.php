 @extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Pengajuan
@endsection

@section('contentheader_title')
Pengajuan
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
  <a href="{{url('dosen/pengelolaan-kegiatan/pengajuan/create')}}" type="button" class="btn btn-info btn-md" >
    <i class="fa fa-plus-square"></i>Tambah Pengajuan</a>
</div>
<div style="overflow: auto">
<table id="myTable" class="table table-striped table-bordered" cellspacing="0">
  <thead>
    <tr>
      <th style="text-align:center">No.</th>
      <th style="text-align:center">Nama Kegiatan</th>
      <th style="text-align:center">Konfirmasi LPJ</th>
      <th style="text-align:center">Konfirmasi Proposal</th>
      <th style="text-align:center">Latar Belakang</th>      
      <th style="text-align:center">Tujuan Kegiatan</th>
      <th style="text-align:center">Mekanisme Kegiatan</th>
      <th style="text-align:center">Tanggal Pengajuan</th>
      <th style="text-align:center">Tanggal Pelaksanaan</th>
      <th style="text-align:center">Poster</th>
    </tr>
    </thead>
  <tbody>
   @forelse($pengajuan as $i => $pen) 
    <tr>
      <td>{{ $i+1 }}</td>
      <td width="15%" style="text-align:center">{{$pen->nama}}</td>
      <td width="15%" style="text-align:center">{{$pen->konfirmasi_lpj}}</td>
      <td width="15%" style="text-align:center">{{$pen->konfirmasi_proposal}}</td>
      <td width="20%" style="text-align:center">{{$pen->history}}</td>
      <td width="10%" style="text-align:center">{{$pen->tujuan}}</td>
      <td width="10%" style="text-align:center">{{$pen->mekanisme}}</td>
      <td width="10%" style="text-align:center">{{$pen->tglpengajuan}}</td>
      <td width="10%" style="text-align:center">{{$pen->tglpelaksanaan}}</td>
      <td width="10%" style="text-align:center"><img src="{{URL::asset('/img/pengajuan/'.$pen->url_poster)}}" height="100px" width="100px" hspace="5px" vspace="2px"></td>
    </tr>
     @empty
        <tr>
          <td colspan="6"><center>Belum ada Pengajuan Kegiatan</center></td>
        </tr>
    @endforelse
  </tbody>
</table>
</div>

@endsection

@section('code-footer')

@endsection