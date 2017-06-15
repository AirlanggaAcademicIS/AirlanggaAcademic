@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Peminjaman Inventaris
@endsection

@section('contentheader_title')
Peminjaman Inventaris
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
<!-- <div style="margin-bottom: 10px"> -->
  <!-- Href ini biar diklik masuk ke form tambah -->
  <!-- <a href="{{url('/inventaris/input-peminjaman')}}" type="button" class="btn btn-info btn-md" > -->
    <!-- <i class="fa fa-plus-square"></i> Tambah Peminjaman</a> -->
<!-- </div> -->
<div style="overflow: auto">
  <table id="myTable1" class="table table-bordered table-striped">
    <thead>
    <tr>
      <th style="text-align:center">No.</th>
      <th style="text-align:center">NOMOR INDUK PEMINJAM</th>
      <th style="text-align:center">ASET YANG DIPINJAM</th>
      <th style="text-align:center">CHECK IN DATE</th>
      <th style="text-align:center">CHECK OUT DATE</th>
      <th style="text-align:center">EXPECTED CHECK IN DATE</th>
      <th style="text-align:center">ACTION</th>
    </tr>
    </thead>
    <tbody>
    <?php $number = 1; ?>
    @forelse($peminjaman as $p)
    <tr>
      <td style="text-align:center">{{ $number }}</td>
      <td style="text-align:center">{{ $p->nim_nip_peminjam }}</td>
      <td style="text-align:center">{{ $p->asset_yang_dipinjam }}</td>
      <td style="text-align:center">{!! $p->checkin_date !!}</td>
      <td style="text-align:center">{!! $p->checkout_date  !!}</td>
      <td style="text-align:center">{!! $p->expected_checkin_date  !!}</td>
      <td style="text-align:center">
        <a href="{{ url( 'inventaris/'.$p->id_peminjaman.'/view-peminjaman') }}" class="btn btn-warning btn-xs">
          <i class="fa fa-eye"></i> View Detail</a>
        <a href="{{ url( 'inventaris/'.$p->id_peminjaman.'/edit-peminjaman') }}" class="btn btn-success btn-xs">
          <i class="fa fa-pencil-square-o"></i> Edit</a>
        <a onclick="return confirm('Anda yakin untuk menghapus data peminjaman ini?');" href="{{ url( 'inventaris/'.$p->id_peminjaman.'/delete') }}" class="btn btn-danger btn-xs">
          <i class="fa fa-trash-o"></i> Delete</a>
        <a href="{{ url( 'inventaris/checkin/'.$p->id_peminjaman.'') }}" class="btn btn-primary btn-xs">
          <i class="fa fa-hand-paper-o"></i> Check in</a>
      </td>
    </tr>
    <?php $number++ ?>
    @empty
       <tr>
         <td colspan="9"><center>Belum ada data transaksi peminjaman</center></td>
       </tr>
    @endforelse
    </tbody>
    <tfoot>
    <tr>
      <th style="text-align:center">No.</th>
      <th style="text-align:center">NAMA PEMINJAM</th>
      <th style="text-align:center">ASET YANG DIPINJAM</th>
      <th style="text-align:center">CHECK IN DATE</th>
      <th style="text-align:center">CHECK OUT DATE</th>
      <th style="text-align:center">EXPECTED CHECK IN DATE</th>
      <th style="text-align:center">ACTION</th>
    </tr>
    </tfoot>
  </table>
</div>

@endsection

@section('code-footer')
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script type="text/javascript" src="whttps://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('#myTable1').DataTable();
});
</script>
@endsection