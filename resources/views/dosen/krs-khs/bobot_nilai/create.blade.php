@extends('adminlte::layouts.app')

@section('htmlheader_title')
Tambah Persentase
@endsection

@section('contentheader_title')
Tambah Persentase
@endsection

@section('code-header')

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script> 
<link rel="stylesheet" href="{{ asset('/css/dropzone.css') }}">

@endsection

@section('main-content')
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
      <form id="tambahBobot" method="post" action="{{url('dosen/krs-khs/bobot_nilai/'.$mk_ditawarkan_id.'/create')}}" enctype="multipart/form-data"  class="form-horizontal">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        
        <!-- Menampilkan input text biasa -->
        <div class="form-group">
          <label for="persentase" class="col-sm-2 control-label">Persentase Bobot UTS :</label>
          <div class="col-md-8">
            <input type="text" class="form-control input-lg" id="persentase" name="persentase_uts" placeholder="" required>
          </div>
        </div>

        <div class="form-group">
          <label for="persentase" class="col-sm-2 control-label">Persentase Bobot UAS :</label>
          <div class="col-md-8">
            <input type="text" class="form-control input-lg" id="persentase" name="persentase_uas" placeholder="" required>
          </div>
        </div>

        <div class="form-group">
          <label for="persentase" class="col-sm-2 control-label">Persentase Bobot Tugas :</label>
          <div class="col-md-8">
            <input type="text" class="form-control input-lg" id="persentase" name="persentase_tugas" placeholder="" required>
          </div>
        </div>

        <div class="form-group">
          <label for="persentase" class="col-sm-2 control-label">Persentase Bobot Kuis :</label>
          <div class="col-md-8">
            <input type="text" class="form-control input-lg" id="persentase" name="persentase_kuis" placeholder="" required>
          </div>
        </div>

        <div class="form-group">
          <label for="persentase" class="col-sm-2 control-label">Persentase Bobot Softskill :</label>
          <div class="col-md-8">
            <input type="text" class="form-control input-lg" id="persentase" name="persentase_softskill" placeholder="" required>
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

