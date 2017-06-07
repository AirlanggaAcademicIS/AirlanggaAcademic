@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Persentase Bobot Nilai
@endsection

@section('contentheader_title')
Persentase Bobot Nilai
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
<label for="persentase" class="col-sm-2 control-label">Matkul</label>
<table id="myTable" class="table table-striped table-bordered" cellspacing="0">
  <thead>
    <tr>
      <th style="text-align:center">Nomer</th>
      <th style="text-align:center">Jenis Penilaian</th>      
      <th style="text-align:center">Persentase (%)</th>
    </tr>
    </thead>
  <tbody>
   @forelse($bobot_nilai as $i => $r) 
    <tr>
      <td width="5%" style="text-align:center">{{ $i+1 }}</td>
      <td width="20%" style="text-align:center">{{$r->jenisPenilaian->nama_jenis}}</td>
      <td width="20%" style="text-align:center">{{$r->persentase}}</td>
      
    </tr>
     @empty
        <tr>
          <td colspan="6"><center>Belum ada Persentase</center></td>
        </tr>
    @endforelse
  </tbody>
</table>
</div>
<div style="margin-bottom: 10px">
  <!-- Href ini biar diklik masuk ke form tambah -->

  @if(empty($cek))
  <a href="{{url('dosen/krs-khs/bobot_nilai/'.$mk_ditawarkan_id.'/create')}}" type="button" class="btn btn-info btn-md" >
    <i class="fa fa-plus-square"></i> Tambah Persentase</a>
  @else
  <a href="{{url('dosen/krs-khs/bobot_nilai/'.$mk_ditawarkan_id.'/edit')}}" type="button" class="btn btn-warning btn-md" >
    <i class="fa fa-plus-square"></i> Edit Persentase</a>
  @endif

</div>

@endsection

@section('code-footer')

@endsection