@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Verifikasi Penelitian Mahasiswa
@endsection

@section('contentheader_title')
Verifikasi Penelitian Mahasiswa
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
      <form id="VerPen" method="post" action="{{url('/karyawan/verifikasi/'.$penelitian->kode_penelitian.'/penelitian')}}" enctype="multipart/form-data"  class="form-horizontal">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <!-- Menampilkan input text biasa -->
        <div class="form-group">
          <label for="judul" class="col-sm-2 control-label">Judul</label>
          <div class="col-md-8">
            <input type="text" class="form-control input-lg" id="judul" name="judul" placeholder="Masukkan Judul" value="{{$penelitian->judul}}" disabled required>
          </div>
        </div>

        <div class="form-group">
          <label for="peneliti" class="col-sm-2 control-label">Nama</label>
          <div class="col-md-8">
            <input type="text" class="form-control input-lg" id="peneliti" name="peneliti" placeholder="Masukkan Nama" value="{{$penelitian->peneliti}}" disabled required>
          </div>
        </div>

        <div class="form-group">
          <label for="fakultas" class="col-sm-2 control-label">Fakultas</label>
          <div class="col-md-8">
            <input type="text" class="form-control input-lg" id="fakultas" name="fakultas" placeholder="Masukkan Fakultas" value="{{$penelitian->fakultas}}" disabled required>
          </div>
        </div>

        <div class="form-group">
          <label for="tahun" class="col-sm-2 control-label">Tahun</label>
          <div class="col-md-8">
            <input type="text" class="form-control input-lg" id="tahun" name="tahun" onkeypress="var key = event.keyCode || event.charCode; return ((key  >= 48 && key  <= 57) || key == 8);"; placeholder="Masukkan Tahun Penelitian" value="{{$penelitian->tahun}}" maxlength="4"  disabled required>
          </div>
        </div>

        <div class="form-group">
          <label for="halaman_naskah" class="col-sm-2 control-label">Jumlah Halaman</label>
          <div class="col-md-8">
            <input type="text" class="form-control input-lg" id="halaman_naskah" name="halaman_naskah" onkeypress="var key = event.keyCode || event.charCode; return ((key  >= 48 && key  <= 57) || key == 8);"; placeholder="Masukkan Jumlah Halaman" value="{{$penelitian->halaman_naskah}}" disabled required>
          </div>
        </div>

        <div class="form-group">
          <label for="sumber_dana" class="col-sm-2 control-label">Sumber Dana</label>
          <div class="col-md-8">
            <input type="text" class="form-control input-lg" id="sumber_dana" name="sumber_dana" placeholder="Masukkan Sumber Dana" value="{{$penelitian->sumber_dana}}" disabled required>
          </div>
        </div>

        <div class="form-group">
          <label for="besar_dana" class="col-sm-2 control-label">Besar Dana</label>
          <div class="col-md-8">
            <input type="text" class="form-control input-lg" id="besar_dana" name="besar_dana" placeholder="Masukkan Besar Dana" value="{{$penelitian->besar_dana}}" disabled required>
            <p class="help-block">*Isi ' - ' jika tidak ada</p>
          </div>
        </div>

        <div class="form-group">
          <label for="sk" class="col-sm-2 control-label">SK</label>
          <div class="col-md-8">
            <input type="text" class="form-control input-lg" id="sk" name="sk" placeholder="Masukkan SK" value="{{$penelitian->sk}}" disabled required>
            <p class="help-block">*Isi ' - ' jika tidak ada</p>
          </div>
        </div>

        <div class="form-group">
          <label for="publikasi" class="col-sm-2 control-label">Publikasi</label>
          <div class="col-md-8">
            <input type="text" class="form-control input-lg" id="publikasi" name="publikasi" placeholder="Masukkan Publikasi" value="{{$penelitian->publikasi}}" disabled required>
            <p class="help-block">*Isi ' - ' jika tidak ada</p>
          </div>
        </div>

        <div class="form-group">
          <label for="kategori_penelitian" class="col-sm-2 control-label">Jenis Penelitian</label>
          <div class="col-md-8">
            <select class="form-control input-lg" name="kategori_penelitian" value="{{$penelitian->kategori_penelitian}}" disabled required>
                @if (($penelitian->kategori_penelitian)=='PKM')
              <option value="PKM" selected="selected">PKM</option>
              <option value="Penelitian Dosen">Penelitian Dosen</option>
              <option value="Karya Ilmiah">Karya Ilmiah</option>
              @elseif (($penelitian->kategori_penelitian)=='Penelitian Dosen')
              <option value="PKM">PKM</option>
              <option value="Penelitian Dosen" selected="selected">Penelitian Dosen</option>
              <option value="Karya Ilmiah">Karya Ilmiah</option>
              @elseif (($penelitian->kategori_penelitian)=='Karya Ilmiah')
              <option value="PKM">PKM</option>
              <option value="Penelitian Dosen">Penelitian Dosen</option>
              <option value="Karya Ilmiah" selected="selected">Karya Ilmiah</option>
              @endif
            </select>
          </div>
        </div>

        
                <!-- Menampilkan textarea -->
        <div class="form-group">
          <label for="nama" class="col-sm-2 control-label">Anggota</label>
          <div class="col-md-8">
            <textarea type="text" class="form-control input-lg" id="anggota" name="anggota" disabled required cols="55" rows="5"
            placeholder="Masukkan Anggota" required>{{$penelitian->anggota}}</textarea>
          </div>
        </div>

        <!-- Menampilkan input text biasa -->
        <div class="form-group">
          <label for="nama" class="col-sm-2 control-label">Abstrak</label>
          <div class="col-md-8">
            <textarea id="abstract" class="form-control input-lg" name="abstract" placeholder=" Masukkan Abstract" disabled required cols="115" rows="5">{{$penelitian->abstract}}</textarea>
          </div>
        </div>


        <div class="form-group">
                  <label for="file_pen" class="col-sm-2 control-label">Upload Scan PDF</label>
                  <div class="col-md-8">
                  <a href ="{{url('/karyawan/verifikasi/downloadpenmhs/'.$penelitian->file_pen.'')}}">{{$penelitian->file_pen}}</a>
                  </div>
                </div>

        <div class="form-group">
                <label for="is_verified" class="col-sm-2 control-label">Status Verifikasi</label>
                <div class="col-md-8">
                <select name="is_verified" class="form-control select2" value= "{{$penelitian->is_verified}}" required>
                @if (($penelitian->is_verified)=='1')
                  <option selected="selected" value="1">Diterima</option>
                  <option value="2">Revisi</option>
                  <option value="3">Ditolak</option>
                @elseif (($penelitian->is_verified)=='2')
                  <option value="1">Diterima</option>
                  <option selected="selected" value="2">Revisi</option>
                  <option value="3">Ditolak</option>
                  @elseif (($penelitian->is_verified)=='3')
                  <option value="1">Diterima</option>
                  <option value="2">Revisi</option>
                  <option selected="selected" value="3">Ditolak</option>
                @else
                  <option selected="selected">-----</option>
                  <option  value="1">Diterima</option>
                  <option value="2">Revisi</option>
                  <option value="3">Ditolak</option>
                @endif
                </select>
                </div>
              </div>

              <div class="form-group">
                  <label for="skor" class="col-sm-2 control-label">Skor</label>
                  <div class="col-md-8">
                  <input name="skor" type="number" class="form-control" rows="1" placeholder="Skor" value= "{{$penelitian->skor}}" ></input>
                  </div>
                </div>

              <div class="form-group">
                  <label for="alasan" class="col-sm-2 control-label">Alasan</label>
                  <div class="col-md-8">
                  <input name="alasan_verified" type="text" class="form-control" rows="1" placeholder="Alasan" value= "{{$penelitian->alasan_verified}}"></input>
                  <p class="help-block">*Silahkan isi alasan jika penelitian perlu direvisi/ditolak</p>
                  </div>
                </div>
                <div class="col-md-8 col-md-offset-2">
                <button type="button" class="btn btn-default"><a href="{{url('/karyawan/verifikasi/penelitian')}}">Cancel</a></button>
                  <button type="submit" class="btn btn-primary btn-lg">
              Confirm
            </button>
          </div>
        
      </form>
    </div>
  </div>
</div>
@endsection

@section('code-footer')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
@endsection