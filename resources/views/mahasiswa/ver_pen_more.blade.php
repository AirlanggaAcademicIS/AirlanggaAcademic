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
<!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Form Penelitian Mahasiswa</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label>Judul Penelitian</label>
                  <textarea type="text" class="form-control" rows="2" placeholder="Judul Penelitian" disabled>Pembangkit Listrik Tenaga Dalam</textarea>
                </div>
                <div class="form-group">
                  <label>Jenis Penelitian</label>
                  <select class="form-control" disabled>
                    <option>PKM</option>
                    <option>Karya Ilmiah</option>
                    <option>Penelitian Dosen</option>
                    <!-- <option>option 4</option>
                    <option>option 5</option> -->
                  </select>
                </div>
                <div class="form-group">
                  <label>Anggota</label>
                  <textarea type="text" class="form-control" rows="3" placeholder="Anggota Penelitian" disabled>1. M. Yusuf Indra
2. Nuzulla Fery Lian
3. Fandi Bram</textarea>
                </div>
                <div class="form-group">
                  <label>Tahun</label>
                  <textarea type="text" class="form-control" rows="1" placeholder="Tahun Penelitian" disabled>2016</textarea>
                </div>
                <div class="form-group">
                  <label>Halaman Naskah</label>
                  <textarea type="text" class="form-control" rows="1" placeholder="Jumlah Halaman" disabled>35</textarea>
                </div>
                <div class="form-group">
                  <label>Sumber Dana</label>
                  <textarea type="text" class="form-control" rows="1" placeholder="Sumber Dana" disabled>DIKTI</textarea>
                </div>
                <div class="form-group">
                  <label>Besar Dana</label>
                  <textarea type="text" class="form-control" rows="1" placeholder="Besar Dana" disabled>50,000,000</textarea>
                </div>
                <div class="form-group">
                  <label>SK</label>
                  <textarea type="text" class="form-control" rows="1" placeholder="SK" disabled>---</textarea>
                </div>
                <div class="form-group">
                  <label>Publikasi</label>
                  <textarea type="text" class="form-control" rows="1" placeholder="Publikasi" disabled>----</textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">File</label>
                  <p> Penelitian </p>
                </div>
                <!-- <div class="checkbox">
                  <label>
                    <input type="checkbox"> Check me out
                  </label>
                </div> -->
                <div class="form-group">
                <label>Status Verifikasi</label>
                <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">-----</option>
                  <option>Diterima</option>
                  <option>Tidak Diterima</option>
                </select>
              </div>
              <div class="form-group">
                  <label>Alasan</label>
                  <textarea type="text" class="form-control" rows="1" placeholder="Alasan"></textarea>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
              	<a href="{{url('/karyawan/ver-pen/')}}"><button type="button" class="btn btn-default">Cancel</button></a>
                <a href="{{url('/karyawan/ver-pen/')}}"><button type="button" class="btn btn-primary">Save</button></a>
              </div>
            </form>
          </div>
          <!-- /.box -->
@endsection

@section('code-footer')




@endsection