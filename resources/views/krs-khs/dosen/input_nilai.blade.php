@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Fitur 
@endsection

@section('contentheader_title')
Input Penilaian
@endsection

@section('main-content')
			 <div class="form-group row">
                                <div class="col-xs-2">
                                    <input type="text" class="form-control" placeholder="Tugas" disabled="">
                                </div>

                                <div class="col-xs-2">
                                	<input type="text" class="form-control">
                                </div>
                            </div>

              <div class="form-group row">
                                <div class="col-xs-2">
                                    <input type="text" class="form-control" placeholder="Kuis" disabled="">
                                </div>

                                <div class="col-xs-2">
                                	<input type="text" class="form-control">
                                </div>
                            </div>

               <div class="form-group row">
                                <div class="col-xs-2">
                                    <input type="text" class="form-control" placeholder="UTS" disabled="">
                                </div>

                                <div class="col-xs-2">
                                	<input type="text" class="form-control">
                                </div>
                            </div>
                            
               <div class="form-group row">
                                <div class="col-xs-2">
                                    <input type="text" class="form-control" placeholder="UAS" disabled="">
                                </div>

                                <div class="col-xs-2">
                                	<input type="text" class="form-control">
                                </div>
                            </div>

               <div class="form-group row">
                                <div class="col-xs-2">
                                    <input type="text" class="form-control" placeholder="Softskill" disabled="">
                                </div>

                                <div class="col-xs-2">
                                	<input type="text" class="form-control">
                                </div>
                            </div>
        <div class="row">
            <div class="col-sm-4">
              <button type="submit" class="pull-right btn-primary">Submit</button>
              </div>
          </div>
@endsection

@section('code-footer')




@endsection