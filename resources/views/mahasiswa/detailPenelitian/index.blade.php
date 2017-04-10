@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Detail Penelitian
@endsection

@section('contentheader_title')
Detail Penelitian
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
  <a href="{{url('/mahasiswa/detailpenelitian/create')}}" type="button" class="btn btn-info btn-md" >
    <i class="fa fa-plus-square"></i> Tambah Detail Penelitian</a>
</div>
<div style="overflow: auto">
<table id="myTable" class="table table-striped table-bordered" cellspacing="0">
  <thead>
    <tr>
      <th style="text-align:center">No.</th>
      <th style="text-align:center">Kode Penelitian</th>      
      <th style="text-align:center">Abstrak</th>
      <th style="text-align:center">Background</th>
      <th style="text-align:center">Objective</th>
      <th style="text-align:center">Methods</th>
      <th style="text-align:center">Results</th>
      <th style="text-align:center">Status</th>
      <th style="text-align:center">Action</th>
    </tr>
    </thead>
  <tbody>
   @forelse($detailpenelitian as $i => $det) 
    <tr>
      <td>{{ $i+1 }}</td>
      <td width="10%" style="text-align:center">{{$det->kode_penelitian}}</td>
      <td width="20%" style="text-align:center">{{$det->abstract}}</td>
      <td width="15%" style="text-align:center">{{$det->background}}</td>
      <td width="20%" style="text-align:center">{{$det->objective}}</td>
      <td width="10%" style="text-align:center">{{$det->methods}}</td>
      <td width="10%" style="text-align:center">{{$det->results}}</td>

       @if (($det->is_verified)==0)
      <td width="20%" style="text-align:center"><span class="label label-warning">Process</span></td>
      @elseif (($det->is_verified)==1)
      <td width="20%" style="text-align:center"><span class="label label-success">Approved</span></td>
      @else
      <td width="20%" style="text-align:center"><span class="label label-danger">Rejected</span></td>
      @endif

       @if (($det->is_verified)==0)
      <td width="20%" style="text-align:center" ><a onclick="return confirm('Anda yakin untuk menghapus penelitian ini?');" href="{{url('/mahasiswa/penelitian/'.$det->kode_penelitian.'/delete/')}}" class="btn btn-danger btn-xs">
        <i class="fa fa-trash-o"></i> Hapus</a>
        <a href="{{url('/mahasiswa/penelitian/'.$det->kode_penelitian.'/edit/')}}" class="btn btn-warning btn-xs">
        <i class="fa fa-pencil-square-o"></i> Edit</a>
      </td>
      @else
      <td width="20%" style="text-align:center" ><a onclick="return confirm('Anda yakin untuk menghapus penelitian ini?');" href="{{url('/mahasiswa/penelitian/'.$det->kode_penelitian.'/delete/')}}" class="btn btn-danger btn-xs">
        <i class="fa fa-trash-o"></i> Hapus</a>
      </td>    
      @endif
    </tr>
     @empty
        <tr>
          <td colspan="8"><center>Belum ada detail penelitian</center></td>
        </tr>
    @endforelse
  </tbody>
</table>
</div>

@endsection

@section('code-footer')

@endsection