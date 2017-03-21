@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
<!-- Nama konten -->
Tambah Data pengmas
@endsection

@section('contentheader_title')
<!-- Nama konten -->
Tambah Data pengmas
@endsection

@section('main-content')
<!-- Kodingan HTML ditaruh di sini -->
<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data pengmas</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputPassword1">Nama Kegiatan</label>
                  <input type="type" class="form-control" id="exampleInputPassword1" placeholder="Judul">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Tempat Kegiatan</label>
                  <input type="type" class="form-control" id="exampleInputPassword1" placeholder="Nama Ketua pengmas">
                </div>
                

        <div class="form-group">
                <label>tanggal kegiatan:</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->

                <div class="form-group">
                  <label for="exampleInputFile">File pengmas</label>
                  <input type="file" id="exampleInputFile">

                  <p class="help-block">Unggah Dokumen pengmas Disini</p>
                </div>
                </div>

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
@endsection

@section('code-footer')




@endsection