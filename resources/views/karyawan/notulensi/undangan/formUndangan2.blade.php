@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Kirim Email Ke Dosen
@endsection

@section('contentheader_title')
<!-- Nama konten -->
Kirim Email Ke Dosen
@endsection

@section('main-content')
<!-- Kodingan HTML ditaruh di sini -->
<div class="flash-message" style="margin-left: -16px;margin-right: -16px; margin-top: 13px;">
  @foreach (['danger', 'warning', 'success', 'info'] as $msg)
  @if(Session::has('alert-' . $msg))
<div class="alert alert-{{ $msg }}">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <p class="" style="border-radius: 0">{{ Session::get('alert-' . $msg) }}</p>
</div>
  {!!Session::forget('alert-' . $msg)!!}
  @endif
  @endforeach
            <div class="box-header with-border">
              <h3 class="box-title">Detail Rapat</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="{{url('formundangan2/'.$form->id_notulen.'/undang')}}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="box-body">
                <div class="form-group">
                  <label for="textNamaRapat" class="col-sm-2 control-label">Nama Rapat</label>
                  <div class="col-sm-10">
                    <input class="form-control" id="textNamaRapat" placeholder="Nama rapat disini" value="{{ $form->nama_rapat }}" readonly type="text" >
                  </div>
                </div>
                <div class="form-group">
                  <label for="textTanggalRapat" class="col-sm-2 control-label">Tanggal</label>
                  <div class="col-sm-10">
                    <input class="form-control" id="textTanggalRapat" placeholder="Tanggal pelaksanaan rapat disini" value="{{ $form->waktu_pelaksanaan }}" readonly type="text" >
                  </div>
                </div>
                <div class="form-group">
                  <label for="textTempatRapat" class="col-sm-2 control-label">Tempat</label>
                  <div class="col-sm-10">
                    <input class="form-control" id="textTempatRapat" placeholder="Tempat pelaksanaan rapat disini" value="{{ $ruang->nama_ruang }}" readonly type="text" >
                  </div>
                </div>
         <div class="col-xs-14">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Daftar Dosen</h3>

            </div>
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>No</th>
                  <th>Nama Dosen</th>
                  <th>NIP</th>
                  <th>Action</th>
                </tr>
                @foreach($dosen as $i=>$d)
                <tr>
                  <td>{{$i+1}}</td>
                  <td>{{$d->nama_dosen}}</td>
                  <td>{{$d->nip}}</td>
                  <td><div class="checkbox">
                      <label>
                        <input type="checkbox" value="{{$d->email}}" name="dosen[]">
                      </label>
                    </div></td>
                </tr>
                @endforeach
              </table>
            </div>
            
          </div>
          
        </div>
                
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right" name="kirimEmail" value="email">Kirim Email</button>
              </div>
            </form>
@endsection

@section('code-footer')




@endsection