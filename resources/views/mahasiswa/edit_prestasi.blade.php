@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
<!-- Nama konten -->
Nama konten 
@endsection

@section('contentheader_title')
<!-- Nama konten -->
Prestasi
@endsection

@section('main-content')
<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Form Pengisian Prestasi</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{url('/mahasiswa/tabel_berhasil')}}">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputNama1">Nama Kegiatan</label>
                  <input type="nama" class="form-control" id="exampleInputNama1" value="Program Kegiatan Mahasiswa" placeholder="Nama Kegiatan" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputTahun1">Tahun Kegiatan</label>
                  <input type="tahun" class="form-control" id="exampleInputTahun1"  value="2015" placeholder="Tahun Kegiatan" required>
                </div>
                 <div class="form-group">
                  <label for="exampleInputJenis1">Jenis Kegiatan</label>
                  <input type="jenis" class="form-control" id="exampleInputJenis1"  value="Lomba Karya Tulis Ilmiah" placeholder="Jenis Kegiatan" required>
                </div>
                <div class="form-group">
                <label>Kelompok Kegiatan</label>
                <select class="form-control"  required>
                  <option value="" >Pilih Kelompok Kegiatan </option>
                  <option>Kegiatan Wajib Universitas</option>
                  <option selected>Kegiatan Bidang Organisasi dan Kepemimpinan</option>
                  <option>Kegiatan Bidang Penalaran dan Keilmuan</option>
                  <option>Kegiatan Bidang Minat dan Bakat</option>
                  <option>Kegiatan Bidang Kepedulian Sosial</option>
                  <option>Kegiatan Bidang Lainnya</option>
                </select>
              </div>
                 <div class="form-group">
                  <label for="exampleInputPenyelenggara1">Penyelenggara</label>
                  <input type="penyelenggara" class="form-control" id="exampleInputPenyelenggara1" value="Universitas" placeholder="Penyelenggara" required>
                </div>
                 <div class="form-group">
                  <label for="exampleInputTingkat1">Tingkat</label>
                  <input type="tingkat" class="form-control" id="exampleInputTingkat1" value="Nasional" placeholder="Tingkat" required>
                </div>
 
                <div class="form-group">
                  <label for="exampleInputFile">Browse</label>
                  <input type="file" id="exampleInputFile">
                  <p class="help-block">Type file jpg,jpeg,png only</p>
                </div>
                <img src="http://publicdomainvectors.org/photos/038_certificate-achievement-vector-l.jpg" alt="Mountain View" style="width:304px;height:228px;">



              </div>
              <!-- /.box-body -->
    <div class="box-footer">
                <td><a href="{{url('/mahasiswa/prestasi')}}" class="btn btn-md btn-default btn-sm">Cancel</a>
                <button type="submit" class="btn btn-md btn-default btn-sm"> Save</button>
              </div>
            </div>
      </div>
      <!-- /.row -->
    </div></section>
@endsection

@section('code-footer')




@endsection