@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Edit Mata Kuliah Ditawarkan
@endsection

@section('contentheader_title')
<!-- Nama konten -->
Edit Mata Kuliah Ditawarkan
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

<div class="form-group">
        <label>Tahun Akademik {{$tahun->semester_periode}}</label>
      </div>
<div class="box">
            <!-- /.box-header -->
  <div class="box-body">
    <form role="form" id="mk_ditawarkan" method="post" action="{{url('karyawan/krs-khs/mk-ditawarkan/'.$tahun->id_thn_akademik.'/edit')}}" enctype="multipart/form-data"  class="form-horizontal">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <!-- text input -->
    <label>Mata Kuliah</label>
    @foreach ($matkul as $r)
    <div class="checkbox">
      <label>
        <input type="checkbox" name="cek[]" value="{{$r->id_mk}}"  {{ in_array($r->id_mk,$mk_dipilih) ? 'checked ' : '' }} >
            {{$r->nama_matkul}}
      </label>
    </div>
    @endforeach

  <!-- /.submit-->
  <div class="box-footer">
      <button type="submit" class="btn btn-primary">Edit</button>
    </div>
    </form>
  </div>
</div>



@endsection

@section('code-footer')




@endsection