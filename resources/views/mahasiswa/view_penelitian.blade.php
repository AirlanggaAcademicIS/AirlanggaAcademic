@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
<!-- Nama konten -->
Nama konten 
@endsection

@section('contentheader_title')
<!-- Nama konten -->
Penelitian
@endsection

@section('main-content')
   <div class="box">
            <div class="box-header">
              <h3 class="box-title">Penelitian Bambang </h3>
            </div>
          
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Judul Penelitian</th>
                  <th>Jenis Penelitian</th>
                  <th>Tahun</th>
                  <th>Surat Keterangan</th>
                  <th>Status</th>
                  <th></th>
                
                </tr>
                </thead>
                <tbody>
               
                <tr>
                  <td>Bla</td>
                  <td>PKM</td>
                  <td>2016</td>
                  <td>-</td>
                  <td>Publik</td>
                </tr>
                <tr>
                  <td>Bla Bla</td>
                  <td>PKM</td>
                  <td>2006</td>
                  <td>-</td>
                  <td>non-Publik</td>
                </tr>
                <tr>
                  <td>Bla Bla Bla</td>
                  <td>PKM</td>
                  <td>2010</td>
                  <td>-</td>
                  <td>Publik</td>
                </tr>
 
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>

@endsection

@section('code-footer')




@endsection