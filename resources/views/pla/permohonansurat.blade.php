@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
<!-- Nama konten -->
Nama konten 
@endsection

@section('contentheader_title')
<!-- Nama konten -->
Nama konten
@endsection

@section('main-content')
<!-- Kodingan HTML ditaruh di sini -->
            <div class="box-header with-border">
              <h3 class="box-title">Permohonan Surat</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form">
                <!-- text input -->
                <div class="form-group">
                  <label>Nama</label>
                  <input id="nama" type="Text" class="form-control" placeholder="Nama Lengkap" required>
                </div>
               <div class="form-group">
                  <label>No Induk</label>
                  <input id="induk" type="Text" class="form-control" placeholder="NIM/NIP" required onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input id="email" type="Text" class="form-control" placeholder="Email" required>
                </div>
                <div class="form-group">
                  <label>Nomor Telepon</label>
                  <input id="telp" type="Text" class="form-control" placeholder="Nomor Telepon" required onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                </div>
                <div class="form-group">
                  <label>Perihal Surat</label>
					<textarea id="perihal" class="form-control" rows="5" placeholder="Perihal Surat" required>
						
					</textarea>
                </div>
                  <div class="box-footer">
                  <a onclick="return confirm('Permohonan Surat Anda Berhasil Di Kirim');" href="" class="btn btn-primary btn-md" required>Submit</a>
              </div>

            </form>
          </div>
 @endsection

@section('code-footer')




@endsection