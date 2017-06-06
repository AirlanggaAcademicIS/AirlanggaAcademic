@extends('adminlte::layouts.app')

@section('htmlheader_title')

@endsection

@section('contentheader_title')
Konfirmasi Hasil Rapat
@endsection

@section('code-header')

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script> 

@endsection

@section('main-content')
<style>
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
  <div class="col-md-10 col-md-offset-1">

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

@forelse($notulensi as $id_notulen)
      <form id="KonfirmasiHasilRapat" method="post" action="{{url('notulensi/konfirmasi/'.$id_notulen->id_notulen.'/konfirmasihasil')}}" enctype="multipart/form-data"  class="form-horizontal">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <!-- Menampilkan input text biasa -->
          
                    <div class="form-group">
                      <label>Ruangan</label>
                      <input type="text" class="form-control" value="{{ $id_notulen->nama_ruang }}" readonly>
                    </div>

                    <div class="form-group">
                      <label>Nama Petugas</label>
                      <input type="text" class="form-control" value="{{ $id_notulen->nama_petugas }}" readonly>
                    </div>

                    <div class="form-group">
                      <label>Nama Ketua Rapat</label>
                      <input type="text" class="form-control" value="{{ $id_notulen->nama_dosen }}" readonly>
                    </div>

                    <div class="form-group">
                      <label>Nama Rapat</label>
                      <input type="text" class="form-control" value="{{ $id_notulen->nama_rapat }}" readonly>
                    </div>

                    <div class="form-group">
                      <label>Agenda Rapat</label>
                      <input type="text" class="form-control" value="{{ $id_notulen->agenda_rapat}}" readonly>
                    </div>

                   
                    <div class="form-group">
                      <label>Waktu Pelaksanaan</label>
                      <input type="text" class="form-control" value="{{ $id_notulen->waktu_pelaksanaan}}" readonly>
                    </div>

                    <div class="form-group"> 
                      <label for="hasil_pembahasan"class="col-sm-3 control-label">Hasil Pembahasan</label> 
                      <textarea disabled class="form-control" rows="5" name="hasil_pembahasan" enable>{{$id_notulen->hasil_pembahasan}}</textarea> 
                    </div>
                  

@empty
@endforelse
        <div class="form-group">
                <label for="id_verifikasi" class="col-sm-2 control-label">Status Verifikasi</label>
                <select name="id_verifikasi" class="form-control select2" required>
                  <option selected="selected"></option>
                  <option value="1">Sudah Verifikasi</option>
                </select>
                </div>
              

        <div class="form-group text-center">
          <div class="col-md-10 col-md-offset-6">
          <button type="confirm" class="btn btn-primary btn-lg">
              Konfirmasi
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>


@endsection

@section('code-footer')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
$( function() {
    var date = $('#datepicker').datepicker({ dateFormat: 'yy/mm/dd' }).val();

  } );
  </script>
@endsection

