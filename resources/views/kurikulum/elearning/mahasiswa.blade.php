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
<!-- Kodingan HTML ditaruh di sini -->
<div class="form-group">
                  <label>Pilih Kategori</label>
                  <select class="form-control">
                    <option>Dosen</option>
                     <td><a href="">Dosen</td>
                    <option>Mahasiswa</option>
                  </select>
                </div>
 <div class="form-group">
                  <label>Pilih Mata Kuliah</label>
                  <select class="form-control">
                    <option>Kecerdasan Buatan</option>
                    <option>Perancangan Sistem Informasi</option>
                    <option>Teori Pengambilan Keputusan</option>
                    <option>Sistem Pendukung Keputusan</option>
                    <option>Audit Sistem Informasi</option>
                  </select>
                </div>


                <div class="form-group">
                <button type="button" class="btn btn-primary">Search</button>
                </div>

                <div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                <thead>
                <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 180px;" aria-label="Rendering engine: activate to sort column descending" aria-sort="ascending">Judul</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 229px;" aria-label="Browser: activate to sort column ascending">Keterangan</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 194px;" aria-label="Platform(s): activate to sort column ascending">Tanggal</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 154px;" aria-label="Engine version: activate to sort column ascending">Download</th>
                </thead>
                <tbody>
                <tr role="row" class="odd">
                  <td class="sorting_1">Tugas Ke-1</td>
                  <td>Video Upload Youtub</td>
                  <td>18/03/2017</td>
                  <td><a href="#">Download</td>
                </tr><tr role="row" class="even">
                  <td class="sorting_1">Materi 1 AI</td>
                  <td>Agent</td>
                  <td>14/03/2017</td>
                  <td><a href="#">Download</td>
                </tr><tr role="row" class="odd">
                  <td class="sorting_1">Materi 2 AI</td>
                  <td>Artificial Intelligence 1.1</td>
                  <td>08/03/2017</td>
                  <td><a href="#">Download</td> 
                </tr><tr role="row" class="even">
                  <td class="sorting_1">Materi 3 AI</td>
                  <td>Artificial Intelligence 1.2</td>
                  <td>08/03/2017</td>
                  <td><a href="#">Download</td>
                </tr></tbody>
               
              </table></div>
@endsection

@section('code-footer')




@endsection