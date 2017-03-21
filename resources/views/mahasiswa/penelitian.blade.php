@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
<!-- Nama konten -->
Nama konten 
@endsection

@section('contentheader_title')
<!-- Nama konten -->
Penelitian Mahasiswa
@endsection

@section('main-content')
<!-- Kodingan HTML ditaruh di sini -->
<div class="box">
            <div class="box-header">
              <h3 class="box-title">Daftar penelitian Mahasiswa</h3>
            </div>
            <div class="box-footer">
                <a href="{{url('/mahasiswa/input_penelitian')}}"><button type="submit" class="btn btn-primary" style="margin-left: 10px">Form Upload Penelitian</button></a>
            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th></th>
                  <th>Judul Penelitian</th>
                  <th>Jenis</th>
                  <th>Anggota</th>
                  <th>Tahun Penelitian</th>
                  <th>Status</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td><a href="{{url('/mahasiswa/edit_penelitian')}}">Edit</a>|
                  <a onclick="return alert('Apa anda yakin ?')">Delete</a>
                  </td>
                  <td>Pembangkit Listrik Tenaga Dalam</td>
                  <td>PKM</td>
                  <td>1. M. Yusuf Indra<br>
                  	2. Nuzulla Fery Lian<br>
                  	3. Fandi Bram
                  </td>
                  <td>2016</td>
                  <td>Belum terverifikasi</td>
                </tr>
                <tr>
                  <td>Edit|Delete</td>
                  <td>Perancangan dan Pembuatan Spektrofotometer Cahaya Tampak Berdasarkan Hukum Lambert-Beer</td>
                  <td>Karya Ilmiah</td>
                  <td>1. M. Yusuf Indra<br>
                  	2. Nuzulla Fery Lian<br>
                  	3. Fandi Bram
                  </td>
                  <td>2015</td>
                  <td>Terverifikasi</td>
                </tr>
                <tr>
                  <td>Edit|Delete</td>
                  <td>Fiber Optic Displacement Sensors and Their Applications</td>
                  <td>Penelitian Dosen</td>
                  <td>1. M. Yusuf Indra</td>
                  <td>2014</td>
                  <td>Terverifikasi</td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                  <th></th>
                  <th>Judul Penelitian</th>
                  <th>Jenis</th>
                  <th>Anggota</th>
                  <th>Tahun Penelitian</th>
                  <th>Status</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
@endsection

@section('code-footer')




@endsection