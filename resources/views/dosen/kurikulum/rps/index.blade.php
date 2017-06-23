@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Rencana Pembelajaran Semester 
@endsection

@section('contentheader_title')
Rencana Pembelajaran Semester
@endsection

@section('main-content')
<!-- Kodingan HTML ditaruh di sini -->
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
  <a href="{{url('/dosen/kurikulum/rps/set-ujian')}}" type="button" class="btn btn-info btn-md" >
    <i class="fa fa-pencil-square"></i> Atur Minggu UTS/UAS</a>
  <a href="{{url('/dosen/kurikulum/rps/cp-mk')}}" type="button" class="btn btn-info btn-md" >
    <i class="fa fa-plus-square"></i> Tambah RPS</a> 
  <a href="{{url('/dosen/kurikulum/rps/pilih-mk')}}" type="button" class="btn btn-info btn-md" >
    <i class="fa fa-plus-square"></i> Tambah RPS Lanjutan</a>
</div>
  <div class="box box-danger">

<div class="box-body">
<table id="data-table" class="table table-bordered table-striped">
    <thead>
<tr>
    <th style="text-align:center">No.</th>
    <th style="text-align:center">Kode Mata Kuliah</th>
    <th style="text-align:center">Nama Mata Kuliah</th>
    <th style="text-align:center">Aksi</th>
  </tr>
  </thead>

  <tbody>
  @forelse($mata_kuliah as $i => $mk) 
  <tr>
   <td width="2%" style="text-align:center">{{ $i+1 }}</td>
    <td width="15%" style="text-align:center"><a href="{{url('/dosen/kurikulum/rps/edit/'.$mk->id_mk)}}">{{$mk->kode_matkul}}</a></td>
    <td width="25%" style="text-align:center">{{$mk->nama_matkul}}</td>

    <td width="15%" style="text-align:center">
    <a onclick="return confirm('Anda yakin untuk menghapus RPS ini?');" href="{{url('/dosen/kurikulum/rps/delete/'.$mk->id_mk)}}" class="btn btn-danger btn-xs">
        <i class="fa fa-trash-o"></i> Delete</a>
    <a target="_blank" class="btn btn-info btn-xs" href="{{url('/dosen/kurikulum/rps/pdf/'.$mk->id_mk)}}">
    <i class="fa fa-file-pdf-o" aria-hidden="true"></i> Download PDF</a>
    </td>

    @empty
    <tr>
      <td colspan="6"><center>Belum ada Kategori Media Pembelajaran</center></td>
    </tr>
    <br>
    @endforelse
  </tbody>
</table>

</div>

</div>
@endsection

@section('code-footer')
<script type="text/javascript">
  $(document).ready(function(){
      $('#data-table').DataTable();
  });
</script>
@endsection