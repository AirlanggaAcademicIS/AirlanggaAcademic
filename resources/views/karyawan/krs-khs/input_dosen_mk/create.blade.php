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
		<form class="form-horizontal" method = "post" action ="{{ url('karyawan/krs-khs/input-dosen-mk/create') }}">

      <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="box-body">
                

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Mata Kuliah : </label>
                  <div class="col-sm-10">
            <div class="form-group row">
                                <div class="col-xs-4">
                                    <select class="form-control" name = "mk" required>

                                       <option value="">Pilih Matkul</option>
                                      @foreach($mk_ditawarkan as $i => $m) 

                                        <option value="{{$m->id_mk_ditawarkan}}">{{$m->nama_matkul}}</option>
                                      @endforeach
                                    </select>
                                </div>              
                        </div>
                </div>
                </div>

               

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Dosen PJMK : </label>
                  <div class="col-sm-10">
            <div class="form-group row">
                                <div class="col-xs-4">
                                    <select class="form-control" name = "dosen_pjmk" required>
                                        <option value="">Pilih Dosen</option>
                                        @foreach($dosen as $i => $d) 
                                        <option value="{{$d->nip}}">{{$d->nama_dosen}}</option>
                                      @endforeach
                                    </select>
                                </div>
                            </div> 
                            </div>                  
                        </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Dosen Pendamping : </label>
                  <div class="col-sm-10">
            <div class="form-group row">
                                <div class="col-xs-4">
                                    <select class="form-control" name = "dosen_pendamping" required>
                                        <option>Pilih Dosen</option>
                                        @foreach($dosen as $i => $d) 
                                        <option value="{{$d->nip}}">{{$d->nama_dosen}}</option>
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