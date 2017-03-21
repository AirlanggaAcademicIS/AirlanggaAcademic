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
   <div class="box">
            <div class="box-header">
              <h3 class="box-title">Halaman Prestasi Mahasiswa</h3>
            </div>
          
           <a href="{{url('/mahasiswa/input_prestasi')}}" class="btn btn-md btn-info" style="margin-left: 10px;">Input Prestasi</a>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nama Kegiatan</th>
                  <th>Tahun Kegiatan</th>
                  <th>Status</th>
                  <th>Point</th>
                  <th></th>
                
                </tr>
                </thead>
                <tbody>
               
                <tr>
                  <td>PPKMB</td>
                  <td>2014</td>
                  <td>Terverifikasi</td>
                  <td>20</td>
                  <td> <button onclick="return confirm('Anda yakin untuk menghapus data prestasi ini?')" type="button" class="btn btn-md btn-primary btn-sm">Delete</button></td>
                </tr>
                <tr>
                  <td>ESQ</td>
                  <td>2014</td>
                  <td>Terverifikasi</td>
                  <td>30</td>
                  <td> <button onclick="return confirm('Anda yakin untuk menghapus data prestasi ini?')" type="button" class="btn btn-md btn-primary btn-sm">Delete</button></td>
                </tr>
                <tr>
                  <td>Program Kegiatan Mahasiswa</td>
                  <td>2015</td>
                  <td>Belum Terverifikasi</td>
                  <td>25</td>
                  <td><a href="{{url('/mahasiswa/edit_prestasi')}}" class="btn btn-md btn-primary btn-sm">Edit</a> <button onclick="return confirm('Anda yakin untuk menghapus data prestasi ini?')" type="button" class="btn btn-md btn-primary btn-sm">Delete</button></td>
                </tr>

 
                </tbody>
                
              </table>
              <h4> Total Point : 50
              </h4>
            </div>
            <!-- /.box-body -->
          </div>
                          <div class="alert alert-success">
  <strong>Success!</strong> Data prestasi anda telah tersimpan.
</div>

@endsection

@section('code-footer')




@endsection