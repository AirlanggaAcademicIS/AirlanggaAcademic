@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Fakultas
@endsection

@section('contentheader_title')
Fakultas
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
  <a href="{{url('/inventaris/tugas-create')}}" type="button" class="btn btn-info btn-md" >
    <i class="fa fa-plus-square"></i> Tambah Fakultas</a>
</div>
<div style="overflow: auto">
<table id="myTable" class="table table-striped table-bordered" cellspacing="0">
  <thead>
    <tr>
      <th style="text-align:center">No.</th>
      <th style="text-align:center">id_fakultas</th>
      <th style="text-align:center">id_universitas</th>      
      <th style="text-align:center">kode_fakultas</th>
      <th style="text-align:center">nama_fakultas</th>
      <th style="text-align:center">created_at</th>
      <th style="text-align:center">updated_at</th>
      <th style="text-align:center">Action</th>
    </tr>
    </thead>
  <tbody>
  <?php $num = 1; ?>
   @forelse($fakultas as $fak) 
    <tr>
      <td>{{ $num }}</td>
      <td width="20%" style="text-align:center">{{$fak->id_fakultas}}</td>
      <td width="15%" style="text-align:center">{{$fak->id_universitas}}</td>
      <td width="20%" style="text-align:center">{{$fak->kode_fakultas}}</td>
      <td width="10%" style="text-align:center">{{$fak->nama_fakultas}}</td>
      <td width="10%" style="text-align:center">{{$fak->created_at}}</td>
      <td width="10%" style="text-align:center">{{$fak->updated_at}}</td>

      <td width="20%" style="text-align:center" ><a onclick="return confirm('Anda yakin untuk menghapus fakultas ini?');" href="{{url('/inventaris/tugas-fakultas/'.$fak->id_fakultas.'/delete/')}}" class="btn btn-danger btn-xs">
        <i class="fa fa-trash-o"></i> Hapus</a>

        <a href="{{url('/inventaris/tugas-fakultas/'.$fak->id_fakultas.'/tugas-edit')}}" class="btn btn-warning btn-xs">
        <i class="fa fa-pencil-square-o"></i> Edit</a>
        </td>
    </tr>
    <?php $num++; ?>
     @empty
        <tr>
          <td colspan="8"><center>Belum ada fakultas</center></td>
        </tr>
    @endforelse
  </tbody>
</table>
</div>

@endsection

@section('code-footer')

@endsection