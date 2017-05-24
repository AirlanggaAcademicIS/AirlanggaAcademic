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
		                  <label>Kategori</label>
		                   @if($asset->kategori_id == 1) 
						<input type ="text" class="form-control" value="dokumen" readonly>
						@elseif($asset->kategori_id == 2) 
						<input type ="text" class="form-control" value="furniture" readonly>
						@endif
		                </div>

		                <div class="form-group">
		                  <label>Nama Asset</label>
		                  <input type="text" class="form-control" value="{{ $asset->nama_asset }}" readonly>
		                </div>

		                <div class="form-group">
		                  <label>Status</label>
		                  @if($asset->status_id == 1) 
						<input  type="text" class="form-control" value="ready" readonly>
						@elseif($asset->status_id == 2) 
						<input type="text" class="form-control" value="not ready" readonly>
						@endif
		                </div>

		                 <div class="form-group">
		                  <label>Updated At</label>
		                  <input type="text" class="form-control" value="{{ $asset->updated_at }}" readonly>
		                </div>

		               
		                <div class="form-group">
		                  <label>Lokasi</label>
		                  <input type="text" class="form-control" value="{{ $asset->lokasi }}" readonly>
		                </div>

			              <div class="form-group">
		                  <label>Nama Supplier</label>
		                  <input type="text" class="form-control" value="{{ $asset->nama_supplier }}" readonly>
		                </div>

		                 <div class="form-group">
		                  <label>Harga Satuan</label>
		                  <input type="text" class="form-control" value="{{ $asset->harga_satuan }}" readonly>
		                </div>

		                 <div class="form-group">
		                  <label>Jumlah Barang</label>
		                  <input type="text" class="form-control" value="{{ $asset->jumlah_barang }}" readonly>
		                </div>


		                 <div class="form-group">
		                  <label>Total Harga</label>
		                  <input type="text" class="form-control" value="{{ $asset->total_harga }}" readonly>
		                </div>


		                <div class="form-group">
			                <label>Expired Date:</label>
			                <div class="input-group date">
			                  <div class="input-group-addon">
			                    <i class="fa fa-calendar"></i>
			                  </div>
			                  <input type="text" class="form-control pull-right" value="{!! App\Helpers\GeneralHelper::indonesianDateFormat($asset->expired_date)  !!}" readonly>
			                </div>
			             </div>
							
							<div class="form-group">
                  			<a href="{{ url('inventaris/dosen/asset') }}" type="button" class="btn btn-primary pull-right">Finish</a>
                		</div>

		              
		              </form>
		            </div>
		            <!-- /.box-body -->
		          </div>       
			</div>
		</div>
</div>		          
@endsection