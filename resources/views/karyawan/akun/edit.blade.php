@extends('adminlte::layouts.app')

@section('htmlheader_title')
Edit Akun
@endsection

@section('contentheader_title')
Edit Akun
@endsection

@section('code-header')

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script> 

@endsection

@section('main-content')
<style>
	.form-group label{
		text-align: left !important;
	}
</style>

	@foreach (['danger', 'warning', 'success', 'info'] as $msg)
	@if(Session::has('alert-' . $msg))
<div class="alert alert-{{ $msg }}">
	<p class="" style="border-radius: 0">{{ Session::get('alert-' . $msg) }}</p>
</div>
	{!!Session::forget('alert-' . $msg)!!}
	@endif
	@endforeach


<div class="row">
	<div class="col-md-12">
		<div class="">

			@if (count($errors) > 0)
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
			<br>
			<form id="editAkun" method="post" action="{{url('/karyawan/akun/'.$akun->nim.'/edit')}}" enctype="multipart/form-data"  class="form-horizontal">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<!-- Menampilkan input text biasa -->
				<div class="form-group">
					<label for="nim" class="col-sm-2 control-label">NIM</label>
					<div class="col-md-8">
						<input type="number" class="form-control input-lg" id="nim" name="nim" placeholder="Masukkan NIM" value="{{$akun->nim}}" required>
			 		</div>
				</div>

				<div class="form-group">
					<label for="nama_mhs" class="col-sm-2 control-label">Nama Mahasiswa</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="nama_mhs" name="nama_mhs" placeholder="Masukkan Nama Mahasiswa" value="{{$biodata->nama_mhs}}" required>
					</div>
				</div>

				<div class="form-group">
					<label for="nlp_id" class="col-sm-2 control-label">NIP Dosen Wali</label>
					<div class="col-md-8">
					<select class="form-control input-lg" id="nlp_id" name="nlp_id" placeholder="Masukkan NIP Dosen Wali" required>
						@foreach ($dosen as $k)
						<option value="{{$k->nip}}">{{$k->nip}}</option>
						@endforeach 
						</select>
					</div>
				</div>


				<div class="form-group">
					<label for="E-mail" class="col-sm-2 control-label">E-mail</label>
					<div class="col-md-8">
						<input type="email" class="form-control input-lg" id="email" name="email" placeholder="Masukkan e-mail" value="{{$biodata->email_mhs}}" required>
					</div>
				</div>

				<div class="form-group">
					<label for="foto_mhs" class="col-sm-2 control-label">Ganti Foto Mahasiswa</label>
					<div class="col-md-8">
					<img src="{{URL::asset('/img/foto_mhs/'.$biodata->foto_mhs)}}" height="100px" width="100px" hspace="5px" vspace="2px" alt="gambar" style="border:2px solid gray" class="img-rounded" >
						<input type="file" class="form-control input-lg" id="foto_mhs" name="foto_mhs" placeholder="Pilih Foto Mahasiswa" value="{{$biodata->foto_mhs}}">

					</div>
				</div>

				<div class="form-group text-center">
					<div class="col-md-8 col-md-offset-2">
					<button type="submit" class="btn btn-primary btn-lg">
							Confirm
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection

@section('code-footer')
@if( Session::has('modal_message_error'))
    <script type="text/javascript">
        $(document).ready(function() {
            $('#popupmodal').modal();
        });
    </script>
    <div id="popupmodal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h3>Perhatian !</h3>
        </div>
        <div class="modal-body">
            <p>
                {{ Session::get('modal_message_error') }}
            </p>
        </div>
        <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
        </div>
    </div>
@endif


@endsection

