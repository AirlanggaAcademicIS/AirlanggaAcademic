@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Fitur 
@endsection

@section('contentheader_title')
KEHADIRAN RAPAT
@endsection

@section('main-content')
<!-- Isi Tablenya -->   
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Rapat</th>
                  <th>Tempat</th>
                  <th>Tanggal</th>
                  <th>Jumlah Peserta</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>1</td>
                  <td>Rapat Koordinasi I</td>
                  <td>Ruang 102</td>
                  <td>Selasa, 21 Maret 2017 - 12.15 WIB</td>
                  <td><a href="/notulensi/kehadiranRapat/jumlah">21</a></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Rapat Koordinasi II</td>
                  <td>Ruang 102</td>
                  <td>Kamis, 23 Maret 2017 - 08.00 WIB</td>
				  <td><a href="/notulensi/kehadiranRapat/jumlah">15</a></td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Rapat Audiensi</td>
                  <td>Ruang Labkom 5</td>
                  <td>Selasa, 4 April 2017 - 10.15 WIB</td>
                  <td><a href="/notulensi/kehadiranRapat/jumlah">32</a></td>
                </tr>
              </table>
            </div>
@endsection

@section('code-footer')
	
@endsection