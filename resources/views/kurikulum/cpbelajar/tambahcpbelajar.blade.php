@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
<!-- Nama konten -->
Nama konten 
@endsection

@section('contentheader_title')
<!-- Nama konten -->
KURIKULUM
@endsection

@section('main-content')
<div class="box box-warning">
            <div class="box-header with-border">
            <center><h3 class="box-title">FORM TAMBAH CAPAIAN PEMBELAJARAN</b></center>
            <br><br><div class="form-group">
                  <label><b>Pilih Kategori</label>
                  <select class="form-control">
                    <option>Sikap</option>
                    <option>Keterampilan Umum</option>
                    <option>Keterampilan Khusus</option>
                    <option>Pengetahuan</option>
                  </select>
                </div>
            </div>
            <!-- /.box-header -->
          
                <!-- textarea  capaian Program Spesifik-->
                <div class="form-group">
                  <div class="col-sm-2" style="padding-right: -10px;">                    
                    <label><b>Deskripsi</b></label>
                  </div>
                  <div style="padding-left : 0px ;" class="col-sm-10">
                    <textarea class="form-control" rows="6" placeholder="Silahkan masukan deskripsi capaian pembelajaran ..."></textarea>                    
                  </div>
                </div>
         <br><br><br><br>
                <!-- textarea  capaian Program Spesifik-->

          <br><br><br>
                <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="float:right";>Tambah</button>


                 <!-- Modal Delete -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Berhasil</h4>
        </div>
        <div class="modal-body">
          <p>Berhasil di Tambahkan.</p>
        </div>
        <div class="modal-footer">
        </div>
      </div>
      
    
      
@endsection

@section('code-footer')




@endsection

