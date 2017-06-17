@extends('adminlte::layouts.app')
<html>
@section('code-header')


@endsection

@section('htmlheader_title')
<!-- Nama konten -->
Nama konten
<title></title>
<head></head> 
@endsection

@section('contentheader_title')
Laporan kinerja dosen
@endsection

@section('main-content')
<!-- Kodingan HTML ditaruh di sini -->

<body>
<label>Pilih tahun ajar :</label>
				<form method="get" action="{{url('/dosen/laporan')}}" enctype="multipart/form-data"  class="form-horizontal">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

                <select class="form-control select2" id="semester" name="semester" style="width: 15%;">
                  <option selected="selected" value="Genap">Genap</option>
                  <option selected="selected" value="Gasal">Gasal</option>
                  
                  
                  
                </select> <br>
                <div class="col-md-4">
						<input type="text" class="form-control input-lg" id="tahun" name="tahun" placeholder="Masukkan Tahun" required>
					</div> 
                <button type="submit" class="btn btn-primary btn-lg">
							Confirm
						</button>
                </form>
</body>
@endsection

@section('code-footer')




@endsection