@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Konferensi
@endsection

@section('contentheader_title')
Konferensi
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
  <a href="{{url('/dosen/konferensi/create')}}" type="button" class="btn btn-info btn-md" >
    <i class="fa fa-plus-square"></i> Tambah Konferensi</a>
</div>
<div style="overflow: auto">
<table id="myTable" class="table table-striped table-bordered" cellspacing="0">
  <thead>
    <tr>
      <th style="text-align:center">No</th>
      <th style="text-align:center">Nama Konferensi</th>
      <th style="text-align:center">Pemapar Konferensi</th>  
      <th style="text-align:center">Tempat Konferensi</th>          
      <th style="text-align:center">Tanggal Konferensi</th>      
      <th style="text-align:center">Materi Konferensi</th>
      <th style="text-align:center">File Konferensi</th>
      <th style="text-align:center">Status Konferensi</th>
      <th style="text-align:center">Action</th>
    </tr>
    </thead>
  <tbody>
   @forelse($konferensi as $i => $kon) 
    <tr>
      <td>{{ $i+1 }}</td>
      <td width="20%" style="text-align:center">{{$kon->nama_konferensi}}</td>
      <td width="15%" style="text-align:center">{{$kon->pemapar_konferensi}}</td>
      <td width="20%" style="text-align:center">{{$kon->tempat_konferensi}}</td>
      <td width="10%" style="text-align:center">{{$kon->tanggal_konferensi}}</td>
      <td width="10%" style="text-align:center">{{$kon->materi_konferensi}}</td>
      <td width="20%" style="text-align:center" > <a href="{{URL::asset('/img/dosen/'.$kon->file_konferensi)}}" class="btn btn-primary btn-xs">
        <i class="fa fa-pencil-square-o"></i> Download</a> </td>
      <td width="10%" style="text-align:center">
       @if($kon->status_konferensi == 0)
        Unverified
      @else
      @if($kon->status_konferensi == 1)
        Verified
        @else
        Rejected
      @endif
      @endif
      </td>
      


      <td width="20%" style="text-align:center" > @if($kon->status_konferensi != 1) <a onclick="return confirm('Anda yakin untuk menghapus konferensi ini?');" href="{{url('/dosen/konferensi/'.$kon->konferensi_id.'/delete/')}}" class="btn btn-danger btn-xs">
        <i class="fa fa-trash-o"></i> Hapus</a>
        <a href="{{url('/dosen/konferensi/'.$kon->konferensi_id.'/edit/')}}" class="btn btn-warning btn-xs">
        <i class="fa fa-pencil-square-o"></i> Edit </a> @endif
        </td>
    </tr>
     @empty
        <tr> 
          <td colspan="6"><center>Belum ada konferensi</center></td>
        </tr>
    @endforelse
  </tbody>
</table>
</div>

@endsection

@section('code-footer')

@endsection