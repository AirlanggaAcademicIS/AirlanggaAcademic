@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
<!-- Nama konten -->
Pengabdian Masyarakat
@endsection

@section('contentheader_title')
<!-- Nama konten -->
Pengabdian Masyarakat
@endsection

@section('main-content')
<!-- Kodingan HTML ditaruh di sini -->
 <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
             
            <a href="{{url('dosen/pengmas/create')}}"><button type="button" class="btn btn-primary">Tambah data pengmas</button></a>
              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-bordered">
                <tr class="info">
                  <th>Nama kegiatan</th>
                  <th>Tempat Kegiatan</th>
                  <th>Tanggal Kegiatan</th>
                  <th>File</th>
                  <th>Status Pengmas</th>
                  <th> <td>
                 
                </tr>
                <tr>
                  <td>Kegiatan Donor Darah dalam rangka memperingati Hari Kartini di Universitas Airlangga</td>
                  <td>Danau Kampus C Unair</td>
                  
                  <td>11-03-2016</td>
                  <td> </td>
                  <td><span class="label label-success">Approved</span></td>
                  <td><a href="{{url('dosen/pengmas/edit')}}"><button type="button" class="btn btn-info btn-xs pull">Edit</button></a>
                  <button type="button" class="btn btn-danger btn-xs">Delete</button></td>
                </tr>
                <tr>
                  <td>Pemberdayaan portal e-learning gtatis Esfindo dan persiapan Calon mahasiswa program sarjana Teknologi Informasi</td>
                  <td>Gedung Rektorat Kampus C</td>
                  
                  <td>16-09-2016</td>
                  <td> </td>
                  <td><span class="label label-warning">Process</span></td>
                  <td><a href="{{url('dosen/pengmas/edit')}}"><button type="button" class="btn btn-info btn-xs pull">Edit</button></a>
                  <button type="button" class="btn btn-danger btn-xs">Delete</button></td>
                </tr>
                <tr>
                  <td>Pembuatan bahan ajar berbasis ICT</td>
                  <td>FST Universitas Airlangga</td>
                  
                  <td>11-01-2016</td>
                  <td> </td>
                  <td><span class="label label-success">Approved</span></td>
                  <td><a href="{{url('dosen/pengmas/edit')}}"><button type="button" class="btn btn-info btn-xs pull">Edit</button></a>
                  <button type="button" class="btn btn-danger btn-xs">Delete</button></td>
                </tr>
                 <tr>
                  <td>Managemen Konten Pembelajaran di system e-learning berbasis Moodle</td>
                  <td>Surabaya</td>
                  
                  <td>03-03-2016</td>
                  <td> </td>
                  <td><span class="label label-success">Approved</span></td>
                  <td><a href="{{url('dosen/pengmas/edit')}}"><button type="button" class="btn btn-info btn-xs pull">Edit</button></a>
                  <button type="button" class="btn btn-danger btn-xs">Delete</button></td>
                </tr>
                 <tr>
                  <td>Pendidikan dan Pelatihan Perpustakaan Berbasis TI : Literasi Informasi</td>
                  <td>Sidoarjo</td>
                  
                  <td>12-03-2016</td>
                  <td> </td>
                  <td><span class="label label-success">Approved</span></td>
                  <td><a href="{{url('dosen/pengmas/edit')}}"><button type="button" class="btn btn-info btn-xs pull">Edit</button></a>
                  <button type="button" class="btn btn-danger btn-xs">Delete</button></td>
                </tr>
                 <tr>
                  <td>Penerapan Ipteks bagi Masyarakat </td>
                  <td>Surabaya</td>
                  
                  <td>29-03-2016</td>
                  <td> </td>
                  <td><span class="label label-success">Approved</span></td>
                  <td><a href="{{url('dosen/pengmas/edit')}}"><button type="button" class="btn btn-info btn-xs pull">Edit</button></a>
                  <button type="button" class="btn btn-danger btn-xs">Delete</button></td>
                </tr>
                <td>Bincang-bincang dengan Mahasiswa Fakultas Teknologi Informasi kerjasama dengan Prodi Psikologi </td>
                  <td>Surabaya</td>
                  
                  <td>25-12-2016</td>
                  <td> </td>
                  <td><span class="label label-success">Approved</span></td>
                  <td><a href="{{url('dosen/pengmas/edit')}}"><button type="button" class="btn btn-info btn-xs pull">Edit</button></a>
                  <button type="button" class="btn btn-danger btn-xs">Delete</button></td>
                </tr>

              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
@endsection

@section('code-footer')




@endsection