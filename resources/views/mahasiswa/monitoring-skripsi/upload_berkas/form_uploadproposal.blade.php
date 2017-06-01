@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Upload Berkas
@endsection

@section('contentheader_title')
Upload Berkas
@endsection

@section('main-content')
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data Mahasiswa</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
              <div class="form-group">
                  <label for="name" class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="name" placeholder="Dzikri Robbi Usamah">
                  </div>
                </div>
                <div class="form-group">
                  <label for="nim" class="col-sm-2 control-label">NIM</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="nim" placeholder="081411633004">
                  </div>
                </div>
                 <div class="form-group">
                  <label for="dosen pembimbing" class="col-sm-2 control-label">Dosen Pembimbing 1</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="dosen" placeholder="Barry Nuqoba">
                  </div>
                </div>
                <div class="form-group">
                  <label for="dosen pembimbing" class="col-sm-2 control-label" >Dosen Pembimbing 2</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="dosen" placeholder="Army Justitia">
                </div>
                </div>
                <div class="form-group">
                  <label for="judul proposal" class="col-sm-2 control-label">Judul Proposal</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="judul proposal" placeholder="Sistem Pengambil keputusan penjualan Saham">
                </div>
                </div>
                </div>
                </form>
                </div>
<div class="row">
<div class="col-md-6">
  <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Upload Berkas Proposal</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="{{url('mahasiswa/monitoring-skripsi/upload-proposal')}}" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

              <div class="box-body">
                <div class="form-group">
                  <label for="file_pen" class="col-sm-2 control-label">Upload Berkas Proposal</label>
                  <div class="col-md-8">
                  <input type="file" id="upload_berkas" name="upload_berkas_proposal" placeholder="Pilih File" required>

                  <p class="help-block">*File berformat .pdf, .doc atau .docx</p>

                  </div>
                  </div>
                <div class="box-footer">
                <center><button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Submit</button></center>
              </div>
                
              </div>
              </form>
              </div>
              </div>
  <div class="col-md-6">
    <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Upload Berkas Skripsi</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="{{url('mahasiswa/monitoring-skripsi/upload-skripsi')}}" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="box-body">
               <div class="form-group">
                  <label for="file_pen" class="col-sm-2 control-label">Upload Berkas Skripsi</label>
                  <div class="col-md-8">
                  <input type="file" id="upload_berkas" name="upload_berkas_skripsi" placeholder="Pilih File" required>

                  <p class="help-block">*File berformat .pdf, .doc atau .docx</p>

                </div>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <center><button type="submit" class="btn btn-primary"  data-toggle="modal" data-target="#myModal">Submit</button></center>
              </div>
            </form>
          </div>
  </div>
  </div>
  <!-- /.box-body -->
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Notifikasi</h4>
        </div>
        <div class="modal-body">
          <p>Upload berhasil.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
              </div>
              </div>
              </div>
           
@endsection

@section('code-footer')




@endsection