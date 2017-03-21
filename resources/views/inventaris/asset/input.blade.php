@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
    
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

        <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Form Tambah Asset</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
        <div id="container">
            
            <label for="asset_name">Nama Asset</label>
              <input type="text" class="form-control" name="asset_name" placeholder="Nama Asset" required >
            <br>
            <div class="form-group">
                  <label>Status Asset</label>
                  <select class="form-control" select name="Status">
                    <option>Ready</option>
                    <option>Deployed</option>
                    <option>Out of Order</option>
                    <option>Maintenance</option>
                    <option>Retired</option>
                  </select>
                </div>
            <label for="asset_loc">Lokasi Asset</label>
              <input type="text" class="form-control" name="asset_loc" placeholder="Lokasi Asset"required>
            <br>
            <div class="form-group">
                  <label>Kategori Asset</label>
                  <select class="form-control" select name="Kategori">
                    <option>Elektronik</option>
                    <option>Furniture</option>
                    <option>Dokumen/File</option>
                  </select>
                </div>
            <label for="asset_exp">Expired Date</label>
              <input type="text" class="form-control" name="asset_exp" placeholder="Expired Date">
            <br>
            <label for="asset_supply">Nama Supplier</label>
              <input type="text" class="form-control" name="asset_supply" placeholder="Nama Supplier"required >
            <br>
            <label for="asset_price">Harga Satuan</label>
              <input type="text" class="form-control" name="asset_price" placeholder="Harga Satuan"required >
              <br>
            <label for="asset_quant">Jumlah Barang</label>
              <input type="text" class="form-control" name="asset_quant" placeholder="Jumlah Barang"required >
            <br><br>
            <button type="submit" class="btn btn-primary pull-right">Submit</button>
            <br>    
            
           <div id="fugo">

            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
@endsection