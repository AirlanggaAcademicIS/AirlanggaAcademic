@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Jadwal Permohonan
@endsection

@section('contentheader_title')
Jadwal Permohonan
@endsection

@section('main-content')

<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Form Permohonan Ruangan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form id="tambahPermohonanRuang" method="post" action="{{url('/memohon-ruangan/create')}}" enctype="multipart/form-data"  class="form-horizontal">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <!-- Menampilkan input text biasa --> 
      <div class="box-body">
        <div class="form-group">
          <label for="ruang_id" class="col-sm-2 control-label">Ruang</label>
          <div class="col-md-8">
            <select name="ruang_id" required>
               @foreach($ruang as $r)
               <option value="{{$r->id_ruang}}">{{$r->nama_ruang}}</option>
               @endforeach
              </select>
          </div>
        </div>

        <div class="form-group">
          <label for="hari_id" class="col-sm-2 control-label">Hari</label>
          <div class="col-md-8">
            <select name="hari_id" required>
              <option value="1">Senin</option>
              <option value="2">Selasa</option>
              <option value="3">Rabu</option>
              <option value="4">Kamis</option>
              <option value="5">Jumat</option>
              <option value="6">Sabtu</option>
              </select>
          </div>
        </div>

        <div class="form-group">
          <label for="jam_id" class="col-sm-2 control-label">Jam</label>
          <div class="col-md-8">
            <select name="jam_id" required>
              <option value="1">07:00</option>
              <option value="2">07:50</option>
              <option value="3">08:50</option>
              <option value="4">09:40</option>
              <option value="5">10:40</option>
              <option value="6">11:30</option>
              <option value="7">13:00</option>
              <option value="8">13:50</option>
              <option value="9">14:50</option>
              <option value="10">15:40</option>
              <option value="11">16:40</option>
              <option value="12">17:30</option>
              </select>
          </div>
        </div>

        <div class="form-group">
          <label for="sks" class="col-sm-2 control-label">SKS</label>
          <div class="col-md-8">
            <select name="sks" required>
              <option value="0">1</option>
              <option value="1">2</option>
              <option value="2">3</option>
              <option value="3">4</option>
              </select>
          </div>
        </div>

        <div class="form-group text-center">
          <div class="col-md-8 col-md-offset-2">
          <button type="submit" class="btn btn-primary btn-lg">
              Confirm
            </button>
          </div>
        </div>
        </div>
      </form>
    </div>



@endsection

@section('code-footer')

@endsection