@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
<!-- Nama konten -->
Nama konten 
@endsection

@section('contentheader_title')
<!-- Nama konten -->
Nama konten
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
            <input type="text" class="form-control input-lg" id="judul" name="judul" placeholder="Masukkan Judul" value="{{$penelitian->judul}}" disabled>
          </div>
        </div>

        <div class="form-group">
          <label for="peneliti" class="col-sm-2 control-label">Nama</label>
          <div class="col-md-8">
            <input type="text" class="form-control input-lg" id="peneliti" name="peneliti" placeholder="Masukkan Nama" value="{{$penelitian->peneliti}}" disabled>
          </div>
        </div>

        <div class="form-group">
          <label for="fakultas" class="col-sm-2 control-label">Fakultas</label>
          <div class="col-md-8">
            <input type="text" class="form-control input-lg" id="fakultas" name="fakultas" placeholder="Masukkan Fakultas" value="{{$penelitian->fakultas}}" disabled>
          </div>
        </div>

        <div class="form-group">
          <label for="tahun" class="col-sm-2 control-label">Tahun</label>
          <div class="col-md-8">
            <input type="text" class="form-control input-lg" id="tahun" name="tahun" placeholder="Masukkan Tahun Penelitian" value="{{$penelitian->tahun}}" disabled>
          </div>
        </div>

        <div class="form-group">
          <label for="halaman_naskah" class="col-sm-2 control-label">Jumlah Halaman</label>
          <div class="col-md-8">
            <input type="text" class="form-control input-lg" id="halaman_naskah" name="halaman_naskah" placeholder="Masukkan Jumlah Halaman" value="{{$penelitian->halaman_naskah}}" disabled>
          </div>
        </div>

        <div class="form-group">
          <label for="sumber_dana" class="col-sm-2 control-label">Sumber Dana</label>
          <div class="col-md-8">
            <input type="text" class="form-control input-lg" id="sumber_dana" name="sumber_dana" placeholder="Masukkan Sumber Dana" value="{{$penelitian->sumber_dana}}" disabled>
          </div>
        </div>

        <div class="form-group">
          <label for="besar_dana" class="col-sm-2 control-label">Besar Dana</label>
          <div class="col-md-8">
            <input type="text" class="form-control input-lg" id="besar_dana" name="besar_dana" placeholder="Masukkan Besar Dana" value="{{$penelitian->besar_dana}}" disabled>
            <p class="help-block">*Isi ' - ' jika tidak ada</p>
          </div>
        </div>

        <div class="form-group">
          <label for="sk" class="col-sm-2 control-label">SK</label>
          <div class="col-md-8">
            <input type="text" class="form-control input-lg" id="sk" name="sk" placeholder="Masukkan SK" value="{{$penelitian->sk}}" disabled>
            <p class="help-block">*Isi ' - ' jika tidak ada</p>
          </div>
        </div>

        <div class="form-group">
          <label for="publikasi" class="col-sm-2 control-label">Publikasi</label>
          <div class="col-md-8">
            <input type="text" class="form-control input-lg" id="publikasi" name="publikasi" placeholder="Masukkan Publikasi" value="{{$penelitian->publikasi}}" disabled>
            <p class="help-block">*Isi ' - ' jika tidak ada</p>
          </div>
        </div>

        <div class="form-group">
          <label for="kategori_penelitian" class="col-sm-2 control-label">Jenis Penelitian</label>
          <div class="col-md-8">
            <select name="kategori_penelitian" value="{{$penelitian->kategori_penelitian}}" disabled>
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

        <div class="form-group">
                  <label for="file_pen" class="col-sm-2 control-label">Upload Scan PDF</label>
                  <div class="col-md-8">
                  <a href ="{{url('/karyawan/verifikasi/download/'.$penelitian->file_pen.'')}}">{{$penelitian->file_pen}}</a>
                  </div>
                </div>

                <div class="form-group">
                <label for="is_verified" class="col-sm-2 control-label">Status Verifikasi</label>
                <div class="col-md-8">
                <select name="is_verified" class="form-control select2" required>
                  <option selected="selected">-----</option>
                  <option value="2">Tidak Diterima</option>
                  <option value="1">Diterima</option>
                </select>
                </div>
              </div>

              <div class="form-group">
                  <label for="alasan" class="col-sm-2 control-label">Alasan</label>
                  <div class="col-md-8">
                  <textarea name="alasan_verifikasi" type="text" class="form-control" rows="1" placeholder="Alasan"></textarea>
                  </div>
                </div>
                <div class="col-md-8 col-md-offset-2">
                <button type="button" class="btn btn-default"><a href="{{url('/karyawan/verifikasi/prestasi')}}">Cancel</a></button>
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




@endsection