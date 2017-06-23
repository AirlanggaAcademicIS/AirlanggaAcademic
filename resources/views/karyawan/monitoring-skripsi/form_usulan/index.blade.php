@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Form Usulan 
@endsection

@section('contentheader_title')
Form Usulan 
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
</div>
<div style="overflow: auto">
<table id="myTable" class="table table-striped table-bordered" cellspacing="0">
  <thead>
    <tr>
      <th style="text-align:center">No.</th>
      <th style="text-align:center">Nama Mahasiswa</th> 
      <th style="text-align:center">NIM</th>     
      <th style="text-align:center">Form Usulan</th>
    </tr>
    </thead>
  <tbody>
   @forelse($skripsi as $i => $skrip) 
    <tr>
      <td width="5%" style="text-align:center">{{ $i+1 }}</td>
      <td width="15%" style="text-align:center">{{$skrip->mhs['nama_mhs']}}</td>
      <td width="10%" style="text-align:center">{{$skrip->NIM_id}}</td>
      <td width="10%" style="text-align:center" >
      @if($skrip->upload_berkas_proposal == "")
      Belum ada file
        @else 
        <a href="{{url('karyawan/monitoring-skripsi/form_usulan/'.$skrip->NIM_id.'/download')}}" class="btn btn-info btn-xs">
        <i class="fa fa-download"></i> Download</a>
        @endif
        </td>
    </tr>
     @empty
        <tr>
          <td colspan="12"><center>Belum ada file</center></td>
        </tr>
    @endforelse
  </tbody>
</table>
</div>

@endsection

@section('code-footer')

@endsection