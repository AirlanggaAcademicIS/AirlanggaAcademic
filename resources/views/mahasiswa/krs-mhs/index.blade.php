@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Biodata
@endsection

@section('contentheader_title')
Biodata
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
      <th>No.</th>
         
      <th style="text-align:center">Nama</th>
      <th style="text-align:center">Sks</th>   
      
    </tr>
    </thead>
  <tbody>
   @forelse($biodata as $i => $bio) 
    <tr>
      <td>{{ $i+1 }}</td>
      
      <td width="28%" style="text-align:center">{{$bio->nama}}</td>      
      <td width="28%" style="text-align:center">{{$bio->sks}}</td>
    </tr>
     @empty
        <tr>
          <td colspan="6"><center>Belum ada biodata</center></td>
        </tr>
    @endforelse
  </tbody>
</table>
</div>

@endsection

@section('code-footer')




@endsection
