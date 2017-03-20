@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
<div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <a href="#" class="btn btn-primary btn-l">
            <i class="fa fa-eye"></i> View Detail</a>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="myTable1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID PEMINJAMAN</th>
                  <th>NAMA PEMINJAM</th>
                  <th>ASET YANG DIPINJAM</th>
                  <th>CHECK IN DATE</th>
                  <th>CHECK OUT DATE</th>
                  <th>EXPECTED CHECK IN DATE</th>
                  <th>WAKTU PINJAM</th>
                  <th>ACTION</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>34567</td>
                  <td>sutikno</td>
                  <td>PAPAN TULIS</td>
                  <td>20 MARET 2017</td>
                  <td>25 APRIL 2017</td>
                  <td>20 MEI 2017</td>
                  <td>10.00</td>
                  <td><a href="#" class="btn btn-primary btn-xs">
                      <i class="fa fa-eye"></i> View Detail</a></td>
                </tr>
                <tfoot>
                  <th>ID PEMINJAMAN</th>
                  <th>NAMA PEMINJAM</th>
                  <th>ASET YANG DIPINJAM</th>
                  <th>CHECK IN DATE</th>
                  <th>CHECK OUT DATE</th>
                  <th>EXPECTED CHECK IN DATE</th>
                  <th>WAKTU PINJAM</th>
                  <th>ACTION</th>
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