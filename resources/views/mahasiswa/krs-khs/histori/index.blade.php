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
      <th style="text-align:center">Bobot</th>
    </tr>
    </thead>
  <tbody>
    @php
    $total = 0;
    $sks = 0;
    @endphp

   @forelse($histori as $i => $h) 
    <tr>
      <td width="5%" style="text-align:center">{{ $i+1 }}</td>
      <td width="30%" style="text-align:center">{{$h->nama_matkul}}</td>
      <td width="15%" style="text-align:center">{{$h->sks}}</td>
      @if($h->nilai == "K")
      @php
      $sks= $sks + 0
      @endphp
      @else
      @php
      $sks = $sks + $h->sks
      @endphp
      @endif
      <td width="15%" style="text-align:center">{{$h->nilai}}</td>
      @if($h->nilai=="A")
      @php
      $total = $total + (4 * $h->sks)
      @endphp
      <td width="20%" style="text-align:center">{{4 * $h->sks}} </td>
      @elseif($h->nilai=="AB")
      @php
      $total = $total + (3.5 * $h->sks)
      @endphp
      <td width="20%" style="text-align:center">{{3.5 * $h->sks}} </td>
      @elseif($h->nilai=="B")
      @php
      $total = $total + (3 * $h->sks)
      @endphp
      <td width="20%" style="text-align:center">{{3 * $h->sks}} </td>
      @elseif($h->nilai=="BC")
      @php
      $total = $total + (2.5 * $h->sks)
      @endphp
      <td width="20%" style="text-align:center">{{2.5 * $h->sks}} </td>
      @elseif($h->nilai=="C")
      @php
      $total = $total + (2 * $h->sks)
      @endphp
      <td width="20%" style="text-align:center">{{2 * $h->sks}} </td>
      @elseif($h->nilai=="D")
      @php
      $total = $total + (1 * $h->sks)
      @endphp
      <td width="20%" style="text-align:center">{{1 * $h->sks}} </td>
      @else
      @php
      $total = $total + (0 * $h->sks)
      @endphp
      <td width="20%" style="text-align:center">0</td>
      @endif  
    </tr>
     @empty
        <tr>
          <td colspan="6"><center>Histori nilai kosong</center></td>
        </tr>
    @endforelse
  </tbody>
  <tfoot>
    <td width="20%" style="text-align:center">Total Bobot : {{$total}}</td>
    <td width="20%" style="text-align:center">Total SKS : {{$sks}}</td>
    @if($sks==0)
    @php
    $ipk=0
    @endphp
    @else
    @php
    $ipk=$total / $sks
    @endphp
    @endif
    <td width="20%" style="text-align:center">IPK : {{$ipk}}</td>
    <td width="20%" style="text-align:center"></td>
    <td width="20%" style="text-align:center"></td>
  </tfoot>
</table>
</div>
</div>

@endsection

@section('code-footer')

@endsection