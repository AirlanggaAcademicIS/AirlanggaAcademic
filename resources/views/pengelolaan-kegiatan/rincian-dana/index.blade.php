@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Rincian Dana
@endsection
v
@section('contentheader_title')
Rincian Dana
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
  <a href="{{url('/pengelolaan-kegiatan/rincian-dana/create')}}" type="button" class="btn btn-info btn-m">
    <i class="fa fa-plus-square"></i> Tambah Rincian Dana</a>
</div>
<div style="overflow: auto">
<table id="myTable" class="table table-striped table-bordered" cellspacing="0">
  <thead>
    <tr>
    <th>Nomer</th> 
      <th style="text-align:center">Kode Rincian</th>
      <th style="text-align:center">Nama Barang</th>      
      <th style="text-align:center">Qty</th>
      <th style="text-align:center">Harga</th>
      <th style="text-align:center">Action</th>
    </tr>
    </thead>
  <tbody>
   @forelse($rincian_dana as $i => $rda) 
    <tr>
      <td>{{ $i+1 }}</td>
      <td width="20%" style="text-align:center">{{$rda->kode_rincian}}</td>
      <td width="15%" style="text-align:center">{{$rda->nama_barang}}</td>
      <td width="20%" style="text-align:center">{{$rda->qty}}</td>
      <td width="10%" style="text-align:center">{{$rda->harga}}</td>
      <td width="20%" style="text-align:center" ><a onclick="return confirm('Anda yakin untuk menghapus rincian dana ini?');" href="{{url('/pengelolaan-kegiatan/rincian-dana/'.$rda->kode_rincian.'/delete/')}}" class="btn btn-danger btn-xs">
        <i class="fa fa-trash-o"></i> Hapus</a>
        <a href="{{url('/pengelolaan-kegiatan/rincian-dana/'.$rda->kode_rincian.'/edit/')}}" class="btn btn-warning btn-xs">
        <i class="fa fa-pencil-square-o"></i> Edit</a>
        </td>
    </tr>
     @empty
        <tr>
          <td colspan="6"><center>Belum ada Rincian Dana</center></td>
        </tr>
    @endforelse
  </tbody>
</table>
</div>

@endsection

@section('code-footer')

@endsections