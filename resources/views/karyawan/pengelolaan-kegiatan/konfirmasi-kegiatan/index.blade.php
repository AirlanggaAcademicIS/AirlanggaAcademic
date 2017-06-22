@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Konfirmasi Kegiatan
@endsection

@section('contentheader_title')
Konfirmasi Kegiatan
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
<h2>Tabel Pengajuan Proposal Kegiatan</h2>

<table id="proposalTable" class="table table-striped table-bordered" cellspacing="0">
  <thead>
    <tr>
      <th width="10%" style="text-align:center">No</th>
      <th width="20%" style="text-align:center">Nama Proposal</th>      
      <th width="10%" style="text-align:center">Tanggal Pengajuan</th>
      <th width="30%" style="text-align:center">Tindakan</th>
    </tr>
    </thead>
  <tbody>
   @forelse($konfirmasiProposal as $i => $konfirmasi_kegiatan) 
    <tr>
      <td width="10%" style="text-align:center">{{$i+1}}</td>
      <td width="20%" style="text-align:center">{{$konfirmasi_kegiatan->nama}}</td>
      <td width="10%" style="text-align:center">{{$konfirmasi_kegiatan->tglpengajuan}}</td>
      <td width="30%" style="text-align:center" >
          <a onclick="return confirm('Apakah anda yakin untuk menyetujui proposal ini?');" href="{{url('/karyawan/pengelolaan-kegiatan/konfirmasi-kegiatan/'.$konfirmasi_kegiatan->id_kegiatan.'/setujuiProposal/')}}" class="btn btn-success btn-xs">
          <i class="fa fa-pencil-square-o"></i> Setujui</a>
          <a data-toggle="modal" data-target="#modalProposal{{$konfirmasi_kegiatan->id_kegiatan}}" class="btn btn-danger btn-xs">
          <i class="fa fa-trash-o"></i> Tolak</a>
          <a href="{{url('/karyawan/pengelolaan-kegiatan/detail-pengajuan/'.$konfirmasi_kegiatan->id_kegiatan.'/konfirmasi_kegiatan/proposal')}}" class="btn btn-success btn-xs"> View Detail</a>
      </td>
    </tr>

     @empty
        <tr>
          <td colspan="6"><center>Belum ada pengajuan proposal</center></td>
        </tr>
    
    @endforelse

  </tbody>

</table>
</div>

@foreach($konfirmasiProposal as $i => $konfirmasi_kegiatan)
   <!-- Modal Proposal-->
  <div class="modal fade" id="modalProposal{{$konfirmasi_kegiatan->id_kegiatan}}" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
   <form id="tolakProposal" method="post" action="{{url('/karyawan/pengelolaan-kegiatan/konfirmasi-kegiatan/'.$konfirmasi_kegiatan->id_kegiatan.'/tolakProposal')}}" enctype="multipart/form-data"  class="form-horizontal">
                   <input type="hidden" name="_token" value="{{ csrf_token() }}">

      <div class="modal-content">
        <div class="modal-header" class="col-sm-12">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Masukkan Catatan Revisi untuk Perbaikan Proposal</h4>
        </div>
        <div class="modal-body" class="col-sm-12">
          <label for="revisi" class="col-sm-2 control-label">Catatan Revisi</label>
            <textarea class="col-sm-8" id="revisiProposal" class="form-control" name="revisiProposal" placeholder=" Masukkan Catatan Revisi Pengajuan Proposal" value="{{$konfirmasi_kegiatan->revisi}}" required cols="82" rows="5">{!!$konfirmasi_kegiatan->revisi!!}</textarea>
         </div>
      
         <div class="modal-footer" class="col-sm-12">
          <button onclick="return confirm('Apakah anda yakin untuk merevisi proposal ini?');" type="submit" class="btn btn-success" >Simpan</button>
        </div>
      </div>
    
    </form>

    </div>
  </div>
@endforeach
<!--end modal-->




@endsection

@section('code-footer')

@endsection
