@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
<!-- Nama konten -->
Nama konten 
@endsection

@section('contentheader_title')
<!-- Nama konten -->
Nama konten
@endsection

@section('main-content')
  <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Upload File Proposal</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
              <div class="form-group">
                  <label for="name">Nama</label>
                  <input type="text" class="form-control" id="name" placeholder="Dzikri Robbi Usamah">
                </div>
                <div class="form-group">
                  <label for="nim">NIM</label>
                  <input type="text" class="form-control" id="nim" placeholder="081411633004">
                </div>
                 <div class="form-group">
                  <label for="dosen pembimbing">Dosen Pembimbing 1</label>
                  <input type="text" class="form-control" id="dosen" placeholder="Barry Nuqoba">
                </div>
                <div class="form-group">
                  <label for="dosen pembimbing">Dosen Pembimbing 2</label>
                  <input type="text" class="form-control" id="dosen" placeholder="Army Justitia">
                </div>
                
                <div class="form-group">
                  <label for="judul skripsi">Judul Skripsi</label>
                  <input type="text" class="form-control" id="judul skripsi" placeholder="Sistem Pengambil keputusan penjualan Saham">
                </div>

                <div class="form-group">
                  <label for="exampleInputFile">Input skripsi</label>
                  <input type="file" id="exampleInputFile">

         
                </div>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
@endsection

@section('code-footer')