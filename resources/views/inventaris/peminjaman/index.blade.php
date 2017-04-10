@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
<div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
              <br>
              <br>
              <a href="{{ url('inventaris/input-peminjaman') }}" class="btn btn-primary btn-l">
              <i class="fa fa-plus"></i> add entry</a>
            </div>
            
            <!-- /.box-header -->
            <div class="box-body">
              <table id="myTable1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="text-align:center">No.</th>
                  <th style="text-align:center">ID PEMINJAMAN</th>
                  <th style="text-align:center">NOMOR INDUK PEMINJAM</th>
                  <th style="text-align:center">ASET YANG DIPINJAM</th>
                  <th style="text-align:center">CHECK IN DATE</th>
                  <th style="text-align:center">CHECK OUT DATE</th>
                  <th style="text-align:center">EXPECTED CHECK IN DATE</th>
                  <th style="text-align:center">WAKTU PINJAM</th>
                  <th style="text-align:center">ACTION</th>
                </tr>
                </thead>
                <tbody>
                <?php $number = 1; ?>
                @forelse($peminjaman as $p)
                <tr>
                  <td style="text-align:center">{{ $number }}</td>
                  <td style="text-align:center">{{ $p->id }}</td>
                  <td style="text-align:center">{{ $p->nim_nip_peminjam }}</td>
                  <td style="text-align:center">{{ $p->asset_yang_dipinjam }}</td>
                  <td style="text-align:center">{!! App\Helpers\GeneralHelper::indonesianDateFormat($p->checkin_date) !!}</td>
                  <td style="text-align:center">{!! App\Helpers\GeneralHelper::indonesianDateFormat($p->checkout_date)  !!}</td>
                  <td style="text-align:center">{!! App\Helpers\GeneralHelper::indonesianDateFormat($p->expected_checkin_date)  !!}</td>
                  <td style="text-align:center">{{ date("h:i", strtotime($p->waktu_pinjam)) }}</td>
                  <td style="text-align:center">
                    <a href="{{ url( 'inventaris/'.$p->id.'/view-peminjaman') }}" class="btn btn-primary btn-s">
                      <i class="fa fa-eye"></i> View Detail</a>
                    <a href="{{ url( 'inventaris/'.$p->id.'/edit-peminjaman') }}" class="btn btn-warning btn-s">
                      <i class="fa fa-pencil-square-o"></i> Edit</a>
                    <a href="{{ url( 'inventaris/'.$p->id.'/delete') }}" class="btn btn-danger btn-s">
                      <i class="fa fa-pencil-square-o"></i> Delete</a>  
                  </td>
                </tr>
                <?php $number++ ?>
                @empty
                   <tr>
                     <td colspan="8"><center>Belum ada barang</center></td>
                   </tr>
                @endforelse
                </tbody>
                <tfoot>
                <tr>
                  <th style="text-align:center">No.</th>
                  <th style="text-align:center">ID PEMINJAMAN</th>
                  <th style="text-align:center">NAMA PEMINJAM</th>
                  <th style="text-align:center">ASET YANG DIPINJAM</th>
                  <th style="text-align:center">CHECK IN DATE</th>
                  <th style="text-align:center">CHECK OUT DATE</th>
                  <th style="text-align:center">EXPECTED CHECK IN DATE</th>
                  <th style="text-align:center">WAKTU PINJAM</th>
                  <th style="text-align:center">ACTION</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
@endsection

@section('code-footer')
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('#myTable1').DataTable();
});
</script>
@endsection