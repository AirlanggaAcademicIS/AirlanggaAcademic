@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Detail Nilai
@endsection

@section('contentheader_title')
Detail Nilai
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
      <th style="text-align:center">UTS</th>
      <th style="text-align:center">UAS</th>      
      <th style="text-align:center">Softskill</th>
      <th style="text-align:center">Kuis</th>
      <th style="text-align:center">Tugas</th>
    </tr>
    </thead>
  <tbody>
    <tr>
    @if($detail_uts=="")
      <td width="15%" style="text-align:center">0</td> 
      <td width="15%" style="text-align:center">0</td>
      <td width="15%" style="text-align:center">0</td>
      <td width="15%" style="text-align:center">0</td>
      <td width="15%" style="text-align:center">0</td>
    @else
      <td width="15%" style="text-align:center">{{$detail_uts->detail_nilai}}</td> 
      <td width="15%" style="text-align:center">{{$detail_uas->detail_nilai}}</td>
      <td width="15%" style="text-align:center">{{$detail_softskill->detail_nilai}}</td>
      <td width="15%" style="text-align:center">{{$detail_kuis->detail_nilai}}</td>
      <td width="15%" style="text-align:center">{{$detail_tugas->detail_nilai}}</td>
    @endif
    </tr>
  </tbody>
</table>
</div>
</div>

@endsection

@section('code-footer')

@endsection