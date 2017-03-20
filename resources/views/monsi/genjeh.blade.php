@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Capaian Mata Kuliah 
@endsection

@section('contentheader_title')
Capaian Mata Kuliah
@endsection

@section('main-content')

  <div class="alert alert-info alert-dismissable fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Info!</strong> This alert box could indicate a neutral informative change or action.
  </div>
<div class="col-md-6">

<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Input Kategori Capaian Mata Kuliah</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form">
                <!-- text input -->
                <div class="form-group">
                  <label>Nama Kategori</label>
                  <input type="text" class="form-control" placeholder="">
                </div>
              </form>
              <button type="button" class="btn btn-primary" style="float:right;">Tambah</button>
            </div>
            <!-- /.box-body -->

          </div>

          </div>


          <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Daftar Kategori Mata Kuliah</h3>
              <div class="box-tools">
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-bordered table-striped">
                <tbody><tr>
                  <th style="width: 10px">No</th>
                  
                  <th style="width: 40px">Nama Kategori Mata Kuliah</th>
                </tr>
                <tr>
                  <td>1.</td>
                  <td>Update software</td>  
                </tr>
                <tr>
                  <td>2.</td>
                  <td>Clean database</td>
                </tr>
                <tr>
                  <td>3.</td>
                  <td>Cron job running</td>
                </tr>
                <tr>
                  <td>4.</td>
                  <td>Fix and squish bugs</td>
                </tr>
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

         
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

@endsection

@section('code-footer')




@endsection
