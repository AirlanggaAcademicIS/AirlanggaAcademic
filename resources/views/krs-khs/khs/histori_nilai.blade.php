@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Fitur 
@endsection

@section('contentheader_title')
Histori Nilai
@endsection

@section('main-content')
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Semester</th>
                  <th>Kode MA</th>
                  <th>Nama MA</th>
                  <th>SKS</th>
                  <th>Nilai</th>
                  <th>Bobot</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>2015/2016 Ganjil</td>
                  <td>SIR202</td>
                  <td>Rekayasa Perangkat Lunak</td>
                  <td>3</td>
                  <td>A</td>
                  <td>12</td>
                </tr>
                <tr>
                  <td>2015/2016 Ganjil</td>
                  <td>SID201</td>
                  <td>Basis Data</td>
                  <td>3</td>
                  <td>B</td>
                  <td>9</td>
                </tr>
                <tr>
                  <td>2015/2016 Ganjil</td>
                  <td>SIJ201</td>
                  <td>Sistem Operasi</td>
                  <td>3</td>
                  <td>AB</td>
                  <td>10,5</td>
                </tr>
                <tr>
                  <td>2015/2016 Ganjil</td>
                  <td>SIR201</td>
                  <td>Pemrograman Berorientasi Obyek</td>
                  <td>3</td>
                  <td>AB</td>
                  <td>10,5</td>
                </tr>
                <tr>
                  <td>2015/2016 Ganjil</td>
                  <td>SII201</td>
                  <td>Konsep Sistem Informasi</td>
                  <td>4</td>
                  <td>B</td>
                  <td>12</td>
                </tr>
                </tbody>
              </table>
              <div class="box-body">
                <tr>
                <li>Total SKS     : 16</li>
                </tr>
                </tr>
                <tr>
                <li>Total bobot   : 54</li>
                </tr>
                </div>
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