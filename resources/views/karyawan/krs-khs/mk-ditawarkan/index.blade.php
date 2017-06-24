@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
MK Ditawarkan
@endsection

@section('contentheader_title')
MK Ditawarkan
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
<div style="margin-bottom: 10px">
  <!-- Href ini biar diklik masuk ke form tambah -->
  <a href="{{ url('karyawan/krs-khs/mk-ditawarkan/create') }}" type="button" class="btn btn-info btn-md" >
    <i class="fa fa-plus-square"></i> Tambah Periode MK Ditawarkan</a>
</div >
<form action="{{url('karyawan/krs-khs/mk-ditawarkan/show')}}" method="get">
<div class="col-md-3" style="padding: 0;">
<div style="overflow: auto">
  <select class="form-control" id="periode" name="periode" required>
      <option value="">Tahun Akademik</option>
      @foreach($tahun as $t) 
      <option value ="{{$t->id_thn_akademik}}">{{$t->semester_periode}}</option>
      @endforeach
  </select>
  <div class="col-md-4">
            <button class="btn btn-info" type="submit">Pilih</button>
          </div>
</div>
</div>
</form>

@endsection

@section('code-footer')

@endsection
