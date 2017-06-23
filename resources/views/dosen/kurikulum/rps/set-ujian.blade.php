
@extends('adminlte::layouts.app')

@section('htmlheader_title')
Rencana Pembelajaran Semester
@endsection

@section('contentheader_title')
Rencana Pembelajaran Semester
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

<div class="box box-danger">
<div class="row">
<div class="col-md-12">
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

  <form id="tambahUjian" method="post" action="{{url('dosen/kurikulum/rps/set-ujian')}}" enctype="multipart/form-data"  class="form-horizontal">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">       
  
    <div class="box-header with-border">
      <h3 class="box-title">Atur Minggu UTS/UAS</h3>
    </div>

    <div class="col-md-12">
      <div class="form-group box-header">
        <label>Mata Kuliah</label>
          <select id="selectMatkul" name="matkul" class="form-control select2" style="width: 100%;" required>
            <option value="">-- Kode Mata Kuliah - Nama Mata Kuliah --</option>
            @foreach ($mata_kuliah as $mk)
            {
              <option value="{{$mk->id_mk}}">{{$mk->kode_matkul}} - {{$mk->nama_matkul}} ({{$mk->sks}} SKS)</option>
            }
            @endforeach
          </select>
     </div>

     <div class="form-group box-header">
        <label for="uts">UTS Minggu Ke-</label>
          <select name="uts" class="form-control">
            <option value="">Pilih Minggu</option>
              @foreach($minggu_ke as $m) 
                <option value="{{$m->id_minggu}}">{{$m->minggu_ke}}</option>
              @endforeach
          </select>
      </div>

      <div class="form-group box-header">
        <label for="uas">UAS Minggu Ke-</label>
          <select name="uas" class="form-control">
            <option value="">Pilih Minggu</option>
              @foreach($minggu_ke as $m) 
                <option value="{{$m->id_minggu}}">{{$m->minggu_ke}}</option>
              @endforeach
          </select>
      </div>

      <div class="form-group box-header">
        <button type="submit" class="btn btn-primary" style="float:right;">Tambah</button>
    </div>
    </div>
    </div>
  </form>
  <!-- Table Daftar Minggu UTS/UAS Mk -->  
  <div class="col-md-12">
    <div class="box-header">
      <h3 class="box-title">Daftar Minggu Ujian Mata Kuliah</h3> 
      </div>
        <div class="box-body no-padding col-md-6">
          <table id="ujian" name="ujian" class="table table-striped table-bordered" cellspacing="0">
            <tbody>
              <thead>
                <tr>
                  <th style="text-align:center" width="10%">No.</th>
                  <th style="text-align:center">Mata Kuliah</th>      
                  <th style="text-align:center">UTS</th>
                </tr>
              </thead>
            <tbody>
            @foreach($uts as $i => $uts) 
              <tr>
                <td style="text-align:center">{{ $i+1 }}</td>
                <td style="text-align:center">{{$uts->nama_matkul}}</td>
                <td style="text-align:center">{{$uts->minggu_ke}}</td>
              </tr>
              @endforeach
            </tbody>
          </tbody>
        </table>
      </div>
      <div class="box-body no-padding col-md-6">
          <table id="ujian" name="ujian" class="table table-striped table-bordered" cellspacing="0">
            <tbody>
              <thead>
                <tr>   
                  <th style="text-align:center">UAS</th>
                  <th style="text-align:center">Aksi</th>
                </tr>
              </thead>
            <tbody>
            @foreach($uas as $i => $uas) 
              <tr>
                <td style="text-align:center">{{$uas->minggu_ke}}</td>
                <td style="text-align:center">
                <a onclick="return confirm('Anda yakin untuk menghapus plot ujian mata kuliah ini?');" href="{{url('/dosen/kurikulum/rps/delete-ujian/'.$uts->mk_id)}}" class="btn btn-danger btn-xs">
                <i class="fa fa-trash-o"></i> Delete</a></td>
              </tr>
              @endforeach
            </tbody>
          </tbody>
        </table>
      </div>
      <div class="col-md-12 box-body"><br>
      <a href="{{{('/dosen/kurikulum/rps/create')}}}" class="btn btn-primary" style="float:right;">Selanjutnya</a><br>
      </div>
</div>
</div>
</div>
@endsection

@section('code-footer')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
@endsection

