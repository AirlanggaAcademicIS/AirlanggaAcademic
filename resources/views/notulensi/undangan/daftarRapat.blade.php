@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Fitur 
@endsection

@section('contentheader_title')
DAFTAR RAPAT
@endsection

@section('main-content')

<!-- /.box-header -->
            <div class="margin"><tr>
             <div class="btn-group">
              <button type="button" class="btn btn-default">Bulan</button>
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
               <span class="caret"></span>
               <span class="sr-only">Toggle Dropdown</span>
              </button>

              <ul class="dropdown-menu" role="menu" select>
               <li><a>Januari</a></li>
               <li><a>Februari</a></li>
               <li><a>Maret</a></li>
               <li><a>April</a></li>
               <li><a>Mei</a></li>
               <li><a>Juni</a></li>
               <li><a>Juli</a></li>
               <li><a>Agustus</a></li>
               <li><a>September</a></li>
               <li><a>Oktober</a></li>
               <li><a>November</a></li>
               <li><a>Desember</a></li>
              </ul>
             </div>
             <div class="btn-group">
              <button type="button" class="btn btn-default">Tahun</button>
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
               <span class="caret"></span>
               <span class="sr-only">Toggle Dropdown</span>
              </button>
              <ul class="dropdown-menu" role="menu">
               <li><a>2017</a></li>
               <li><a>2016</a></li>
               <li><a>2015</a></li>
               <li><a>2014</a></li>
              </ul>
             </div></tr>
            </div>



            <!-- Isi Tablenya -->   
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Tanggal - Waktu</th>
                  <th>Tempat</th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>1</td>
                  <td>Rapat Koordinasi I</td>
                  <td>Selasa, 21 Maret 2017 - 12.15 WIB</td>
                  <td>Ruang 102</td>
                  <td><button type="button" class="btn bg-olive btn-sm">Undang</button></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Rapat Koordinasi II</td>
                  <td>Kamis, 23 Maret 2017 - 08.00 WIB</td>
                  <td>Ruang 102</td>
                  <td><button type="button" class="btn bg-olive btn-sm">Undang</button></td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Rapat Audiensi</td>
                  <td>Selasa, 4 April 2017 - 10.15 WIB</td>
                  <td>Ruang Labkom 5</td>
                  <td><button type="button" class="btn bg-olive btn-sm">Undang</button></td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box --> 
@endsection

@section('code-footer')
	
@endsection