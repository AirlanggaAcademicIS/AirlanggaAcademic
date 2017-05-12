@extends('adminlte::layouts.app')

@section('htmlheader_title')
Tambah Mata Kuliah
@endsection

@section('contentheader_title')
Tambah Mata Kuliah
@endsection

@section('code-header')

@endsection

@section('main-content')          
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">INPUT LPJ</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                    <label for="id_lpj" class="col-sm-2 control-label">Kode LPJ</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="kode_lpj" name="kode_lpj" placeholder="Auto Inceremnt" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="nama" class="col-sm-2 control-label">Nama Kegiatan</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan" placeholder="Masukkan Nama Kegiatan" required>
                    </div>
                </div>
                <div class="form-group">
                <label>Tanggal Kegiatan Berlangsung:</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="reservation">
                </div>
                </div>
                <div class="form-group">
                    <label for="nama" class="col-sm-2 control-label">Tempat Kegiatan</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan" placeholder="Masukkan Nama Kegiatan" required>
                    </div>
                </div>
                <div class="form-group">
                <label>Pemasukan</label>
                <div class="col-md-4">
                  <select class="form-control select2" multiple="multiple" data-placeholder="Sumber" style="width: 100%;">
                    <option>Fakultas</option>
                    <option>Peserta</option>
                    <option>Sponsor</option>
                    <option>Donatur</option>
                  </select>
                </div>
                <div class="col-md-4">
                  <input type="text" class="form-control" id="kode_lpj" name="kode_lpj" placeholder="Jumlah" required>
                </div>
              </div>
              <div class="form-group">
              <label>Pengeluaran</label>
                <div class="col-md-3">
                  <input type="text" class="form-control" id="nm_pengeluaran" name="nm_pengeluaran" placeholder="Nama Pengeluaran" required>
                </div>
                <div class="col-md-3">
                  <input type="text" class="form-control" id="harga" name="harga" placeholder="Harga" required>
                </div>
                <div class="col-md-3">
                  <input type="text" class="form-control" id="qty" name="qty" placeholder="QTY" required>
                </div>
                <div class="col-md-3">
                  <input type="text" class="form-control" id="kode_lpj" name="kode_lpj" placeholder="Total" required>
                </div>
              </div>
              <div style="text-align: right;">
                    <div class="col-md-8 col-md-offset-2">
                    <button type="submit" class="btn btn-primary btn-lg">
                            Confirm
                        </button>
                    </div>
              </div>

              </div>
@endsection

@section('code-footer')
<script>
$('#daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    );

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
$( function() {
    var date = $('#datepicker').datepicker({ dateFormat: 'yy/mm/dd' }).val();

  } );
  </script>
</script>
@endsection