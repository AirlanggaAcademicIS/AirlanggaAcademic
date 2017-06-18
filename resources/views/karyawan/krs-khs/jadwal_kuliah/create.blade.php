@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Input Jadwal MK 
@endsection

@section('contentheader_title')
Input Jadwal Mata Kuliah
@endsection

@section('main-content')
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
</div>
  <div class="box box-info">
     <form id="tambahJadwal" method="post" action="{{url('karyawan/krs-khs/jadwal-kuliah/create')}}" enctype="multipart/form-data"  class="form-horizontal">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="box-body">

                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Mata Kuliah : </label>
                  <div class="col-sm-10">
            <div class="form-group row">
                                <div class="col-xs-4">
                                    <select class="form-control" id="mk_ditawarkan_id" name="mk_ditawarkan_id" required>
                                        <option value="">Pilih Mata Kuliah</option>
                                        @foreach($jadwal4 as $i => $m)
                                        <option value="{{$m->id_mk_ditawarkan}}">{{$m->mk->nama_matkul}}</option>
                                        @endforeach
                                    </select>
                                    
                                </div>              
                        </div>
                </div>
                </div>
                
  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Jam : </label>
                  <div class="col-sm-10">
            <div class="form-group row">
                                <div class="col-xs-4">
                                    <select class="form-control" id="jam_id" name="jam_id" required>
                                        <option value="">Pilih Jam</option>
                                        @foreach($jadwal2 as $i => $m)
                                        <option value="{{$m->id_jam}}">{{$m->waktu}}</option>
                                        @endforeach
                                    </select>
                                </div>  
                               <!--  <div class="col-xs-1">
                                </div>  
                                <div class="col-xs-1">
                                <h4><b>-</b></h4>   
                                </div>
                                <div class="col-xs-4">
                                    <select class="form-control" id="jam_id" name="jam_id2">
                                        <option value="">Pilih Jam</option>
                                        @foreach($jadwal2 as $i => $m)
                                        <option value="{{$m->id_jam}}">{{$m->waktu}}</option>
                                        @endforeach
                                    </select>
                                </div>  -->             
                        </div>
                </div>
                </div>
 
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Hari : </label>
                  <div class="col-sm-10">
            <div class="form-group row">
                                <div class="col-xs-4">
                                    <select class="form-control" id="hari_id" name="hari_id" required>
                                       
                                        <option value="">Pilih Hari</option>
                                        @foreach($jadwal as $i => $m)
                                        <option value="{{$m->id_hari}}">{{$m->nama_hari}}</option>
                                        @endforeach
                                    </select>
                                    
                                </div>              
                        </div>
                </div>
                </div>

                   <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Ruang : </label>
                  <div class="col-sm-10">
            <div class="form-group row">
                                <div class="col-xs-4">
                                    <select class="form-control" id="ruang_id" name="ruang_id" required>
                                       
                                        <option value="">Pilih Ruang</option>
                                        @foreach($jadwal3 as $i => $m)
                                        <option value="{{$m->id_ruang}}">{{$m->nama_ruang}}</option>
                                        @endforeach
                                    </select>
                                    
                                </div>              
                        </div>
                </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Tambah</button>
              </div>
              <!-- /.box-footer -->
            </form>
    </div>
                               
@endsection

@section('code-footer')




@endsection
