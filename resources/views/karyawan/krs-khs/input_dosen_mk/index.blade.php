@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Dosen MK
@endsection

@section('contentheader_title')
Dosen MK
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
  <a href="{{url('karyawan/krs-khs/input_dosen_mk')}}" type="button" class="btn btn-info btn-md" >
    <i class="fa fa-plus-square"></i> Tambah Dosen</a>
</div>
<div style="overflow: auto">
<table id="myTable" class="table table-striped table-bordered" cellspacing="0">
  <thead>
    <tr>
      <th style="text-align:center">Nomer</th>
      <th style="text-align:center">Nama Dosen</th>
      <th style="text-align:center">Nama Mata Kuliah</th>      
      <th style="text-align:center">Status</th>
    </tr>
    </thead>
  <tbody>
   @forelse($tabel as $i => $r) 
    <tr>
      <td width="5%" style="text-align:center">{{ $i+1 }}</td>
      <td width="20%" style="text-align:center">
        @foreach($dosen as $d)
        @if($r->dosen_id == $d->nip)
        {{$d->nama_dosen}}
        @endif
        @endforeach
      </td>
      <td width="20%" style="text-align:center">
        @foreach($mk_ditawarkan as $md)
        @if($r->mk_ditawarkan_id == $md->id_mk_ditawarkan)
        @foreach($mk as $m)
        @if($md->matakuliah_id == $m->id_mk)
        {{$m->nama_matkul}}
        @endif
        @endforeach
        @endif
        @endforeach
      </td>
      <td width="20%" style="text-align:center">
        @if($r->status==0)
        PJMK
        @else
        Pendamping
        @endif
      </td>
    </tr>
     @empty
        <tr>
          <td colspan="6"><center>Belum ada dosen</center></td>
        </tr>
    @endforelse
  </tbody>
</table>
</div>

@endsection

@section('code-footer')

@endsection