@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="box box-warning">
				            <div class="box-header with-border">
				              <h3 class="box-title">General Elements</h3>
				            </div>
				            <!-- /.box-header -->
				            <div class="box-body">
				              <form role="form">
				                <!-- text input -->
				                <div class="form-group">
				                  <label>Nama Peminjam</label>
				                  <input type="text" class="form-control" placeholder="Enter ...">
				                </div>
				                <div class="form-group">
				                  <label>Asset Yang dipinjam</label>
				                  <input type="text" class="form-control" placeholder="Enter ...">
				                </div>
				                <div class="form-group">
					                <label>Expected Checkin Date:</label>

					                <div class="input-group date">
					                  <div class="input-group-addon">
					                    <i class="fa fa-calendar"></i>
					                  </div>
					                  <input type="text" class="form-control pull-right" id="datepicker">
					                </div>
					                <!-- /.input group -->
					             </div>
				                <div class="form-group">
		                  		<button type="submit" class="btn btn-primary pull-right">Submit</button>
		                		</div>

				              </form>
				            </div>
				            <!-- /.box-body -->
				          </div>       
			</div>
		</div>
</div>		          
@endsection
