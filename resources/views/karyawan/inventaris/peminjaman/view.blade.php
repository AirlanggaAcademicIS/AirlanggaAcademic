@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection

@section('contentheader_title')
View Detail Peminjaman
@endsection


@section('main-content')
<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="box box-warning">
		            <div class="box-header with-border">
		              <h3 class="box-title">View Detail Peminjaman</h3>
		            </div>
		            <!-- /.box-header -->
		            <div class="box-body">
		              <form role="form">
		                <!-- text input -->
		                <div class="form-group">
		                  <label>Nomor Induk Peminjam</label>
		                  <input type="text" class="form-control" value="{{ $peminjaman->nim_nip_peminjam }}" readonly>
		                </div>

		                <div class="form-group">
		                  <label>Petugas</label>
		                  <input type="text" class="form-control" value="{{ $peminjaman->nip_petugas_id }}" readonly>
		                </div>

		                <div class="form-group">
		                  <label>Asset Yang dipinjam</label>
		                  <input type="text" class="form-control" value="{{ $peminjaman->asset_yang_dipinjam }}" readonly>
		                </div>

		                <div class="form-group">
			                <label>Checkout Date:</label>
			                <div class="input-group date">
			                  <div class="input-group-addon">
			                    <i class="fa fa-calendar"></i>
			                  </div>
			                  <input type="text" class="form-control pull-right" value="{!! App\Helpers\GeneralHelper::indonesianDateFormat($peminjaman->checkout_date)  !!}" readonly>
			                </div>
			             </div>

		                <div class="form-group">
			                <label>Expected Checkin Date:</label>
			                <div class="input-group date">
			                  <div class="input-group-addon">
			                    <i class="fa fa-calendar"></i>
			                  </div>
			                  <input type="text" class="form-control pull-right" value="{!! App\Helpers\GeneralHelper::indonesianDateFormat($peminjaman->expected_checkin_date)  !!}" readonly>
			                </div>
			             </div>

			             <div class="form-group">
			                <label>Checkin Date:</label>
			                <div class="input-group date">
			                  <div class="input-group-addon">
			                    <i class="fa fa-calendar"></i>
			                  </div>
			                  <input type="text" class="form-control pull-right" value="{!! App\Helpers\GeneralHelper::indonesianDateFormat($peminjaman->checkin_date) !!}" readonly>
			                </div>
			             </div>

			             <div class="form-group">
		                  <label>Waktu Pinjam</label>
		                  <input type="text" class="form-control" value="{{ date("h:i", strtotime($peminjaman->waktu_pinjam)) }}" readonly>
		                </div>


		                <div class="form-group">
                  			<a href="{{ url('/inventaris/index-peminjaman') }}" type="button" class="btn btn-primary pull-right">Finish</a>
                		</div>

		              </form>
		            </div>
		            <!-- /.box-body -->
		          </div>       
			</div>
		</div>
</div>		          
@endsection