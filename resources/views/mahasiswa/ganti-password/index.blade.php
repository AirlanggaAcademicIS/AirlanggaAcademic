@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Ganti Password
@endsection

@section('contentheader_title')
Ganti Password
@endsection

@section('main-content')
<!-- include summernote css/js-->
<style>
  .form-group label{
    text-align: left !important;
  }
</style>
  <!-- Ini buat menampilkan notifikasi -->
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
      <br>
      <form id="ganti-password" method="post" action="{{url('/mahasiswa/ganti-password')}}" enctype="multipart/form-data"  class="form-horizontal">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

<!-- menampilkan input nim-->

        <!-- Menampilkan input text biasa -->
        <div class="form-group">
          <label for="prestasi" class="col-sm-2 control-label">Masukkan Password Lama</label>
          <div class="col-md-8">
            <input type="password" class="form-control input-lg" id="oldpassword" name="oldpassword" placeholder="Masukkan Password Lama" required>
          </div>
        </div>

        <div class="form-group">
          <label for="password" class="col-sm-2 control-label">Masukan Password Baru</label>
          <div class="col-md-8">
            <input type="password" class="form-control input-lg" id="password" name="password" placeholder="Masukkan Password Baru" required>
          </div>
        </div>

        <!-- Menampilkan input text biasa -->
        <div class="form-group">
          <label for="penyelenggara" class="col-sm-2 control-label">Ulangi Password Baru</label>
          <div class="col-md-8">
            <input type="password" class="form-control input-lg" id="password_confirmation" name="password_confirmation" placeholder="Ulangi Password Baru" required>
          </div>
        </div>

        
        <div class="form-group text-center">
          <div class="col-md-8 col-md-offset-2">
          <button type="submit" class="btn btn-primary btn-lg">
              Confirm
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>



@endsection


@section('code-footer')


@endsection