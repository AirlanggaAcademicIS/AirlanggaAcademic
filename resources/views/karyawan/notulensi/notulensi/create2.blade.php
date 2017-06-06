@extends('adminlte::layouts.app')

@section('htmlheader_title')
Tambah Jenis Penilaian
@endsection

@section('contentheader_title')
Tambah Notulensi
@endsection

@section('code-header')

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script> 
<link rel="stylesheet" href="{{ asset('/css/dropzone.css') }}">
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
@endsection

@section('main-content')
<style>
  .form-group label{
    text-align: left !important;
  }
</style>
  <!-- Ini buat menampilkan notifikasi -->
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

      <form  method="post" action="{{url('notulensi/create2')}}" enctype="multipart/form-data"  class="form-horizontal">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="row" style="padding:10px">
                <div class="col-sm-3">
                <div class="form-group" > 
    <label for="nip_id" class="col-sm-1 control-label"></label> 
    <div class="col-sm-9"> 
    @foreach($rapat as $r)
    <select class="form-control" name="id_notulen"> 
    <option>Pilih Nama Rapat</option>
   @foreach($nama_rapat as $i => $m)  
    <option
    @if($r->id_notulen==$m->id_notulen) 
    {{'selected'}}
    @else
    {{''}}
    @endif
    value="{{$m->id_notulen}}">{{$m->nama_rapat}}</option> 
      @endforeach 
           </select> 
            </div> </div>
            </div>
            <div class="col-sm-4">
            <button type="submit" class="btn btn-primary btn-sm">
              Search
            </button>
            </div>
    </div>
        </form>

      <form id="tambahNotulensi" method="post" action="{{url('/notulensi/create')}}" enctype="multipart/form-data"  class="form-horizontal">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <!-- Menampilkan input text biasa -->
<input type="hidden" name="id_notulen" value="{{$r->id_notulen}}">
  
  <div class="form-group">

         <label class="col-sm-2 control-label"
         for="permohonan_ruang_id">Ruangan</label>
         <div class="col-sm-9">
        <select class="form-control" >
    <option>Pilih Ruang</option>
     @foreach($ruang as $i => $m)
    <option  @if($r->permohonan_ruang_id==$m->id_ruang) 
    {{'selected'}}
    @else
    {{''}}
    @endif
     value="{{$m->id_ruang}}">{{$m->nama_ruang }} </option> 
      @endforeach
           </select > 
            </div> 
    </div>
    <!-- <l
    abel for="permohonan_ruang_id" class="col-sm-2 control-label">ID Permohonan Ruang</label>
    <div class="col-sm-9">
      <input class="form-control" id="permohonan_ruang_id" type="text" enable> -->
    

    <div class="form-group">
      <label class="control-label col-sm-2" for="waktu_pelaksanaan" >Tanggal Rapat :</label>
        <div class="col-sm-9">
        <input type="text" id="waktu_pelaksanaan"  placeholder="dd-mm-yyyy" style="width: 100%; height: 16px; font-size: 16px; line-height: 18px; border: 1px solid #dddddd; padding: 17px;" 
        value="{{$r->waktu_pelaksanaan}}" disabled>
        </div>
    </div>
       <div class="form-group">
    <label for="nip_id" class="col-sm-2 control-label">Ketua Rapat</label>
    <div class="col-sm-9">
    <select class="form-control" name="nip_id" required="">
    @foreach($dosen as $i => $m)
    <option></option>
    <option value="{{$m->nip}}">{{$m->nama_dosen}}</option>
      @endforeach
           </select>
            </div>
    </div>
    <div class="form-group">
    <label for="agenda_rapat"class="col-sm-2 control-label">Agenda Rapat:</label>
    <div class="col-sm-9">
      <textarea class="form-control" rows="5" disabled>{{$r->agenda_rapat}}</textarea>
    </div>
  </div>
@endforeach
     <div class="form-group">
  <label for="hasil_pembahasan"class="col-sm-2 control-label">Hasil Rapat:</label>
  <div class="col-sm-9">
  <textarea class="form-control" rows="5" name="hasil_pembahasan" required></textarea>
</div>
    </div>
    <div class="form-group">
  <label for="deskripsi_rapat"class="col-sm-2 control-label">Deskripsi Rapat:</label>
  <div class="col-sm-9">
  <textarea class="form-control" rows="5" name="deskripsi_rapat" required>
    
  </textarea>
</div>

    </div>
      <div class="form-group">
    <div class="col-sm-offset-10 col-sm-10">
      <button type="submit" class="btn btn-info">Confirm</button>
    </div>
  </div>

</form>
  
</div>
</div>

@endsection

@section('code-footer')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>

// $( function() {
//     var date = $('#datepicker').datepicker({ dateFormat: 'yyyy/mm/dd' }).val();

//   } );


$( function() {
    var date = $( "#waktu_pelaksanaan" ).datepicker({dateFormat: 'yy-mm-dd'}).val();
  } );
  </script>
@endsection


 