@extends('adminlte::layouts.app')

@section('htmlheader_title')
Tambah Mata Kuliah
@endsection

@section('contentheader_title')
Tambah Mata Kuliah
@endsection

@section('code-header')

@endsection

@section('main-content')
<style>
    .form-group label{
        text-align: left !important;
    }
</style>
    <!-- Ini buat menampilkan notifikasi -->

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
            <form id="tambahMatkul" method="post" action="{{url('/kurikulum/mata-kuliah/create')}}" enctype="multipart/form-data"  class="form-horizontal">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                    <label for="nim" class="col-sm-2 control-label">Jenis Matkul</label>
                    <div class="col-md-8">
                    <select class="form-control" id="id_jenis_mk" name="id_jenis_mk" required>
                        @foreach($jenis_matkul as $jenis_mk)
                        <option selected value="{{$jenis_mk->id}}"> {{$jenis_mk->jenis_mk}}
                        </option>
                        @endforeach
                    </select>
                </div>
                </div>
                <!-- Menampilkan input text biasa -->
                <div class="form-group">
                    <label for="nim" class="col-sm-2 control-label">Kode</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="kode_matkul" name="kode_matkul" placeholder="Masukkan Kode Mata Kuliah" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="nama" class="col-sm-2 control-label">Nama</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="nama_matkul" name="nama_matkul" placeholder="Masukkan Nama Mata mata-kuliah" required>
                    </div>
                </div>

            <!-- Menampilkan textarea -->
                <div class="form-group">
                    <label for="nama" class="col-sm-2 control-label">SKS</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="sks" name="sks" placeholder="Masukkan SKS"  onkeypress="var key = event.keyCode || event.charCode; return ((key  >= 48 && key  <= 57) || key == 8);" required>
                    </div>
                </div>

                <!-- Menampilkan dropdown -->
                <div class="form-group">
                    <label for="nama" class="col-sm-2 control-label">Deskripsi</label>
                    <div class="col-md-8">
                        <textarea class="form-control" id="deskripsi_matkul" name="deskripsi_matkul" placeholder=" Masukkan Deskripsi Mata Kuliah" required cols="82" rows="5">
                        </textarea>
                    </div>
                </div>

                <!-- Menampilkan tanggal dengan datepicker -->
                <div class="form-group">
                    <label for="nama" class="col-sm-2 control-label">Capaian</label>
                    <div class="col-md-8">
                        <textarea id="capaian_matkul" name="capaian_matkul" class="form-control" placeholder=" Masukkan Capaian Mata Kuliah" required cols="82" rows="5">
                        </textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label for="nama" class="col-sm-2 control-label">Penilaian</label>
                    <div class="col-md-8">
                        <textarea class="form-control" id="penilaian_matkul" name="penilaian_matkul" placeholder=" Masukkan Penilaian Mata Kuliah" required cols="82" rows="5">
                        </textarea>
                    </div>
                </div>                

                <div class="form-group">
                    <label for="nama" class="col-sm-2 control-label">Pokok Pembahasan</label>
                    <div class="col-md-8">
                        <textarea id="pokok_pembahasan" class="form-control" name="pokok_pembahasan" placeholder=" Masukkan Pokok Pembahasan" required cols="82" rows="5">
                        </textarea>
                    </div>
                </div>                                

                <div class="form-group">
                    <label for="nama" class="col-sm-2 control-label">Pustaka Utama</label>
                    <div class="col-md-8">
                        <textarea id="pustaka_utama" class="form-control" name="pustaka_utama" placeholder=" Masukkan Pustaka Utama" required cols="82" rows="5">
                        </textarea>
                    </div>
                </div>                                                

                <div class="form-group">
                    <label for="nama" class="col-sm-2 control-label">Pustaka Pendukung</label>
                    <div class="col-md-8">
                        <textarea id="pustaka_pendukung" class="form-control" name="pustaka_pendukung" placeholder=" Masukkan Pustaka Pendukung" required cols="82" rows="5">
                        </textarea>
                    </div>
                </div>                                                

                <div class="form-group">
                    <label for="nama" class="col-sm-2 control-label">Syarat SKS</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="syarat_sks" name="syarat_sks" placeholder="Masukkan Syarat SKS Mata Kuliah" onkeypress="var key = event.keyCode || event.charCode; return ((key  >= 48 && key  <= 57) || key == 8);" required>
                    </div>
                </div>


                <div style="text-align: right;">
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
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
$( function() {
    var date = $('#datepicker').datepicker({ dateFormat: 'yy/mm/dd' }).val();

  } );
  </script>
@endsection

