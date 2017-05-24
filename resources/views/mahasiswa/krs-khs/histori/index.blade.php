@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Histori Nilai
@endsection

@section('contentheader_title')
Histori Nilai
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
      <th style="text-align:center">No.</th>
      <th style="text-align:center">Mata Kuliah</th>      
      <th style="text-align:center">Nilai</th>
    </tr>
    </thead>
  <tbody>
   @forelse($histori as $i => $h) 
    <tr>
      <td width="5%" style="text-align:center">{{ $i+1 }}</td>
      <td width="20%" style="text-align:center">{{$h->mk_ditawarkan_id}}</td>
      <td width="15%" style="text-align:center">{{$h->nilai}}</td>
    </tr>
     @empty
        <tr>
          <td colspan="6"><center>Histori nilai kosong</center></td>
        </tr>
    @endforelse
  </tbody>
</table>
</div>

@endsection

@section('code-footer')

@endsection