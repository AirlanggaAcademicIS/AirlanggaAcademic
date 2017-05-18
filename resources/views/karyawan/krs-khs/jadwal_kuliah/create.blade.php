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
    <form class="form-horizontal">
              <div class="box-body">
                
  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Jam : </label>
                  <div class="col-sm-10">
            <div class="form-group row">
                                <div class="col-xs-4">
                                    <select class="form-control">
                                       
                                        <option>Pilih Jam</option>
                                        @foreach($jadwal2 as $i => $m)
                                        <option>{{$m->waktu}}</option>
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
                                    <select class="form-control">
                                       
                                        <option>Pilih Hari</option>
                                        @foreach($jadwal as $i => $m)
                                        <option>{{$m->nama_hari}}</option>
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
                                    <select class="form-control">
                                       
                                        <option>Pilih Ruang</option>
                                        @foreach($jadwal3 as $i => $m)
                                        <option>{{$m->nama_ruang}}</option>
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
