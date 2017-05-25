@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Edit Mata Kuliah Ditawarkan
@endsection

@section('contentheader_title')
<!-- Nama konten -->
Input Mata Kuliah Ditawarkan
@endsection

@section('main-content')
<div class="box">

            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" id="mk_ditawarkan" method="post" action="{{url('krs-khs/mk_ditawarkan/'.$mk_ditawarkan->thn_akademik_id.'/create')}}" enctype="multipart/form-data"  class="form-horizontal">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <!-- text input -->
                <div class="form-group">
                  <label>Tahun Akademik</label>
                <br>
                  <label>{{$mk_ditawarkan->thn_akademik_id}}</label>
                    <br>
                    <br>
              <label>Mata Kuliah</label>
              @foreach ($mk_ditawarkan as $i => $r)
              <div class="checkbox">
                <label>
                  <input 
                  type="checkbox" name="cek[]" value="{{$r->id_mk}}">
                      {{$r->nama_matkul}}
                </label>
              </div>
              @endforeach

            <!-- /.submit-->
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
              </form>
</div>
</div>



@endsection

@section('code-footer')




@endsection