@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Penelitian Mahasiswa
@endsection

@section('contentheader_title')

Penelitian Mahasiswa
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
  <a href="{{url('/mahasiswa/penelitian/create')}}" type="button" class="btn btn-info btn-md" >
    <i class="fa fa-plus-square"></i> Form Penelitian</a>
</div>


<div class="box-body" style="overflow: auto">
  <table id="myTable" class="table table-bordered table-striped" cellspacing="0">
    <thead>
    <tr>
      <th style="text-align:center">No.</th>
      <th style="text-align:center">Judul Penelitian</th>      
      <th style="text-align:center">Jenis</th>
      <th style="text-align:center">Nama</th>
      <th style="text-align:center">Skor</th>
      <th style="text-align:center">Tahun Penelitian</th>
      <th style="text-align:center">Status</th>
      <th style="text-align:center">Action</th>
    </tr>
    </thead>

<!-- <div style="overflow: auto">
<table id="myTable" class="table table-striped table-bordered" cellspacing="0"> -->
  
  <tbody>
   @forelse($penelitian_mhs as $i => $bio) 
    <tr>
      <td width="5%" style="text-align:center">{{ $i+1 }}</td>
      <td width="20%" style="text-align:center">{{$bio->judul}}</td>
      <td width="15%" style="text-align:center">{{$bio->kategori_penelitian}}</td>
      <td width="20%" style="text-align:center">{{$bio->peneliti}}</td>
      @if (($bio->skor)==null)
      <td width="10%" style="text-align:center">-</td>
      @else
      <td width="10%" style="text-align:center">{{$bio->skor}}</td>
      @endif
      <td width="10%" style="text-align:center">{{$bio->tahun}}</td>

      @if (($bio->is_verified)==0)
      <td width="10%" style="text-align:center"><span class="label label-default">Proses</span></td>
      @elseif (($bio->is_verified)==1)
      <td width="10%" style="text-align:center"><span class="label label-success">Diterima</span></td>
      @else
      <td width="10%" style="text-align:center"><span class="label label-warning">Revisi</span></td>
      @endif

       @if (($bio->is_verified)==0)
      <td width="30%" style="text-align:center" >
        <a onclick="return confirm('Anda yakin untuk menghapus penelitian ini?');" href="{{url('/mahasiswa/penelitian/'.$bio->kode_penelitian.'/delete/')}}" class="btn btn-danger btn-xs">
        <i class="fa fa-trash-o"></i> Hapus</a>
        <a href="{{url('/mahasiswa/penelitian/'.$bio->kode_penelitian.'/edit/')}}" class="btn btn-warning btn-xs">
        <i class="fa fa-pencil-square-o"></i> Edit</a>
      </td>
      @elseif (($bio->is_verified)==2)
      <td width="20%" style="text-align:center" >
        <a href="{{url('/mahasiswa/penelitian/'.$bio->kode_penelitian.'/edit/')}}" class="btn btn-warning btn-xs">
        <i class="fa fa-pencil-square-o"></i> Edit</a>
      </td>    
      @endif

      
        
    </tr>
     @empty
        <tr>
          <td colspan="6"><center>Belum ada penelitian</center></td>
        </tr>
    @endforelse
  </tbody>
</table>
</div>

@endsection

@section('code-footer')

<script type="text/javascript"> 
    $(document).ready(function(){ 
        $('#myTable').DataTable(); 
    }); 
</script> 




@endsection