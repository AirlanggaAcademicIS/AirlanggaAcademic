@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
<!-- Nama konten -->
Nama konten
@endsection

@section('contentheader_title')
Notulensi Rapat
@endsection

@section('main-content')
<div class="container">
          <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
       <form class="form-horizontal">
  <div class="form-group">
    <label for="namaRapat" class="col-sm-2 control-label">Nama Rapat</label>
    <div class="col-sm-9">
      <input class="form-control" id="namaRapat" type="text" disabled>
    </div>
  </div>
  <div class="form-group">
    <label for="agenda"class="col-sm-2 control-label">Agenda Rapat:</label>
    <div class="col-sm-9">
      <textarea class="form-control" rows="3" id="agenda" disabled></textarea>
    </div>
  </div>
  <div class="form-group">
    <label for="waktuRapat" class="col-sm-2 control-label">Waktu Rapat</label>
    <div class="col-sm-9">
      <input class="form-control" id="waktuRapat" type="text" disabled>
    </div>
  </div>
    <div class="form-group">
      <label for="tempatRapat" class="col-sm-2 control-label">Tempat Rapat</label>
      <div class="col-sm-9">
       <input class="form-control" id="waktuRapat" type="text" disabled>
      </div>
      </div>
     <div class="form-group">
  <label for="hasil"class="col-sm-2 control-label">Hasil Rapat:</label>
  <div class="col-sm-9">
  <textarea class="form-control" rows="5" id="hasil" disabled></textarea>
</div>
    </div>
    <div class="form-group">
      <label for="kpd" class="col-sm-2 control-label">Kepada</label>
      <div class="col-sm-9">
      <select class="form-control" id="kpd">
        <option>Pimpinan</option>
        <option>Dosen</option>
      </select>
      </div>
      <br>
      <br>
      <br>
      <div class="form-group">
    <div class="col-sm-offset-10 col-sm-10">
      <button type="kirim" class="btn btn-info">Kirim</button>
    </div>
  </div>
</div>

@endsection

@section('code-footer')




@endsection