@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
ganti password
@endsection

@section('contentheader_title')
Ganti Password Akun
@endsection

@section('main-content')
        <div class="col-md-6">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"></h3>
            </div>
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputPasswordLama" class="col-sm-2 control-label">Password Lama</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPasswordLama" placeholder="Password Lama" required="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPasswordBaru" class="col-sm-2 control-label">Password Baru</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPasswordBaru" placeholder="Password Baru" required="">
                  </div>
                  </div>
                <div class="form-group">
                  <label for="inputKonfirmasiPassword" class="col-sm-2 control-label">Konfirmasi Password</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputKonfirmasiPassword" placeholder="Konfirmasi Password" required="">
                  </div>
                </div>
                
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Ubah</button>
              </div>
            </form>
          </div>`

@endsection

@section('code-footer')




@endsection