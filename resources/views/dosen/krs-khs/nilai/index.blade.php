@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Upload Nilai
@endsection

@section('contentheader_title')
Upload Nilai
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

<div class="box">
<div class="box-body">
 <form role="form" id="id_mk_ditawarkan" method="post" action="{{url('dosen/krs-khs/nilai/'.$id_mk.'/upload')}}" enctype="multipart/form-data"  class="form-horizontal">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <p style="font-size: 20px;">Template penilaian mata kuliah</p>
                  <a class="btn btn-info" href="{{ URL::asset('file_krskhs/download/Template Upload Nilai.xlsx') }}"><i class="fa fa-download" aria-hidden="true"></i> Download</a>
                  <br>
                  <br>
                  <p style="font-size: 20px;">Silahkan upload file penilaian dalam format Excel (.xlsx atau .xls)</p>
                  <input name="excel" type="file" id="excel" type="excel">
                  <br>
                <button type="submit" class="btn btn-primary"><i class="fa fa-upload" aria-hidden="true"></i>
 Upload</button>
</form>
</div>
</div>
@endsection

@section('code-footer')
<script type="text/javascript">
  var elBrowse  = document.getElementById("excel");
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
        if ( (/\.(xlsx|xls)$/i).test(file.name) ) 
        {
          readImage( file ); 
        } 
        else 
        {
          errors += file.name +" is unsupported Excel extension\n";
          document.getElementById("excel").value = null;  
        }
      }
    }
    if (errors) {
      alert(errors); 
    }
  });
</script>
@endsection
