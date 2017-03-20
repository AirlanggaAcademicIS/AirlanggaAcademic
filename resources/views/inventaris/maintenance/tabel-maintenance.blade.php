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
            <i class="fa fa-plus"></i> add entry</a>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="myTable1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID Maintenance</th>
                  <th>Asset</th>
                  <th>Teknisi</th>
                  <th>Problem</th>
                  <th>Solution</th>
                  <th>Waktu Maintenance</th>
                  <th>action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>1</td>
                  <td>komputer</td>
                  <td>bambang</td>
                  <td>hang</td>
                  <td>optimize</td>
                  <td>Sabtu, 26 Desember 1987</td>
                  <td><a href="#" class="btn btn-primary btn-xs">
                      <i class="fa fa-eye"></i> View Detail</a></td>
                </tr>
                <tfoot>
                <tr>
                  <th>ID Maintenance</th>
                  <th>Asset</th>
                  <th>Teknisi</th>
                  <th>Problem</th>
                  <th>Solution</th>
                  <th>Waktu Maintenance</th>
                  <th>action</th>
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