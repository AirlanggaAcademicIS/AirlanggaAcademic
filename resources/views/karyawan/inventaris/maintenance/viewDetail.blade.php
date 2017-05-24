@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection

@section('contentheader_title')
View Detail Asset
@endsection

@section('main-content')
<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="box box-warning">
		            <div class="box-header with-border">
		              <h3 class="box-title">View Detail Asset</h3>
		            </div>
		            <!-- /.box-header -->
		            <div class="box-body">
		              <form role="form">
		                <!-- text input -->
		               
		                <div class="form-group">
		                  <label>Nama Asset</label>
		                  <input type="text" class="form-control" value="{{ $maintenance->asset_yang_dimaintenance }}" readonly>
		                </div>

		                <div class="form-group">
		                  <label>Nama Pemaintenance</label>
		                  <input type="text" class="form-control" value="{{ $maintenance->nama_pemaintenance }}" readonly>
		                </div>

		               

		                 <div class="form-group">
		                  <label>Problem</label>
		                  <input type="text" class="form-control" value="{{ $maintenance->problem }}" readonly>
		                </div>

		                <div class="form-group">
		                  <label>Solution</label>
		                  <input type="text" class="form-control" value="{{ $maintenance->solution }}" readonly>
		                </div>

		                <div class="form-group">
                  			<a href="{{ url('/inventaris/index-maintenance') }}" type="button" class="btn btn-primary pull-right">Finish</a>
                		</div>

		              </form>
		            </div>
		            <!-- /.box-body -->
		          </div>       
			</div>
		</div>
</div>		          
@endsection