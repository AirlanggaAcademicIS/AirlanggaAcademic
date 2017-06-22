@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Jadwal Kuliah
@endsection

@section('contentheader_title')
Jadwal Kuliah
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
  <a href="{{url('karyawan/krs-khs/jadwal-kuliah/create')}}" type="button" class="btn btn-info btn-md" >
    <i class="fa fa-plus-square"></i> Tambah Jadwal</a>
</div>
<div style="overflow: auto">
<table id="myTable" class="table table-striped table-bordered" cellspacing="0">
  <thead>
    <tr>
      <th style="text-align:center">No.</th>
      <th style="text-align:center">Mata Kuliah</th>
      <th style="text-align:center">Jam</th>      
      <th style="text-align:center">Hari</th>
      <th style="text-align:center">Ruang</th>

      <th style="text-align:center">Action</th>

    </tr>
    </thead>
  <tbody>
   @forelse($jadwal as $i => $j) 
    <tr>
      <td>{{ $i+1 }}</td>
      <td width="20%" style="text-align:center">{{$j->nama_matkul}}</td>
      <td width="15%" style="text-align:center">{{$j->waktu}}</td>
      <td width="20%" style="text-align:center">{{$j->nama_hari}}</td>
      <td width="20%" style="text-align:center">{{$j->nama_ruang}}</td>
      <td width="20%" style="text-align:center"><a onclick="return confirm('Anda yakin untuk menghapus jadwal ini?');" 
       href="{{url('karyawan/krs-khs/jadwal-kuliah/'.$j->mk_ditawarkan_id.'/'.$j->hari_id.'/'.$j->ruang_id.'/'.$j->jam_id.'/delete/')}}" class="btn btn-danger btn-xs hidden">
        <i class="fa fa-trash-o"></i> Hapus</a>
      
        <a href="{{url('karyawan/krs-khs/jadwal-kuliah/'.$j->mk_ditawarkan_id.'/'.$j->hari_id.'/'.$j->ruang_id.'/'.$j->jam_id.'/edit/')}}" class="btn btn-warning btn-xs">
        <i class="fa fa-pencil-square-o"></i> Edit</a>
      </td>
    </tr>
     @empty
        <tr>
          <td colspan="6"><center>Belum ada jadwal</center></td>
        </tr>
    @endforelse
  </tbody>
</table>
</div>

@endsection

@section('code-footer')
<!-- <script type="text/javascript">
  $(document).ready(function(){
   $('#data-table').DataTable(); 
  });
</script> -->
@endsection