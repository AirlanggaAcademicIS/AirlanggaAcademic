@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Edit Jadwal Mata Kuliah
@endsection

@section('contentheader_title')
Edit Jadwal Mata Kuliah
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
     <form id="tambahJadwal" method="post" action="{{url('karyawan/krs-khs/jadwal-kuliah/'.$jadwal1->mk_ditawarkan_id.'/'.$jadwal1->hari_id.'/'.$jadwal1->ruang_id.'/'.$jadwal1->jam_id.'/edit')}}" enctype="multipart/form-data"  class="form-horizontal">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="nama_matkul" value="{{ $jadwal4->mk->nama_matkul }}">  
              <div class="box-body">

                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Mata Kuliah : </label>
                  <div class="col-sm-10">
            <div class="form-group row">
                                <div class="col-xs-4">
                                    <input type="text" disabled value="{{$jadwal4->mk->nama_matkul}}">                                   
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
                                        <option {!!($jadwal1->jam_id == $m->id_jam)? 'selected' : ''!!} value="{{$m->id_jam}}">{{$m->waktu}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <!-- <div class="col-xs-1">
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
                                </div> -->                     
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
                                        @foreach($jadwal5 as $i => $m)
                                        <option {!!($jadwal1->hari_id == $m->id_hari)? 'selected' : ''!!}  value="{{$m->id_hari}}">{{$m->nama_hari}}</option>
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
                                        <option {!!($jadwal1->ruang_id == $m->id_ruang)? 'selected' : ''!!} value="{{$m->id_ruang}}">{{$m->nama_ruang}}</option>
                                        @endforeach
                                    </select>
                                    
                                </div>              
                        </div>
                </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Edit</button>
              </div>
              <!-- /.box-footer -->
            </form>
    </div>
                               
@endsection

@section('code-footer')




@endsection
