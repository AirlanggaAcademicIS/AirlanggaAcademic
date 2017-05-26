@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Asset
@endsection

@section('contentheader_title')
Asset
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
<div class="row"><div class="col-sm-6">
<div style="margin-bottom: 10px">
  <!-- Href ini biar diklik masuk ke form tambah -->

</div>
</div><div class="col-sm-6">

</div>
</div>

<div style="overflow: auto">
<table class="table" id="data-table" style="width:100%">
  <thead>
    <tr>
      <th style="text-align:center">No.</th>
      <th style="text-align:center">Kategori</th>
      <th style="text-align:center">NIP Petugas</th>
      <th style="text-align:center">Status</th>
      <th style="text-align:center">Nama Asset</th>
      <th style="text-align:center">Lokasi</th>
      <th style="text-align:center">Action</th>
      </tr>
    </thead>
  <tbody>
   @forelse($asset as $i => $ass) 
    <tr>
      <td>{{ $i+1 }}</td>
       @if($ass->kategori_id == 1) 
            <td width="20%" style="text-align:center">Dokumen</td>
            @elseif($ass->kategori_id == 2) 
            <td width="20%" style="text-align:center">Furniture</td>
            @elseif($ass->kategori_id == 3) 
            <td width="20%" style="text-align:center">Elektroni</td>

            @endif
      <td width="15%" style="text-align:center">{{$ass->nip_petugas_id}}</td>
     
      @if($ass->status_id == 1) 
            <td width="20%" style="text-align:center">Ready</td>
            @elseif($ass->status_id == 2) 
            <td width="20%" style="text-align:center">Not Ready</td>
            @endif
      <td width="10%" style="text-align:center">{{$ass->nama_asset}}</td>
      <td width="10%" style="text-align:center">{{$ass->lokasi}}</td>
      <td width="20%" style="text-align:center" >

        <a href="{{url('inventaris/dosen/asset/'.$ass->id_asset.'/viewDetail/')}}" class="btn btn-warning btn-xs">
        <i class="fa fa-eye"></i> View Detail</a>
               
        </td>

    </tr>
     @empty
        <tr>
          <td colspan="14"><center>Belum ada asset</center></td>
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
