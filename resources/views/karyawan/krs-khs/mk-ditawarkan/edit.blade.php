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