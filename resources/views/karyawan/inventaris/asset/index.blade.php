@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Asset
@endsection

@section('contentheader_title')
Asset
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
  <a href="{{url('inventaris/asset/create')}}" type="button" class="btn btn-info btn-md" >
    <i class="fa fa-plus-square"></i> Tambah Asset</a>
</div>
<div style="overflow: auto">
<table id="myTable" class="table table-striped table-bordered" cellspacing="0">
  <thead>
    <tr>
      <th style="text-align:center">No.</th>
      <th style="text-align:center">ID Asset</th>
      <th style="text-align:center">ID Kategori</th>
      <th style="text-align:center">NIP Petugas</th>
      <th style="text-align:center">ID Status</th>
      <th style="text-align:center">Serial Barcode</th>
      <th style="text-align:center">Nama Asset</th>
      <th style="text-align:center">Lokasi</th>
      <th style="text-align:center">Expired Date</th>
      <th style="text-align:center">Nama Supplier</th>
      <th style="text-align:center">Harga Satuan</th>
      <th style="text-align:center">Jumlah Barang</th>
      <th style="text-align:center">Total Harga</th>
      <th style="text-align:center">Action</th>
      </tr>
    </thead>
  <tbody>
   @forelse($asset as $i => $ass) 
    <tr>
      <td>{{ $i+1 }}</td>
      <td width="20%" style="text-align:center">{{$ass->id_asset}}</td>
      <td width="20%" style="text-align:center">{{$ass->kategori_id}}</td>
      <td width="15%" style="text-align:center">{{$ass->nip_petugas_id}}</td>
      <td width="20%" style="text-align:center">{{$ass->status_id}}</td>
      <td width="20%" style="text-align:center">{{$ass->serial_barcode}}</td>
      <td width="10%" style="text-align:center">{{$ass->nama_asset}}</td>
      <td width="10%" style="text-align:center">{{$ass->lokasi}}</td>
      <td width="10%" style="text-align:center">{{$ass->expired_date}}</td>
      <td width="10%" style="text-align:center">{{$ass->nama_supplier}}</td>
      <td width="10%" style="text-align:center">{{$ass->harga_satuan}}</td>
      <td width="10%" style="text-align:center">{{$ass->jumlah_barang}}</td>
      <td width="10%" style="text-align:center">{{$ass->total_harga}}</td>
      <td width="20%" style="text-align:center" ><a onclick="return confirm('Anda yakin untuk menghapus asset ini?');" href="{{url('/asset/'.$ass->id_asset.'/delete/')}}" class="btn btn-danger btn-xs">
        <i class="fa fa-trash-o"></i> Hapus</a>
        <a href="{{url('/asset/'.$ass->id_asset.'/edit/')}}" class="btn btn-warning btn-xs">
        <i class="fa fa-pencil-square-o"></i> Edit</a>
        </td>
    </tr>
     @empty
        <tr>
          <td colspan="6"><center>Belum ada asset</center></td>
        </tr>
    @endforelse
  </tbody>
</table>
</div>

@endsection

@section('code-footer')

@endsection
