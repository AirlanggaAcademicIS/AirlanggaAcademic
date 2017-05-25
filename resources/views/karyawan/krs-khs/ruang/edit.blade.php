@extends('adminlte::layouts.app')

@section('code-header')

@endsection

@section('htmlheader_title')
Edit ruang
@endsection

@section('contentheader_title')
Edit ruang
@endsection

@section('main-content')

<!-- <style>
  .form-group label{
    text-align: left !important;
  }
</style>

  @foreach (['danger', 'warning', 'success', 'info'] as $msg)
  @if(Session::has('alert-' . $msg))
<div class="alert alert-{{ $msg }}">
  <p class="" style="border-radius: 0">{{ Session::get('alert-' . $msg) }}</p>
</div>
  {!!Session::forget('alert-' . $msg)!!}
  @endif
  @endforeach


<div class="row">
  <div class="col-md-12">
    <div class="">

      @if (count($errors) > 0)
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif
      <br> -->

<div style="margin-bottom: 10px">

  <!-- Href ini biar diklik masuk ke form tambah -->
  <form role="form" method="post" action="{{url('karyawan/krs-khs/ruang/'.$ruang->id_ruang.'/edit')}}">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <!-- text input -->
  
                  <input type="hidden" class="form-control input-md" id="id_ruang" name="id_ruang" placeholder="Enter ... " value="{{$ruang->id_ruang}}" required>
             
                <div class="form-group">
                  <label>Nama Ruang</label>
                  <input type="text" class="form-control input-md" id="nama_ruang" name="nama_ruang" placeholder="Enter ... " value="{{$ruang->nama_ruang}}" required>
                </div>
                <div class="form-group">
                  <label>Kapasitas Ruang</label>
                  <input type="number" class="form-control input-md" id="kapasitas" name="kapasitas" placeholder="Enter ..." value="{{$ruang->kapasitas}}" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
</div>
@endsection

@section('code-footer')

@endsection