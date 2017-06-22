@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Input Mata Kuliah Ditawarkan
@endsection

@section('contentheader_title')
<!-- Nama konten -->
Input Mata Kuliah Ditawarkan
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
            <!-- /.box-header -->
       
              <form role="form" id="mk_ditawarkan" method="post" action="{{url('karyawan/krs-khs/mk-ditawarkan/create')}}" enctype="multipart/form-data"  class="form-horizontal">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <!-- text input -->
                  <label>Tahun Akademik</label>
                <br>
                  <div class="col-md-2">
                  <select class="form-control" id="periode" name="periode">
                    <option>Gasal</option>
                    <option>Genap</option>
                  </select>
                  </div>
                  <div class="col-md-2">
                  <select class="form-control" name="tahun_awal" required>
                  <option value="">Tahun Awal</option>
                    @for($i = 2000; $i <= 2100; $i++)
                    <option>{{$i}}</option>
                    @endfor
                  </select>
                  </div>
                  <div class="col-md-1">
                  <div class="col-md-12">
                  <h4><b>/</b></h4>
                  </div>
                  </div>
                  <div class="col-md-2">
                  <select class="form-control" name="tahun_akhir" required>
                  <option value="">Tahun Akhir</option>
                    @for($i = 2000; $i <= 2100; $i++)
                    <option>{{$i}}</option>
                    @endfor
                  </select>
                  </div>
                </br>
                </br>
                </br>
              <label>Mata Kuliah</label>
              @foreach ($mk_ditawarkan as $i => $r)
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="cek[]" value="{{$r->id_mk}}">
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

<script type="text/javascript">
$( "#datepicker" ).datepicker({
        changeMonth: false,
        changeYear: true
    });
    
</script>
@endsection