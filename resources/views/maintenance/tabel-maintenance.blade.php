@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')

<!-- Main content -->
    
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">TABEL MAINTENANCE ASET</h3>


            <!-- search form -->
      <<!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
            


            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID MAINTENACE</th>
                  <th>ASET YANG DIMAINTENACE</th>
                  <th>NAMA PEMAINTENANCE</th>
                  <th>PROBLEM</th>
                  <th>SOLUTION</th>
                  <th>WAKTU MAINTENANCE</th>
                </tr>
                </thead>
                <tbody>

                <tr>
                  <td>12345</td>
                  <td>PC
                  </td>
                  <td>DHANANG WIBISONO</td>
                  <td>HANG</td>
                  <td>OPTIMIZE</td>
                  <td>09.00</td>
                </tr>

                <tr>
                  <td>23451</td>
                  <td>PC
                  </td>
                  <td>DHANIA ULFA AGHNIARAHMAH</td>
                  <td>LAYAR PECAH</td>
                  <td>GANTI LAYAR</td>
                  <td>12.00</td>
                </tr>

                <tr>
                  <td>31245</td>
                  <td>PC
                  </td>
                  <td>VINCENTIUS A.B</td>
                  <td>BLUESCREEN</td>
                  <td>INSTALL ULANG</td>
                  <td>20.00</td>
                </tr>

                <tr>
                  <td>12345</td>
                  <td>PROYEKTOR
                  </td>
                  <td>M. FAIQ NUR MAJID</td>
                  <td>KABEL RUSAK</td>
                  <td>GANTI KABEL</td>
                  <td>09.00</td>
                </tr>
                </tbody>
                
                </div>
                </div>
                </div>
                </div>
                </div>
               
  @endsection