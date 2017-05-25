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
                <p>Silahkan download template input nilai</p>
                  <a class="btn btn-info" href="{{url('dosen/krs-khs/nilai/download')}}">Download</a>
                  <br>
                  <br>
                  <p>Upload file dalam bentuk excel</p>
                  <input name="excel" type="file" type="excel">
                  <br>
                <button type="submit" class="btn btn-primary">Upload</button>
</form>
</div>
</div>
@endsection

@section('code-footer')

@endsection
