@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
<!-- Nama konten -->
Nama konten 
@endsection

@section('contentheader_title')
<!-- Nama konten -->
Form Surat Masuk (Punya Alghof udah jadi)
@endsection

@section('main-content')
<!-- Kodingan HTML ditaruh di sini -->
<div class="box ">
            
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form">
                <!-- text input -->
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" class="form-control" placeholder="Nama Lengkap ...">
                </div>
                <div class="form-group">
                  <label>NIM/NIP</label>
                  <input type="text" class="form-control" placeholder="NIM/NIP ...">
                </div>
                <div class="form-group">
                  <label>Perihal Surat</label>
                  <textarea class="form-control" rows="3" placeholder="Perihal Surat ..."></textarea>
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="text" class="form-control" placeholder="Enter your email ...">
                </div>
                <div class="form-group">
                  <label>Phone Number</label>
                  <input type="text" class="form-control" placeholder="Phone Number ...">
                </div>

                <div class="box-footer clearfix">
	              <button type="button" class="pull-left btn btn-default" id="sendEmail">Send
	                <i class="fa fa-arrow-circle-right"></i></button>
@endsection

@section('code-footer')




@endsection