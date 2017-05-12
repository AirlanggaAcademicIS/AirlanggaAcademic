@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Undangan Rapat
@endsection

@section('contentheader_title')
Undangan Rapat
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
  
</div>
<div style="overflow: auto">
<table id="myTable" class="table table-striped table-bordered" cellspacing="0">
  <thead>
    <tr>
      <th style="text-align:center">No.</th>
      <th style="text-align:center">NIP</th>
      <th style="text-align:center">ID Notulen</th>      
      
    </tr>
    </thead>
  <tbody>
   @forelse($dosenrapat as $i => $dospat) 
    <tr>
      <td style="text-align:center">{{ $i+1 }}</td>
      <td width="45%" style="text-align:center">{{$dospat->nip}}</td>
      <td width="45%" style="text-align:center">{{$dospat->notulen_id}}</td>
      
    </tr>
     @empty
        <tr>
          <td colspan="6"><center>Belum ada dosen rapat</center></td>
        </tr>
    @endforelse
  </tbody>
</table>
</div>

@endsection

@section('code-footer')

@endsection