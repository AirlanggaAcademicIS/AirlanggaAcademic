@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Input Dosen MK 
@endsection

@section('contentheader_title')
Input Dosen Mata Kuliah
@endsection

@section('main-content')
  <div class="box box-info">
     <form id="tambahJadwal" method="post" action="{{url('krs-khs/jadwal_kuliah/'.$jadwal->mk_ditawarkan_id.'/edit')}}" enctype="multipart/form-data"  class="form-horizontal">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="box-body">

                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Mata Kuliah : </label>
                  <div class="col-sm-10">
            <div class="form-group row">
                                <div class="col-xs-4">
                                    <select class="form-control" id="mk_ditawarkan_id" name="mk_ditawarkan_id" required>
                                        <option>Pilih Mata Kuliah</option>
                                        @foreach($jadwal4 as $i => $m)
                                        <option value="{{$m->matakuliah_id}}">{{$m->mk->nama_matkul}}</option>
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
                                       
                                        <option>Pilih Jam</option>
                                        @foreach($jadwal2 as $i => $m)
                                        <option value="{{$m->id_jam}}">{{$m->waktu}}</option>
                                        @endforeach
                                    </select>
                                    
                                </div>              
                        </div>
                </div>
                </div>
 
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Hari : </label>
                  <div class="col-sm-10">
            <div class="form-group row">
                                <div class="col-xs-4">
                                    <select class="form-control" id="hari_id" name="hari_id" required>
                                       
                                        <option>Pilih Hari</option>
                                        @foreach($jadwal5 as $i => $m)
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
                                       
                                        <option>Pilih Ruang</option>
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
                <button type="submit" class="btn btn-info pull-right">Submit</button>
              </div>
              <!-- /.box-footer -->
            </form>
    </div>
                               
@endsection

@section('code-footer')




@endsection