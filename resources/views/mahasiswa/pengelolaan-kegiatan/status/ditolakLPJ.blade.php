 @extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Daftar Kegiatan Akademik
@endsection

@section('contentheader_title')
Daftar Kegiatan Akademik
@endsection

@section('main-content')
<!-- include summernote css/js-->


<h2>Revisi LPJ Kegiatan Akademik
</h2>
<div style="overflow: auto">
<table id="myTable" class="table table-striped table-bordered" cellspacing="0">
  <thead>
    <tr>
      <th style="text-align:center">No.</th>
      <th style="text-align:center">Nama Kegiatan</th>
      <th style="text-align:center">Tanggal Pelaksanaan</th>
      <th style="text-align:center">Revisi</th>
      <th style="text-align:center">Poster</th>
      <th style="text-align:center">Action</th>

    </tr>
    </thead>
  <tbody>
   @forelse($StatusLPJ as $i => $pen) 
    <tr>
      <td width="10%" style="text-align:center">{{ $i+1 }}</td>
      <td width="15%" style="text-align:center">{{$pen->nama}}</td>
      <td width="10%" style="text-align:center">{{$pen->tglpelaksanaan}}</td>
      <td width="10%" style="text-align:center">{{$pen->revisi}}</td>
      <td width="45%" style="text-align:center"><img src="{{URL::asset('/img/pengajuan/'.$pen->url_poster)}}" height="100px" width="100px" hspace="5px" vspace="2px"></td>
      <td width="20%" style="text-align:center">
      <a href="{{url('/mahasiswa/pengelolaan-kegiatan/dokumentasi/'.$pen->id_kegiatan.'/revisiLPJ')}}" class="btn btn-success btn-xs"><i class='fa fa-edit'></i> Revisi</a>
        <a href="{{url('/mahasiswa/pengelolaan-kegiatan/detail-pengajuan/'.$pen->id_kegiatan.'/lpjRevisi')}}" class="btn btn-success btn-xs"><i class='fa fa-eye'></i> View Detail</a>
        </td>
    </tr>
     @empty
        <tr>
          <td colspan="6"><center>Belum ada Revisi LPJ Kegiatan Akademik</center></td>
        </tr>
    @endforelse
  </tbody>
</table>
</div>
@endsection

@section('code-footer')

@endsection