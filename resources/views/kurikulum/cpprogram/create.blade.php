@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
<!-- Nama konten -->

@endsection

@section('contentheader_title')
<!-- Nama konten -->

@endsection

@section('main-content')

<div class="box box-warning">
        <div class="box-header with-border">
          <center><h3 class="box-title">FORM TAMBAH CAPAIAN PROGRAM</b></center> 
          <div class="form-group">
            <div class="col-sm-2" style="padding-right: -10px;">                    
              <label><b>Capaian Program Spesifik</b></label>
            </div>
            <div style="padding-left : 0px ;" class="col-sm-10">
              <textarea class="form-control" rows="6"> </textarea>  
            </div>
          </div>
          <br><br><br><br><br><br><br><br>
          <div class="form-group">
            <div class="col-sm-2" style="padding-right: -10px;">                   
              <label><b>Dimensi Capaian Program Umum</b></label>
            </div>
            <div style="padding-left : 0px ;" class="col-sm-10">
              <textarea class="form-control" rows="6"> </textarea>
              </textarea>                    
            </div>
          </div>
          <br><br><br><br><br><br><br><br>
            <a href="/kurikulum/cpprogram/" button type="Tambah" class="btn btn-primary" style="float:right";>Tambah</a>
        </div>
      </div>

                 
      

@endsection

@section('code-footer')




@endsection