@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Edit Dosen MK 
@endsection

@section('contentheader_title')
Edit Dosen Mata Kuliah
@endsection

@section('main-content')
	<div class="box box-info">
		<form class="form-horizontal" method = "post" action ="{{ url('karyawan/krs-khs/input-dosen-mk/'.$dosen_mk1->mk_ditawarkan_id.'/'.$dosen_mk->dosen_id.'/'.$dosen_mk1->dosen_id.'/'.$dosen_mk->status.'/'.$dosen_mk1->status.'/edit') }}">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="box-body">
                

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Mata Kuliah : </label>
                  <div class="col-sm-10">
						<div class="form-group row">
                                <div class="col-xs-4">
                                  <input type = "text" disabled value="{{$mk_ditawarkan->mk->nama_matkul}}">
                                </div>

                        </div>
                </div>
                </div>

               

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label"> Dosen PJMK : </label>
                  <div class="col-sm-10">
						<div class="form-group row">
                                <div class="col-xs-4">
                                    <select class="form-control" name = "dosen_pjmk" required>
                                        <option> Pilih Dosen</option>
                                        @foreach($dosen as $i => $d) 
                                        <option {!!($dosen_mk->dosen_id == $d->nip)? 'selected' : ''!!} value="{{$d->nip}}"> {{$d->nama_dosen}}</option>
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
                                        <option> Pilih Dosen</option>
                                        @if($dosen_mk1->status == 1)
                                        @foreach($dosen as $i => $d) 
                                        <option {!!($dosen_mk1->dosen_id == $d->nip)? 'selected' : ''!!} value="{{$d->nip}}">{{$d->nama_dosen}}</option>
                                      @endforeach
                                      @endif
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
