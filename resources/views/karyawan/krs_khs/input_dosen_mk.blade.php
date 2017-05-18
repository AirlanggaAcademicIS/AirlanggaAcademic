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
                  <label for="inputEmail3" class="col-sm-2 control-label">Mata Kuliah : </label>
                  <div class="col-sm-10">
						<div class="form-group row">
                                <div class="col-xs-4">
                                    <select class="form-control">
                                      @foreach($mk_ditawarkan as $i => $m) 
                                        <option>Pilih Matkul</option>
                                        <option value="{{$m->id_mk_ditawarkan}}">{{$m->nama_matkul}}</option>
                                      @endforeach
                                    </select>
                                </div>              
                        </div>
                </div>
                </div>

               

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Dosen : </label>
                  <div class="col-sm-10">
						<div class="form-group row">
                                <div class="col-xs-4">
                                    <select class="form-control">
                                        @foreach($dosen as $i => $d) 
                                        <option>Pilih Dosen</option>
                                        <option value="{{$d->nip}}">{{$d->nama_dosen}}</option>
                                      @endforeach
                                    </select>
                                </div>

                                <div class="col-xs-3">
                                	<div class="radio">
                    					<label>
                      						<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" checked="">
                      							 PJMK
                      					</label>
                      				</div>

                                    <div class="radio">
                    					<label>
                      						<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
                      							Pendamping PJMK
                      					</label>
                      				</div>
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
