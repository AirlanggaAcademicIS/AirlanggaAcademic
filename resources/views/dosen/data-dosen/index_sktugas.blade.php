@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Surat Tugas
@endsection

@section('contentheader_title')
Surat Tugas
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

<div style="overflow: auto">
<table id="data-table" class="table table-striped table-bordered" cellspacing="0">
  <thead>
    <tr>
      <th style="text-align:center">No.</th>
      <th style="text-align:center">nomor surat</th>      
      <th style="text-align:center">tanggal surat</th>
      <th style="text-align:center">keterangan surat</th>
      <th style="text-align:center">File</th>
    
    </tr>
    </thead>
  <tbody>
   @forelse($surattugas as $i => $surattug) 
    <tr>
      <td>{{ $i+1 }}</td>
      <td width="20%" style="text-align:center">{{$surattug->no_surat}}</td>
      <td width="15%" style="text-align:center">{{$surattug->tanggal_surat}}</td>
      <td width="20%" style="text-align:center">{{$surattug->keterangan_sk}}</td>
      <td width="20%" style="text-align:center" > <a href="{{URL::asset('/img/dosen/'.$surattug->file_sk)}}" class="btn btn-primary btn-xs">
        <i class="fa fa-pencil-square-o"></i> Download</a> </td>
      </td>
    
    </tr>
     @empty
        <tr>
          <td colspan="6"><center>Belum ada surat tugas</center></td>
        </tr>
    @endforelse
  </tbody>
</table>
</div>

@endsection

@section('code-footer')
<script type="text/javascript">
  $(document).ready(function(){
      $('#data-table').DataTable();
  });
</script>  
@endsection