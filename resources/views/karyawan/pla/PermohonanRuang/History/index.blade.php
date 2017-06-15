@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Permohonan Ruang
@endsection

@section('contentheader_title')
History Peminjam Ruangan
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

<div style="padding:10px">
<table id="data-table" class="table table-striped table-bordered" cellspacing="0">
  <thead>
    <tr>
      <th style="text-align:center">No.</th>
      <th style="text-align:center">Nama Petugas</th>      
      <th style="text-align:center">Perihal</th>
      <th style="text-align:center">NIM/NIP Peminjam</th>
      <th style="text-align:center">Ruang</th>
      <th style="text-align:center">Tanggal Peminjam</th>
      <th style="text-align:center">Hari</th>
      <th style="text-align:center">Jam</th>
      <th style="text-align:center">Verifikasi</th>
      
    </tr>
    </thead>
  <tbody>
   @forelse($PermohonanRuang as $i => $PR) 
    <tr>
      <td>{{ $i+1 }}</td>
      <td width="25%" style="text-align:center">{{$PR->nama_petugas}}</td>
      <td width="25%" style="text-align:center">{{$PR->nama}}</td>
      <td width="20%" style="text-align:center">{{$PR->nim_nip}}</td>
      <td width="20%" style="text-align:center">{{$PR->nama_ruang}}</td>
      <td width="20%" style="text-align:center">{!!App\Helpers\GeneralHelper::indonesianDateFormat($PR->tgl_pinjam)!!}</td>
      <td width="20%" style="text-align:center">{{$PR->nama_hari}}</td>
      <td width="20%" style="text-align:center">{{$PR->waktu}}</td>
            <td width="20%" style="text-align:center">
            @if(($PR->atribut_verifikasi)==1)
            <span class="label label-success"><i class="fa fa-check-square-o" aria-hidden="true"></i> Approved</span>
            @else
            <span class="label label-danger"><i class="fa fa-window-close-o" aria-hidden="true"></i> Rejected</span>

            @endif
            </td>
      
    </tr>
     @empty
        <tr>
          <td colspan="9"><center>Belum ada permohonan</center></td>
        </tr>
    @endforelse
  </tbody>
</table>
</div>

@endsection

@section('code-footer')
<!-- <script src="{{asset('js/jquery.dataTables.min.js')}}"></script> -->
<script type="text/javascript"> 
    $(document).ready(function(){ 
        $('#data-table').DataTable(); 
    }); 
</script> 

@endsection
