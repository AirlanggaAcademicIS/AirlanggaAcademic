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
  <!-- Href ini biar diklik masuk ke form tambah -->
  <a href="{{url('/dosen/kurikulum/rps/create')}}" type="button" class="btn btn-info btn-md" >
    <i class="fa fa-plus-square"></i> Tambah RPS</a>
</div>
  <!-- Href ini biar diklik masuk ke form tambah -->
  <div class="box box-primary">

<div class="box-body">
<table id="example1" class="table table-bordered table-striped">
    <thead>
<tr>
    <th style="text-align:center">No.</th>
    <th style="text-align:center">Kode Mata Kuliah</th>
    <th style="text-align:center">Nama Mata Kuliah</th>
    <th style="text-align:center">Action</th>
  </tr>
  </thead>

  <tbody>
  @forelse($mata_kuliah as $i => $mk) 
  <tr>
   <td width="2%" style="text-align:center">{{ $i+1 }}</td>
    <td width="15%" style="text-align:center"><a href="{{url('/dosen/kurikulum/rps/edit/'.$mk->id_mk)}}">{{$mk->kode_matkul}}</a></td>
    <td width="25%" style="text-align:center">{{$mk->nama_matkul}}</td>

    <td width="15%" style="text-align:center">
    <a onclick="return confirm('Anda yakin untuk menghapus RPS ini?');" href="{{url('/dosen/kurikulum/rps/'.$mk->id_mk.'/delete/')}}" class="btn btn-danger btn-xs">
        <i class="fa fa-trash-o"></i> Delete</a>


        <a class="btn btn-info btn-xs">
        <i class="fa fa-download-square-o"></i> Download</a>
        </td>

    @empty
    <tr>
      <td colspan="6"><center>Belum ada Kategori Media Pembelajaran</center></td>
    </tr>

    @endforelse
  </tbody>
</table>

</div>

</div>
@endsection

@section('code-footer')




@endsection