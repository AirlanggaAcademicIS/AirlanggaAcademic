
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

  <form id="tambahCPMK" method="post" action="{{url('dosen/kurikulum/rps/cp-mk')}}" enctype="multipart/form-data"  class="form-horizontal">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">       
  
    <div class="box-header with-border">
      <h3 class="box-title">Input Capaian Mata Kuliah</h3>
    </div>

    <div class="col-md-12">
    <div class="form-group box-header with-border">
        <label>Mata Kuliah</label>
        <select id="selectMatkul" name="matkul" class="form-control select2" style="width: 100%;" required>
          <option value="">-- Kode Mata Kuliah - Nama Mata Kuliah --</option>
          @foreach ($mk as $mk)
          {
            <option value="{{$mk->id_mk}}">{{$mk->kode_matkul}} - {{$mk->nama_matkul}} ({{$mk->sks}} SKS)</option>
          }
          @endforeach
        </select>
        <br>
      <label for="kode_cpmk"><b>Kode CP MK</b></label>
      <input class="form-control" id="kode_cpmk" name="kode_cpmk" required="" value="M">
      <br>
      <label for="deskripsi_cpmk"><b>Deskripsi CP MK</b></label>
      <input class="form-control" id="deskripsi_cpmk" name="deskripsi_cpmk" required="">
      <br>

  <p><b>Media Pembelajaran</b></p>    
    @foreach($media as $m)
      <label class="checkbox-inline" name="media_pembelajaran"><input type="checkbox" value="{{$m->id}}" name="media_pembelajaran[]">{{$m->media_pembelajaran}}</label>       
    @endforeach
    <br>

      <button type="submit" class="btn btn-primary" style="float:right;">Tambah</button>
    </div>
    </div>
    </div>
  </form>
  <!-- Table Daftar Capaian Mata Kuliah -->  
  <div class="col-md-12">
    <div class="box-header">
      <h3 class="box-title">Daftar Capaian Mata Kuliah</h3> 
      </div>
        <div class="box-body no-padding">
          <table id="cpmk" name="cpmk" class="table table-striped table-bordered" cellspacing="0">
            <tbody>
              <thead>
                <tr>
                  <th style="text-align:center" width="10%">No.</th>
                  <th style="text-align:center">Kode CP MK</th>      
                  <th style="text-align:center">Deskripsi CP MK</th>
                  <th style="text-align:center">Mata Kuliah</th>
                  <th style="text-align:center">Media Pembelajaran</th>
                </tr>
              </thead>
            <tbody>
                <tr>
                  <td style="text-align:center"></td>
                  <td style="text-align:center"></td>
                  <td style="text-align:center"></td>
                  <td style="text-align:center"></td>
                  <td style="text-align:center"></td>
                </tr>
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
<script>
  $( function() {
    var date = $('#datepicker').datepicker({ dateFormat: 'yy/mm/dd' }).val();
  } );
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $("#selectMatkul").on("change", function(){
      var id = $("#selectMatkul").val();      
      $.ajax({
        headers: 
        {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },        
        type: "POST",
        url: "cp-mk-id",
        data: {'id' : id},
        dataType: 'json',
        encode : true,
        success: function (data) 
        {
          var htmlStr;
          htmlStr += '<thead> <tr> <th>No</th> <th>Kode CP MK</th> <th>Deskripsi CP MK</th> <th>Mata Kuliah</th> <th>Media Pembelajaran</th> </thead>';
          $.each(data.dataMatkul, function(k, v){
            var no = k+1;
            // htmlStr += v.kode_cpmk + ' ' + v.id + '<br />';
            htmlStr += '<tbody><tr><td>' + no + '</td><td>' + v.kode_cpmk + '</td><td>' + v.deskripsi_cpmk + '</td><td>' + v.nama_matkul + '</td><td>' + v.media_pembelajaran + '</td></tr></tbody>';        
          });
          $("#cpmk").html(htmlStr);          
        },        
      });               
    });
  });
</script>  
@endsection

