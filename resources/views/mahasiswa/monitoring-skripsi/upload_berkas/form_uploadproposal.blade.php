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
                  <input type="text" class="form-control" id="name" placeholder="{{$mhs->nama_mhs}}" readonly="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="nim" class="col-sm-2 control-label">NIM</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="nim" placeholder="{{$mhs->nim_id}}" readonly="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="judul" class="col-sm-2 control-label">Judul </label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="judul" placeholder="{{$skripsi->Judul}}" readonly="">
                </div>
                </div>
                <div class="form-group">
                  <label for="jkbk" class="col-sm-2 control-label">KBK </label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="kbk" placeholder="{{$skripsi->kbk['jenis_kbk']}}" readonly="">
                </div>
                </div>
                 <div class="form-group">
                  <label for="dosen pembimbing" class="col-sm-2 control-label">Dosen Pembimbing 1</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="dosen" placeholder="{{$dosen1->nama_dosen}}" readonly="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="dosen pembimbing" class="col-sm-2 control-label" >Dosen Pembimbing 2</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="dosen" placeholder="{{$dosen2->nama_dosen}}" readonly="">
                </div>
                </div>
                <div class="form-group">
                  <label for="status file proposal" class="col-sm-2 control-label" >Status File Proposal</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="file proposal" placeholder="@if($skripsi->upload_berkas_proposal==null)
      Belum Terupload
      @else
      Sudah Terupload
      @endif" readonly=>
                </div>
                </div>
                <div class="form-group">
                  <label for="status file Skripsi" class="col-sm-2 control-label" >Status File Skripsi</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="file Skripsi" placeholder="@if($skripsi->upload_berkas_skripsi==null)
      {{'Belum Terupload'}}
      @else
      {{'Sudah Terupload'}}
      @endif" readonly="">
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
                  <input type="file" id="upload_berkas_proposal" name="upload_berkas_proposal" placeholder="Pilih File" required>

                  <p class="help-block">*File berformat .pdf, .doc atau .docx</p>

                  </div>
                  </div>
                <div class="box-footer">
                <center><button type="submit" class="btn btn-primary">Submit</button></center>
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
                  <input type="file" id="upload_berkas_skripsi" name="upload_berkas_skripsi" placeholder="Pilih File" required>

                  <p class="help-block">*File berformat .pdf, .doc atau .docx</p>

                </div>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <center><button type="submit" class="btn btn-primary">Submit</button></center>
              </div>
            </form>
          </div>
  </div>
  </div>
  <!-- /.box-body -->
           
@endsection

@section('code-footer')
<script src="http://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script type="text/javascript">

var elBrowse  = document.getElementById("upload_berkas_proposal");
  elBrowse.addEventListener("change", function() {
    var files  = this.files;
    var errors = "";
    if (!files) {
      errors += "File upload not supported by your browser.";
    }
    if (files && files[0]) 
    {
      for(var i=0; i<files.length; i++) 
      {
        var file = files[i];
        if ( (/\.(doc|docx|pdf)$/i).test(file.name) ) 
        {
          readImage( file ); 
        } 
        else 
        {
          errors += file.name +" is unsupported document extension\n";
          document.getElementById("upload_berkas_proposal").value = null;  
        }
      }
    }
    if (errors) {
      alert(errors); 
    }
  });

  var elBrowse  = document.getElementById("upload_berkas_skripsi");
  elBrowse.addEventListener("change", function() {
    var files  = this.files;
    var errors = "";
    if (!files) {
      errors += "File upload not supported by your browser.";
    }
    if (files && files[0]) 
    {
      for(var i=0; i<files.length; i++) 
      {
        var file = files[i];
        if ( (/\.(doc|docx|pdf)$/i).test(file.name) ) 
        {
          readImage( file ); 
        } 
        else 
        {
          errors += file.name +" is unsupported document extension\n";
          document.getElementById("upload_berkas_skripsi").value = null;  
        }
      }
    }
    if (errors) {
      alert(errors); 
    }
  });
</script>




@endsection