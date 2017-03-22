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
              <h3 class="box-title">TABEL PEMINJAMAN ASET</h3>

<!-- search form -->
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
                  <th>ID PEMINJAMAN</th>
                  <th>NAMA PEMINJAM</th>
                  <th>ASET YANG DIPINJAM</th>
                  <th>CHECK IN DATE</th>
                  <th>CHECK OUT DATE</th>
                  <th>EXPECTED CHECK IN DATE</th>
                  <th>WAKTU PINJAM</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>34567</td>
                  <td>DHANANG WIBISONO
                  </td>
                  <td>PAPAN TULIS</td>
                  <td>20 MARET 2017</td>
                  <td>25 APRIL 2017</td>
                  <td>20 MEI 2017</td>
                  <td>10.00</td>
                </tr>
                <tr>
                  <td>12345</td>
                  <td>DHANIA ULFA AGHNIARAHMAH
                  </td>
                  <td>PROYEKTOR</td>
                  <td>17 MARET 2017</td>
                  <td>17 APRIL 2017</td>
                  <td>17 MEI 2017</td>
                  <td>11.00</td>
                </tr>
                <tr>
                  <td>21345</td>
                  <td>VINCENTIUS A.B
                  </td>
                  <td>KOMPUTER</td>
                  <td>17 JANUARY 2017</td>
                  <td>28 FEBRUARY 2017</td>
                  <td>1 MARET 2017</td>
                  <td>08.40</td>
                </tr>
                <tr>
                  <td>44455</td>
                  <td>M NUR FAIQ MAJID
                  </td>
                  <td>MEJA</td>
                  <td>14 FEBRUARI 2017</td>
                  <td>20 FEBRUARI 2017</td>
                  <td>14 MARET 2017</td>
                  <td>09.30</td>
                </tr>
                <tr>
                  <td>22345</td>
                  <td>DIKKI SETIAWAN
                  </td>
                  <td>KURSI</td>
                  <td>17 MARET 2017</td>
                  <td>SEDANG DIPINJAM</td>
                  <td>17 MEI 2017</td>
                  <td>09.00</td>
                </tr>
                </tbody>
                
                </div>
                </div>
                </div>
                </div>
                </div>
  @endsection
     @include('vendor.adminlte.layouts.partials.scripts')