@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Data Mahasiswa Skripsi
@endsection

@section('contentheader_title')
Monitoring Skripsi
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

<div style="overflow: auto">
<table id="myTable" class="table table-striped table-bordered" cellspacing="0">
  <thead><h3>Data Skripsi</h3>
    <tr>
      <tr><td width="15%">Nama</td><td>{{$mhs->nama_mhs}}</td></tr>
      <tr><td width="15%">NIM</td><td>{{$mhs->nim_id}}</td></tr>
    </tr>
  </thead>

  <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Download Form Usulan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="{{url('mahasiswa/monitoring-skripsi/download_form')}}" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

              <div class="box-body">
                <div class="form-group">
                  <label for="file_pen" class="col-sm-2 control-label">Download Form Usulan</label>
                  
                  </div>
                <div class="box-footer">
                <center><button type="submit" class="btn btn-primary">Download</button></center>
              </div>
                
              </div>
              </form>
              </div>

  <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Upload Form Usulan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="{{url('mahasiswa/monitoring-skripsi/upload_form')}}" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

              <div class="box-body">
                <div class="form-group">
                  <label for="file_pen" class="col-sm-2 control-label">Upload Form Usulan</label>
                  <div class="col-md-8">
                  <input type="file" id="upload_berkas" name="upload_berkas_proposal" placeholder="Pilih File" required>

                  <p class="help-block">*File berformat .pdf, .doc atau .docx</p>

                  </div>
                  </div>
                <div class="box-footer">
                <center><button type="submit" class="btn btn-primary">Submit</button></center>
              </div>
                
              </div>
              </form>
              </div>



  </tbody>
</table>
</div>

@endsection

@section('code-footer')

@endsection