@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Rincian Rundown
@endsection

@section('contentheader_title')
Rincian Rundown
@endsection

@section('main-content')
<!-- include summernote css/js-->
<div class="flash-message" style="margin-left: -16px;margin-right: -16px; margin-top: 13px;">
  @foreach (['danger', 'warning', 'success', 'info'] as $msg)
  @if(Session::has('alert-' . $msg))
<div class="alert alert-{{ $msg }}">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <p class="" style="border-radius: 0">{{ Session::get('alert-' . $msg) }}</p>
</div>
  {!!Session::forget('alert-' . $msg)!!}
  @endif
  @endforeach
</div>
<div style="margin-bottom: 10px">
  <!-- Href ini biar diklik masuk ke form tambah -->
  @foreach($kegiatan as $id)
  <a href="{{url('mahasiswa/pengelolaan-kegiatan/rincian-rundown/'.$id->id_kegiatan.'/createEditLPJ')}}" type="button" class="btn btn-info btn-md" >
    <i class="fa fa-plus-square"></i> Tambah Rincian Rundown Kegiatan</a>
@endforeach
</div>
<div style="overflow: auto">
<table id="myTable" class="table table-striped table-bordered" cellspacing="0">
  <thead>
    <tr>
      <th style="text-align:center">No.</th>
      <th style="text-align:center">Nama</th>      
      <th style="text-align:center">Waktu</th>
      <th style="text-align:center">Action</th>
    </tr>
    </thead>
  <tbody>
   @forelse($rincianrundown as $i => $rundown) 
    <tr>
      <td width="5%"  style="text-align:center">{{ $i+1 }}</td>
      <td width="10%" style="text-align:center">{{$rundown->nama}}</td>
      <td width="20%" style="text-align:center">{{$rundown->waktu}}</td>
      <td width="20%" style="text-align:center" > <a href="{{url('mahasiswa/pengelolaan-kegiatan/rincian-rundown/'.$rundown->id_rundown.'/viewEditLPJ')}}" type="button" class="btn btn-warning btn-xs"> <i class="fa fa-pencil-square-o"></i>Edit</a></td>
    </tr>
     @empty
        <tr>
          <td colspan="6"><center>Belum ada Rincian Rundown</center></td>
        </tr>
    @endforelse

  </tbody>
</table>
</div>


  @foreach($kegiatan as $id)
         <div class="col-sm-10">
           
         </div>
<a href="{{url('mahasiswa/pengelolaan-kegiatan/rincian-dana/'.$id->id_kegiatan.'/editLPJ')}}" class="btn btn-success btn-xs"> Simpan</a>
  
</div>
@endforeach
@endsection

@section('code-footer')

@endsection