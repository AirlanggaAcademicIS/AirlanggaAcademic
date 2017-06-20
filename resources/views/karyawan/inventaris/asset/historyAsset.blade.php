@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Asset
@endsection

@section('contentheader_title')
History Asset
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



<div class="col-sm-6">

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
    
      </tr>
    </thead>
  <tbody>
   @forelse($asset as $i => $ass) 
    <tr>
      <td>{{ $i+1 }}</td>
       @if($ass->kategori_id == 1) 
        <td width="20%" style="text-align:center">Elektronik</td>
        @elseif($ass->kategori_id == 2) 
        <td width="20%" style="text-align:center">Mekanik</td>
        @elseif($ass->kategori_id == 3) 
        <td width="20%" style="text-align:center">Furniture</td>
        @elseif($ass->kategori_id == 4) 
        <td width="20%" style="text-align:center">Dokumen</td>
        @elseif($ass->kategori_id == 5) 
        <td width="20%" style="text-align:center">Kendaraan</td>
       @endif
      
      <td width="15%" style="text-align:center">{{$ass->nip_petugas_id}}</td>
     
      @if($ass->status_id == 1) 
      <td width="20%" style="text-align:center">Ready</td>
      @elseif($ass->status_id == 2) 
      <td width="20%" style="text-align:center">Borrowed</td>
      @elseif($ass->status_id == 3) 
      <td width="20%" style="text-align:center">Maintenance</td>
      @elseif($ass->status_id == 4) 
      <td width="20%" style="text-align:center">Broken</td>
      @elseif($ass->status_id == 5) 
      <td width="20%" style="text-align:center">Expired</td>
      @endif

      <td width="10%" style="text-align:center">{{$ass->nama_asset}}</td>

      @if($ass->lokasi_id == 1) 
        <td width="20%" style="text-align:center">Labkom 1</td>
        @elseif($ass->lokasi_id == 2) 
        <td width="20%" style="text-align:center">Labkom 2</td>
        @elseif($ass->lokasi_id == 3) 
        <td width="20%" style="text-align:center">Labkom 3</td>
        @elseif($ass->lokasi_id == 4) 
        <td width="20%" style="text-align:center">Labkom 4</td>
        @elseif($ass->lokasi_id == 5) 
        <td width="20%" style="text-align:center">Labkom 5</td>
        @elseif($ass->lokasi_id == 6) 
        <td width="20%" style="text-align:center">Labkom 6</td>
      @endif

    
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
