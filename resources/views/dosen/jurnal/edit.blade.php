@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
<!-- Nama konten -->
Edit Data Jurnal
@endsection

@section('contentheader_title')
<!-- Nama konten -->
Edit Data Jurnal
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
              <h3 class="box-title">Data Jurnal</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputPassword1">Judul Jurnal</label>
                  <input type="type" class="form-control" id="exampleInputPassword1" placeholder="Judul">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Penulis ke</label>
                  <input type="type" class="form-control" id="exampleInputPassword1" placeholder="Isi Penulis ke">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Volume</label>
                  <input type="type" class="form-control" id="exampleInputPassword1" placeholder="Isi volume ke">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Halaman Jurnal</label>
                  <input type="type" class="form-control" id="exampleInputPassword1" placeholder="Isi Halaman Jurnal">
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword1">Bidang Jurnal</label>
                  <input type="type" class="form-control" id="exampleInputPassword1" placeholder="Nama Bidang Jurnal">
                </div>

        <div class="form-group">
                <label>Tanggal jurnal:</label>
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
                  <label for="exampleInputFile">File input</label>
                  <input type="file" id="exampleInputFile">

                  <p class="help-block">Unggah Dokumen Jurnal Disini</p>
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