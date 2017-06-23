@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Input Struktur Panitia Kegiatan
@endsection

@section('contentheader_title')
Input Struktur Panitia Kegiatan
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

<!--Tabel Proposal-->
<div style="overflow: auto">
<h2>Tabel Struktur Panitia</h2>

<div>

@foreach($konfirmasiProposal as $i => $kegiatan)
 <a data-toggle="modal" data-target="#modalStrukturPanitia{{$kegiatan->id_kegiatan}}" class="btn btn-danger btn-xs">
          <i class="fa fa-trash-o"></i> Tambah Panitia</a>
   <!-- Modal Proposal-->
  <div class="modal fade" id="modalStrukturPanitia{{$kegiatan->id_kegiatan}}" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
   <form id="strukturPanitia" method="post" action="{{url('dosen/pengelolaan-kegiatan/input-struktur-panitia/'.$kegiatan->id_kegiatan.'/tambahPanitia')}}" enctype="multipart/form-data"  class="form-horizontal">
                   <input type="hidden" name="_token" value="{{ csrf_token() }}">

      <div class="modal-content">
        <div class="modal-header" class="col-sm-12">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Input Struktur Panitia</h4>
        </div>
      
        <div class="modal-body" class="col-sm-12">
          <label for="mahasiswa" class="col-sm-2 control-label">Dosen</label>
             <select class="form-control input-sm" name="panitiaKegiatan" id="panitiaKegiatan">
            @foreach( $panitia as $data )

            <option value="{{ $data->nip }}"> {{ $data->biodata['nama_dosen'] }}</option>

            @endforeach
          </select>
         </div>
      
        <div class="modal-body" class="col-sm-12">
          <label for="jabatan" class="col-sm-2 control-label">Jabatan</label>
             <select class="form-control input-sm" name="jabatanPanitia" id="jabatanPanitia">
            @foreach( $jabatan as $data )

            <option value="{{ $data->id_jabatan }}"> {{ $data->jabatan }}</option>

            @endforeach
          </select>
         </div>
         <div class="modal-footer" class="col-sm-12">
          <button onclick="return confirm('Apakah anda yakin untuk menambahkan panitia ini?');" type="submit" class="btn btn-success" >Simpan</button>
        </div>
      </div>
    
    </form>

    </div>
  </div>

<table id="struturPanitiaTabel" class="table table-striped table-bordered" cellspacing="0">
  <thead>
    <tr>
      <th width="10%" style="text-align:center">No</th>
      <th width="20%" style="text-align:center">Nama</th>      
      <th width="10%" style="text-align:center">Jabatan</th>
      <th width="10%" style="text-align:center">Tindakan</th>
    </tr>
    </thead>
  <tbody>
   @forelse($struktur as $i => $panitia) 
    <tr>
      <td width="10%" style="text-align:center">{{$i+1}}</td>
      <td width="20%" style="text-align:center">{{$panitia->dosen['nama_dosen']}}</td>
      <td width="10%" style="text-align:center">{{$panitia->jabatan['jabatan']}}</td>
      <td> <a data-toggle="modal" data-target="#modalStrukturPanitiaEdit{{$kegiatan->id_kegiatan}}{{$panitia->nip_id}}" class="btn btn-danger btn-xs">
          <i class="fa fa-trash-o"></i> Edit Panitia</a>
          
     <!-- Modal Proposal-->
  <div class="modal fade" id="modalStrukturPanitiaEdit{{$kegiatan->id_kegiatan}}{{$panitia->nip_id}}" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
   <form id="strukturPanitiaEdit" method="post" action="{{url('dosen/pengelolaan-kegiatan/input-struktur-panitia/'.$kegiatan->id_kegiatan.'/tambahPanitiaEdit')}}" enctype="multipart/form-data"  class="form-horizontal">
                   <input type="hidden" name="_token" value="{{ csrf_token() }}">

      <div class="modal-content">
        <div class="modal-header" class="col-sm-12">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Input Struktur Panitia</h4>
        </div>
      
        <div class="modal-body" class="col-sm-12">
          <label for="mahasiswa" class="col-sm-2 control-label">Dosen</label>
             <select class="form-control input-sm" name="panitiaKegiatan" id="panitiaKegiatan" value="{{$panitia->nip_id}}">
            
            <option value="{{ $panitia->nip_id }}"> {{$panitia->dosen['nama_dosen']}}</option>
            
          </select>
         </div>
      
        <div class="modal-body" class="col-sm-12">
          <label for="jabatan" class="col-sm-2 control-label">Jabatan</label>
             <select class="form-control input-sm" name="jabatanPanitia" id="jabatanPanitia">
            @foreach( $jabatan as $data )

            <option value="{{ $data->id_jabatan }}"> {{ $data->jabatan }}</option>

            @endforeach
          </select>
         </div>

         <div class="modal-footer" class="col-sm-12">
          <button onclick="return confirm('Apakah anda yakin untuk menambahkan panitia ini?');" type="submit" class="btn btn-success" >Simpan</button>
        </div>
      </div>
    
    </form>

    </div>
  </div>
          </td>
    </tr>

     @empty
        <tr>
          <td colspan="6"><center>Belum ada panitia</center></td>
        </tr>
    
    @endforelse

  </tbody>
</table>

         <div class="col-sm-10"></div>
<a href="{{url('dosen/pengelolaan-kegiatan/rincian-rundown/'.$kegiatan->id_kegiatan)}}" class="btn btn-success btn-xs"> Simpan</a>
@endforeach

</div>
@endsection

@section('code-footer')

@endsection
