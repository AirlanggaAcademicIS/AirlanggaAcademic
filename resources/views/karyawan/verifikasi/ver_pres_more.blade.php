@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Verifikasi Prestasi Mahasiswa
@endsection

@section('contentheader_title')
Verifikasi Prestasi Mahasiswa
@endsection

@section('main-content')
<!-- Kodingan HTML ditaruh di sini -->
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
      <form id="tambahPrestasi" method="post" action="{{url('/karyawan/verifikasi/'.$prestasi->id_prestasi.'/prestasi')}}" enctype="multipart/form-data"  class="form-horizontal">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

<!-- menampilkan input nim-->

        <!-- Menampilkan input text biasa -->
        <div class="form-group">
          <label for="prestasi" class="col-sm-2 control-label">Prestasi</label>
          <div class="col-md-8">
            <input type="text" class="form-control input-lg" id="prestasi" name="prestasi" placeholder="Masukkan Nama Prestasi" value="{{$prestasi->prestasi}}" disabled required>
          </div>
        </div>

        <!-- Menampilkan input text biasa -->
        <div class="form-group">
          <label for="tahun_kegiatan" class="col-sm-2 control-label">Tahun Kegiatan</label>
          <div class="col-md-8">
            <input type="text" class="form-control input-lg" id="tahun_kegiatan" name="tahun_kegiatan" placeholder="Masukkan Tahun Kegiatan Prestasi" value="{{$prestasi->tahun_kegiatan}}" disabled required>
          </div>
        </div>

        <!-- Menampilkan dropdown -->
        <div class="form-group">
          <label for="kelompok_kegiatan" class="col-sm-2 control-label">Kelompok Kegiatan</label>
          <div class="col-md-8">
            <select class="form-control" name="kelompok_kegiatan" value= "{{$prestasi->kelompok_kegiatan}}" disabled required>
              @if (($prestasi->kelompok_kegiatan)=='Kegiatan Wajib Universitas')
              <option value="Kegiatan Wajib Universitas" selected="selected">Kegiatan Wajib Universitas</option>
              <option value="Kegiatan Bidang Organisasi dan Kepemimpinan">Kegiatan Bidang Organisasi dan Kepemimpinan</option>
              <option value="Kegiatan Bidang Minat dan Bakat">Kegiatan Bidang Minat dan Bakat</option>
              <option value="Kegiatan Bidang Kepedulian Sosial">Kegiatan Bidang Kepedulian Sosial</option>
              @elseif (($prestasi->kelompok_kegiatan)=='Kegiatan Bidang Organisasi dan Kepemimpinan')
              <option value="Kegiatan Wajib Universitas">Kegiatan Wajib Universitas</option>
              <option value="Kegiatan Bidang Organisasi dan Kepemimpinan" selected="selected">Kegiatan Bidang Organisasi dan Kepemimpinan</option>
              <option value="Kegiatan Bidang Minat dan Bakat">Kegiatan Bidang Minat dan Bakat</option>
              <option value="Kegiatan Bidang Kepedulian Sosial">Kegiatan Bidang Kepedulian Sosial</option>
              @elseif (($prestasi->kelompok_kegiatan)=='Kegiatan Bidang Minat dan Bakat')
              <option value="Kegiatan Wajib Universitas">Kegiatan Wajib Universitas</option>
              <option value="Kegiatan Bidang Organisasi dan Kepemimpinan">Kegiatan Bidang Organisasi dan Kepemimpinan</option>
              <option value="Kegiatan Bidang Minat dan Bakat" selected="selected">Kegiatan Bidang Minat dan Bakat</option>
              <option value="Kegiatan Bidang Kepedulian Sosial">Kegiatan Bidang Kepedulian Sosial</option>
              @elseif (($prestasi->kelompok_kegiatan)=='Kegiatan Bidang Kepedulian Sosial')
              <option value="Kegiatan Wajib Universitas">Kegiatan Wajib Universitas</option>
              <option value="Kegiatan Bidang Organisasi dan Kepemimpinan">Kegiatan Bidang Organisasi dan Kepemimpinan</option>
              <option value="Kegiatan Bidang Minat dan Bakat">Kegiatan Bidang Minat dan Bakat</option>
              <option value="Kegiatan Bidang Kepedulian Sosial" selected="selected">Kegiatan Bidang Kepedulian Sosial</option>
              @endif
            </select>
          </div>
        </div>

        <div class="form-group">
          <label for="jenis_kegiatan" class="col-sm-2 control-label">Jenis Kegiatan</label>
          <div class="col-md-8">
            <select class="form-control" name="jenis_kegiatan" value= "{{$prestasi->jenis_kegiatan}}" disabled required>
              @if (($prestasi->jenis_kegiatan)=='PPKMB')
              <option value="PPKMB" selected="selected">PPKMB</option>
              <option value="KKN">KKN</option>
              <option value="PKL">PKL</option>
              <option value="Pengurus Organisasi">Pengurus Organisasi</option>
              <option value="Panitia Kegiatan Kemahasiswaan">Panitia Kegiatan Kemahasiswaan</option>
              <option value="Latihan Kepemimpinan">Latihan Kepemimpinan</option>
              <option value="Berpartisipasi Dalam Pemira">Berpartisipasi Dalam Pemira</option>
              <option value="Mengikuti kegiatan Minat dan Bakat">Mengikuti kegiatan Minat dan Bakat</option>
              <option value="Memperoleh Prestasi Dalam Kegiatan Minat dan Bakat">Memperoleh Prestasi Dalam Kegiatan Minat dan Bakat</option>
              <option value="Mengikuti Pelaksanaan Bakti Sosial">Mengikuti Pelaksanaan Bakti Sosial</option>
              <option value="Penanganan Bencana">Penanganan Bencana</option>
              @elseif (($prestasi->jenis_kegiatan)=='KKN')
              <option value="PPKMB">PPKMB</option>
              <option value="KKN" selected="selected">KKN</option>
              <option value="PKL">PKL</option>
              <option value="Pengurus Organisasi">Pengurus Organisasi</option>
              <option value="Panitia Kegiatan Kemahasiswaan">Panitia Kegiatan Kemahasiswaan</option>
              <option value="Latihan Kepemimpinan">Latihan Kepemimpinan</option>
              <option value="Berpartisipasi Dalam Pemira">Berpartisipasi Dalam Pemira</option>
              <option value="Mengikuti kegiatan Minat dan Bakat">Mengikuti kegiatan Minat dan Bakat</option>
              <option value="Memperoleh Prestasi Dalam Kegiatan Minat dan Bakat">Memperoleh Prestasi Dalam Kegiatan Minat dan Bakat</option>
              <option value="Mengikuti Pelaksanaan Bakti Sosial">Mengikuti Pelaksanaan Bakti Sosial</option>
              <option value="Penanganan Bencana">Penanganan Bencana</option>
              @elseif (($prestasi->jenis_kegiatan)=='PKL')
              <option value="PPKMB">PPKMB</option>
              <option value="KKN">KKN</option>
              <option value="PKL" selected="selected">PKL</option>
              <option value="Pengurus Organisasi">Pengurus Organisasi</option>
              <option value="Panitia Kegiatan Kemahasiswaan">Panitia Kegiatan Kemahasiswaan</option>
              <option value="Latihan Kepemimpinan">Latihan Kepemimpinan</option>
              <option value="Berpartisipasi Dalam Pemira">Berpartisipasi Dalam Pemira</option>
              <option value="Mengikuti kegiatan Minat dan Bakat">Mengikuti kegiatan Minat dan Bakat</option>
              <option value="Memperoleh Prestasi Dalam Kegiatan Minat dan Bakat">Memperoleh Prestasi Dalam Kegiatan Minat dan Bakat</option>
              <option value="Mengikuti Pelaksanaan Bakti Sosial">Mengikuti Pelaksanaan Bakti Sosial</option>
              <option value="Penanganan Bencana">Penanganan Bencana</option>
              @elseif (($prestasi->jenis_kegiatan)=='Pengurus Organisasi')
              <option value="PPKMB">PPKMB</option>
              <option value="KKN">KKN</option>
              <option value="PKL">PKL</option>
              <option value="Pengurus Organisasi" selected="selected">Pengurus Organisasi</option>
              <option value="Panitia Kegiatan Kemahasiswaan">Panitia Kegiatan Kemahasiswaan</option>
              <option value="Latihan Kepemimpinan">Latihan Kepemimpinan</option>
              <option value="Berpartisipasi Dalam Pemira">Berpartisipasi Dalam Pemira</option>
              <option value="Mengikuti kegiatan Minat dan Bakat">Mengikuti kegiatan Minat dan Bakat</option>
              <option value="Memperoleh Prestasi Dalam Kegiatan Minat dan Bakat">Memperoleh Prestasi Dalam Kegiatan Minat dan Bakat</option>
              <option value="Mengikuti Pelaksanaan Bakti Sosial">Mengikuti Pelaksanaan Bakti Sosial</option>
              <option value="Penanganan Bencana">Penanganan Bencana</option>
              @elseif (($prestasi->jenis_kegiatan)=='Panitia Kegiatan Kemahasiswaan')
              <option value="PPKMB">PPKMB</option>
              <option value="KKN">KKN</option>
              <option value="PKL">PKL</option>
              <option value="Pengurus Organisasi">Pengurus Organisasi</option>
              <option value="Panitia Kegiatan Kemahasiswaan" selected="selected">Panitia Kegiatan Kemahasiswaan</option>
              <option value="Latihan Kepemimpinan">Latihan Kepemimpinan</option>
              <option value="Berpartisipasi Dalam Pemira">Berpartisipasi Dalam Pemira</option>
              <option value="Mengikuti kegiatan Minat dan Bakat">Mengikuti kegiatan Minat dan Bakat</option>
              <option value="Memperoleh Prestasi Dalam Kegiatan Minat dan Bakat">Memperoleh Prestasi Dalam Kegiatan Minat dan Bakat</option>
              <option value="Mengikuti Pelaksanaan Bakti Sosial">Mengikuti Pelaksanaan Bakti Sosial</option>
              <option value="Penanganan Bencana">Penanganan Bencana</option>
              @elseif (($prestasi->jenis_kegiatan)=='Latihan Kepemimpinan')
              <option value="PPKMB">PPKMB</option>
              <option value="KKN">KKN</option>
              <option value="PKL">PKL</option>
              <option value="Pengurus Organisasi">Pengurus Organisasi</option>
              <option value="Panitia Kegiatan Kemahasiswaan">Panitia Kegiatan Kemahasiswaan</option>
              <option value="Latihan Kepemimpinan" selected="selected">Latihan Kepemimpinan</option>
              <option value="Berpartisipasi Dalam Pemira">Berpartisipasi Dalam Pemira</option>
              <option value="Mengikuti kegiatan Minat dan Bakat">Mengikuti kegiatan Minat dan Bakat</option>
              <option value="Memperoleh Prestasi Dalam Kegiatan Minat dan Bakat">Memperoleh Prestasi Dalam Kegiatan Minat dan Bakat</option>
              <option value="Mengikuti Pelaksanaan Bakti Sosial">Mengikuti Pelaksanaan Bakti Sosial</option>
              <option value="Penanganan Bencana">Penanganan Bencana</option>
              @elseif (($prestasi->jenis_kegiatan)=='Berpartisipasi Dalam Pemira')
              <option value="PPKMB">PPKMB</option>
              <option value="KKN">KKN</option>
              <option value="PKL">PKL</option>
              <option value="Pengurus Organisasi">Pengurus Organisasi</option>
              <option value="Panitia Kegiatan Kemahasiswaan">Panitia Kegiatan Kemahasiswaan</option>
              <option value="Latihan Kepemimpinan">Latihan Kepemimpinan</option>
              <option value="Berpartisipasi Dalam Pemira" selected="selected">Berpartisipasi Dalam Pemira</option>
              <option value="Mengikuti kegiatan Minat dan Bakat">Mengikuti kegiatan Minat dan Bakat</option>
              <option value="Memperoleh Prestasi Dalam Kegiatan Minat dan Bakat">Memperoleh Prestasi Dalam Kegiatan Minat dan Bakat</option>
              <option value="Mengikuti Pelaksanaan Bakti Sosial">Mengikuti Pelaksanaan Bakti Sosial</option>
              <option value="Penanganan Bencana">Penanganan Bencana</option>
              @elseif (($prestasi->jenis_kegiatan)=='Mengikuti kegiatan Minat dan Bakat')
              <option value="PPKMB">PPKMB</option>
              <option value="KKN">KKN</option>
              <option value="PKL">PKL</option>
              <option value="Pengurus Organisasi">Pengurus Organisasi</option>
              <option value="Panitia Kegiatan Kemahasiswaan">Panitia Kegiatan Kemahasiswaan</option>
              <option value="Latihan Kepemimpinan">Latihan Kepemimpinan</option>
              <option value="Berpartisipasi Dalam Pemira">Berpartisipasi Dalam Pemira</option>
              <option value="Mengikuti kegiatan Minat dan Bakat" selected="selected">Mengikuti kegiatan Minat dan Bakat</option>
              <option value="Memperoleh Prestasi Dalam Kegiatan Minat dan Bakat">Memperoleh Prestasi Dalam Kegiatan Minat dan Bakat</option>
              <option value="Mengikuti Pelaksanaan Bakti Sosial">Mengikuti Pelaksanaan Bakti Sosial</option>
              <option value="Penanganan Bencana">Penanganan Bencana</option>
              @elseif (($prestasi->jenis_kegiatan)=='Memperoleh Prestasi Dalam Kegiatan Minat dan Bakat')
              <option value="PPKMB">PPKMB</option>
              <option value="KKN">KKN</option>
              <option value="PKL">PKL</option>
              <option value="Pengurus Organisasi">Pengurus Organisasi</option>
              <option value="Panitia Kegiatan Kemahasiswaan">Panitia Kegiatan Kemahasiswaan</option>
              <option value="Latihan Kepemimpinan">Latihan Kepemimpinan</option>
              <option value="Berpartisipasi Dalam Pemira">Berpartisipasi Dalam Pemira</option>
              <option value="Mengikuti kegiatan Minat dan Bakat">Mengikuti kegiatan Minat dan Bakat</option>
              <option value="Memperoleh Prestasi Dalam Kegiatan Minat dan Bakat" selected="selected">Memperoleh Prestasi Dalam Kegiatan Minat dan Bakat</option>
              <option value="Mengikuti Pelaksanaan Bakti Sosial">Mengikuti Pelaksanaan Bakti Sosial</option>
              <option value="Penanganan Bencana">Penanganan Bencana</option>
              @elseif (($prestasi->jenis_kegiatan)=='Mengikuti Pelaksanaan Bakti Sosial')
              <option value="PPKMB">PPKMB</option>
              <option value="KKN">KKN</option>
              <option value="PKL">PKL</option>
              <option value="Pengurus Organisasi">Pengurus Organisasi</option>
              <option value="Panitia Kegiatan Kemahasiswaan">Panitia Kegiatan Kemahasiswaan</option>
              <option value="Latihan Kepemimpinan">Latihan Kepemimpinan</option>
              <option value="Berpartisipasi Dalam Pemira">Berpartisipasi Dalam Pemira</option>
              <option value="Mengikuti kegiatan Minat dan Bakat">Mengikuti kegiatan Minat dan Bakat</option>
              <option value="Memperoleh Prestasi Dalam Kegiatan Minat dan Bakat">Memperoleh Prestasi Dalam Kegiatan Minat dan Bakat</option>
              <option value="Mengikuti Pelaksanaan Bakti Sosial" selected="selected">Mengikuti Pelaksanaan Bakti Sosial</option>
              <option value="Penanganan Bencana">Penanganan Bencana</option>
              @elseif (($prestasi->jenis_kegiatan)=='Penanganan Bencana')
              <option value="PPKMB">PPKMB</option>
              <option value="KKN">KKN</option>
              <option value="PKL">PKL</option>
              <option value="Pengurus Organisasi">Pengurus Organisasi</option>
              <option value="Panitia Kegiatan Kemahasiswaan">Panitia Kegiatan Kemahasiswaan</option>
              <option value="Latihan Kepemimpinan">Latihan Kepemimpinan</option>
              <option value="Berpartisipasi Dalam Pemira">Berpartisipasi Dalam Pemira</option>
              <option value="Mengikuti kegiatan Minat dan Bakat">Mengikuti kegiatan Minat dan Bakat</option>
              <option value="Memperoleh Prestasi Dalam Kegiatan Minat dan Bakat">Memperoleh Prestasi Dalam Kegiatan Minat dan Bakat</option>
              <option value="Mengikuti Pelaksanaan Bakti Sosial">Mengikuti Pelaksanaan Bakti Sosial</option>
              <option value="Penanganan Bencana" selected="selected">Penanganan Bencana</option>
              @endif
            </select>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label for="penyelenggara" class="col-sm-2 control-label">Penyelenggara</label>
          <div class="col-md-8">
            <input type="text" class="form-control input-lg" id="penyelenggara" name="penyelenggara" placeholder="Masukkan Penyelenggara Kegiatan" value="{{$prestasi->penyelenggara}}" disabled required>
          </div>
        </div>

        <!-- Menampilkan dropdown -->
        <div class="form-group">
          <label for="tingkat" class="col-sm-2 control-label">Tingkat</label>
          <div class="col-md-8">
            <select class="form-control" name="tingkat" value= "{{$prestasi->tingkat}}" disabled required>
              @if (($prestasi->tingkat)=='Universitas')
              <option value="Universitas" selected="selected">Universitas</option>
              <option value="Fakultas">Fakultas</option>
              <option value="Departemen/Prodi">Departemen/Prodi</option>
              <option value="Nasional">Nasional</option>
              <option value="Internasional">Internasional</option>
              @elseif (($prestasi->tingkat)=='Fakultas')
              <option value="Universitas">Universitas</option>
              <option value="Fakultas" selected="selected">Fakultas</option>
              <option value="Departemen/Prodi">Departemen/Prodi</option>
              <option value="Nasional">Nasional</option>
              <option value="Internasional">Internasional</option>
              @elseif (($prestasi->tingkat)=='Departemen/Prodi')
              <option value="Universitas">Universitas</option>
              <option value="Fakultas">Fakultas</option>
              <option value="Departemen/Prodi" selected="selected">Departemen/Prodi</option>
              <option value="Nasional">Nasional</option>
              <option value="Internasional">Internasional</option>
              @elseif (($prestasi->tingkat)=='Nasional')
              <option value="Universitas">Universitas</option>
              <option value="Fakultas">Fakultas</option>
              <option value="Departemen/Prodi">Departemen/Prodi</option>
              <option value="Nasional" selected="selected">Nasional</option>
              <option value="Internasional">Internasional</option>
              @elseif (($prestasi->tingkat)=='Internasional')
              <option value="Universitas">Universitas</option>
              <option value="Fakultas">Fakultas</option>
              <option value="Departemen/Prodi">Departemen/Prodi</option>
              <option value="Nasional">Nasional</option>
              <option value="Internasional" selected="selected">Internasional</option>
              @endif
            </select>
          </div>
        </div>

        <div class="form-group">
          <label for="file_prestasi" class="col-sm-2 control-label">File Prestasi</label>
          <div class="col-md-8">
            <a href="{{URL::asset('/img/prestasi/'.$prestasi->file_prestasi)}}"><img clickable="true" src="{{URL::asset('/img/prestasi/'.$prestasi->file_prestasi)}}" height="100px" width="100px" hspace="5px" vspace="2px" alt="gambar" style="border:2px solid gray" class="img-rounded" > </a>
            <a href ="{{url('/karyawan/verifikasi/downloadpresmhs/'.$prestasi->file_prestasi.'')}}">{{$prestasi->file_prestasi}}</a>
          </div>
        </div>

            <div class="form-group">
                <label for="ps_is_verified" class="col-sm-2 control-label">Status Verifikasi</label>
                <div class="col-md-8">
                <select name="ps_is_verified" class="form-control select2" value= "{{$prestasi->ps_is_verified}}" required>
                @if (($prestasi->ps_is_verified)=='1')
                  <option selected="selected" value="1">Diterima</option>
                  <option value="2">Revisi</option>
                  <option value="3">Ditolak</option>
                @elseif (($prestasi->ps_is_verified)=='2')
                  <option value="1">Diterima</option>
                  <option selected="selected" value="2">Revisi</option>
                  <option value="3">Ditolak</option>
                @elseif (($prestasi->ps_is_verified)=='3')
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
                  <input name="skor" type="number" class="form-control" rows="1" placeholder="Skor" value= "{{$prestasi->skor}}" ></input>
                  </div>
                </div>

              <div class="form-group">
                  <label for="alasan" class="col-sm-2 control-label">Alasan</label>
                  <div class="col-md-8">
                  <input name="alasan_verified" type="text" class="form-control" rows="1" placeholder="Alasan" value= "{{$prestasi->alasan_verified}}"></input>
                  <p class="help-block">*Silahkan isi alasan jika prestasi perlu direvisi/ditolak</p>
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