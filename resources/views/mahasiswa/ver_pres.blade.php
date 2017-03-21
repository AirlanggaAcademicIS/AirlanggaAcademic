@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Verifikasi Prestasi
@endsection

@section('contentheader_title')
Verifikasi Prestasi
@endsection

@section('main-content')
<!-- Kodingan HTML ditaruh di sini -->
<!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tabel Prestasi Mahasiswa</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nim</th>
                  <th>Nama Mahasiswa</th>
                  <th>Prestasi</th>
                  <th>Status Verifikasi</th>
                  <th>View More</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>081411631011</td>
                  <td>Asep
                  </td>
                  <td>Juara 1 Lomba Pidato Bahasa Arab</td>
                  <td>Belum Diverifikasi</td>
                  <td> <button type="submit" class="btn btn-default btn-block" default><a href="{{url('/karyawan/ver-pres-more/')}}">View More</a></button> </td>
                </tr>
                <tr>
                  <td>081411631002</td>
                  <td>Joko
                  </td>
                  <td>Juara 2 Lomba Debat Bahasa Perancis</td>
                  <td>Belum Diverifikasi</td>
                  <td><button type="button" class="btn btn-default btn-block">View More</button></td>
                </tr>
                <tr>
                  <td>081411631033</td>
                  <td>Asep
                  </td>
                  <td>Juara 3 Lomba Debat Bahasa Arab</td>
                  <td>Belum Diverifikasi</td>
                  <td><button type="button" class="btn btn-default btn-block">View More</button></td>
                </tr>
                <tr>
                  <td>081411631004</td>
                  <td>Putra
                  </td>
                  <td>Juara 1 Lomba Call For Essay Unair</td>
                  <td>Terverifikasi</td>
                  <td><button type="button" class="btn btn-default btn-block">View More</button></td>
                </tr>
                <tr>
                  <td>081411631015</td>
                  <td>Jaka</td>
                  <td>Juara 3 Lomba Pidato Bahasa Arab</td>
                  <td>Terverifikasi</td>
                  <td><button type="button" class="btn btn-default btn-block">View More</button></td>
                </tr>
                <tr>
                  <td>081411631006</td>
                  <td>Joko</td>
                  <td>Juara 1 Lomba Pidato Bahasa Inggris</td>
                  <td>Terverifikasi</td>
                  <td><button type="button" class="btn btn-default btn-block">View More</button></td>
                </tr>
                <tr>
                  <td>081411631007</td>
                  <td>Budi</td>
                  <td>Juara 1 Hackathon 2012</td>
                  <td>Terverifikasi</td>
                  <td><button type="button" class="btn btn-default btn-block">View More</button></td>
                </tr>
                <tr>
                  <td>081411631008</td>
                  <td>Jono</td>
                  <td>Juara 1 Code For Nation</td>
                  <td>Terverifikasi</td>
                  <td><button type="button" class="btn btn-default btn-block">View More</button></td>
                </tr>
                <tr>
                  <td>0814116310010</td>
                  <td>Budiman</td>
                  <td>Juara 1 StartUp Surabaya</td>
                  <td>Terverifikasi</td>
                  <td><button type="button" class="btn btn-default btn-block">View More</button></td>
                </tr>
                <tr>
                  <td>081411631070</td>
                  <td>Sukiyem</td>
                  <td>PKL di Telkom Surabaya</td>
                  <td>Terverifikasi</td>
                  <td><button type="button" class="btn btn-default btn-block">View More</button></td>
                </tr>
                <tr>
                  <td>081411631021</td>
                  <td>Sutejo</td>
                  <td>Juara 1 Lomba Pidato Bahasa Arab</td>
                  <td>Terverifikasi</td>
                  <td><button type="button" class="btn btn-default btn-block">View More</button></td>
                </tr>
                <tr>
                  <td>081411633001</td>
                  <td>Suko</td>
                  <td>Juara 1 Lomba Pidato Bahasa Arab</td>
                  <td>Terverifikasi</td>
                  <td><button type="button" class="btn btn-default btn-block">View More</button></td>
                </tr>
                
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
@endsection

@section('code-footer')




@endsection