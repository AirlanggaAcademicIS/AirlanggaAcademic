@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
<!-- Nama konten -->
Input Penelitian 
@endsection

@section('contentheader_title')
<!-- Nama konten -->
Input Penelitian
@endsection

@section('main-content')
<!-- Kodingan HTML ditaruh di sini -->
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
                  <textarea type="text" class="form-control" rows="2" placeholder="Judul Penelitian"></textarea>
                </div>
                <div class="form-group">
                  <label>Jenis Penelitian</label>
                  <select class="form-control">
                    <option>PKM</option>
                    <option>Karya Ilmiah</option>
                    <option>Penelitian Dosen</option>
                    <!-- <option>option 4</option>
                    <option>option 5</option> -->
                  </select>
                </div>
                <div class="form-group">
                  <label>Anggota</label>
                  <input type="text" class="form-control" placeholder="Anggota Penelitian">
                </div>
                <div class="form-group">
                  <label>Tahun</label>
                  <input type="text" class="form-control" placeholder="Tahun Penelitian">
                </div>
                <div class="form-group">
                  <label>Halaman Naskah</label>
                  <input type="text" class="form-control" placeholder="Jumlah Halaman">
                </div>
                <div class="form-group">
                  <label>Sumber Dana</label>
                  <input type="text" class="form-control" placeholder="Sumber Dana">
                </div>
                <div class="form-group">
                  <label>Besar Dana</label>
                  <input type="text" class="form-control" placeholder="Besar Dana">
                </div>
                <div class="form-group">
                  <label>SK</label>
                  <input type="text" class="form-control" placeholder="SK">
                </div>
                <div class="form-group">
                  <label>Publikasi</label>
                  <input type="text" class="form-control" placeholder="Publikasi">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Upload gambar</label>
                  <input type="file" id="exampleInputFile">

                  <p class="help-block">*Ukuran gambar < 1 mb</p>
                </div>
                <!-- <div class="checkbox">
                  <label>
                    <input type="checkbox"> Check me out
                  </label>
                </div> -->
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <a href="{{url('/mahasiswa/penelitian')}}"><button type="button" class="btn btn-primary">Save</button></a>
              </div>
            </form>
          </div>
          <!-- /.box -->

@endsection

@section('code-footer')




@endsection