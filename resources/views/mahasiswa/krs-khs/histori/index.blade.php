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

<div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12">
<table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
  <thead>
    <tr>
      <th style="text-align:center">No.</th>
      <th style="text-align:center">Mata Kuliah</th>
      <th style="text-align:center">SKS</th>      
      <th style="text-align:center">Nilai</th>
    </tr>
    </thead>
  <tbody>
   @forelse($histori as $i => $h) 
    <tr>
      <td width="5%" style="text-align:center">{{ $i+1 }}</td>
      <td width="30%" style="text-align:center">{{$h->MKDitawarkan->MK->nama_matkul}}</td>
      <td width="15%" style="text-align:center">{{$h->MKDitawarkan->MK->sks}}</td>
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
</div>

@endsection

@section('code-footer')

@endsection