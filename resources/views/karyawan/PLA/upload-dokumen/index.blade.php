@extends('adminlte::layouts.app')

@section('code-header')

 
@endsection

@section('htmlheader_title')
Upload Dokumen
@endsection

@section('contentheader_title')
Upload Dokumen
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
<!-- <div style="margin-bottom: 10px">
  <a href="{{url('/mahasiswa/bdata-mahasiswa/create')}}" type="button" class="btn btn-info btn-md" >
    <i class="fa fa-plus-square"></i> Tambah bdata Mahasiswa</a>

</div> -->

<form  method="post" action="{{url('karyawan/upload-dokumen/upload')}}" enctype="multipart/form-data"  class="form-horizontal">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="row" style="padding:10px">
    <div class="col-sm-6">
      <div class="form-group-text-center" > 
      <label for="nama" class="col-sm-4 control-label">Nama Dokumen</label> 
        <div class="col-sm-8"> 
          <input  type="text" id="nama" class="form-control input-md" name="nama">
        </div>  
      </div>
    </div>

    <div class="col-sm-3">
        <label for="file_doc">File input</label> 
        <input type="file" id="file_doc" name="url_dokumen">
        </div>

        <div class="col-sm-3">
      <button type="submit" class="btn btn-primary btn-sm">Upload</button>  
      </div>
</div>
</form>

<div style="padding:10px">
<table id="myTable" class="table table-striped table-bordered" cellspacing="0">
  <thead>
    <tr>
      <th style="text-align:center">No.</th>
      <th style="text-align:center">Nama Dokumen</th>      
      <th style="text-align:center">Tanggal Dibagikan</th>
      <th style="text-align:center">Pengupload</th>
      <th style="text-align:center">Action</th>
    </tr>
    </thead>
  <tbody>
   @forelse($dokumen as $i => $b) 
    <tr>
      <td style="text-align:center">{{ $i+1 }}</td>
      <td style="text-align:center">{{$b->nama}}</td>
      <td style="text-align:center">{{$b->tgl_upload}}</td>
      <td  style="text-align:center">{{$b->petugas['nama_petugas']}}</td>
      <td style="text-align:center">
      <a onclick="return confirm('Anda yakin untuk menghapus file ini?');" href="{{url('karyawan/upload-dokumen/'.$b->id_dokumen.'/delete')}}" class="btn btn-danger btn-xs">
        <i class="fa fa-trash-o"></i> Hapus</a>
        </td>
    </tr>
     @empty
        <tr>
          <td colspan="12"><center>Belum Ada Dokumen yang Dibagikan</center></td>
        </tr>
    @endforelse
  </tbody>
</table>
</div>

@endsection

@section('code-footer')
<script src="http://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('#myTable').DataTable();
});

var elBrowse  = document.getElementById("file_doc");
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
        if ( (/\.(doc|docx|ppt|pptx|xls|xlsx|pdf)$/i).test(file.name) ) 
        {
          readImage( file ); 
        } 
        else 
        {
          errors += file.name +" is unsupported document extension\n";
          document.getElementById("file_doc").value = null;  
        }
      }
    }
    if (errors) {
      alert(errors); 
    }
  });
</script>
@endsection