@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Fitur 
@endsection

@section('contentheader_title')
DAFTAR RAPAT
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
<table id="myTable" class="table table-striped table-bordered" cellspacing="0">
  <thead>
    <tr>
      <th style="text-align:center">No</th>
      <th style="text-align:center">NIP</th>
      <th style="text-align:center">ID Notulen</th>
      <th style="text-align:center">Created at</th>      
      <th style="text-align:center">Updated at</th>
      <th style="text-align:center">Deleted at</th>
    </tr>
    </thead>
  <tbody>
   @forelse($dosen_rapat as $i => $dospat) 
    <tr>
      <td>{{ $i+1 }}</td>
      <td width="40%" style="text-align:center">{{$dospat->nip}}</td>
      <td width="25%" style="text-align:center">{{$dospat->notulen_id}}</td>
      <td width="25%" style="text-align:center">{{$dospat->created_at}}</td>
      <td width="25%" style="text-align:center">{{$dospat->updated_at}}</td>
      <td width="25%" style="text-align:center">{{$dospat->deleted_at}}</td>
    </tr>
     @empty

    @endforelse
  </tbody>
</table>
</div>

@endsection

@section('code-footer')
	
@endsection