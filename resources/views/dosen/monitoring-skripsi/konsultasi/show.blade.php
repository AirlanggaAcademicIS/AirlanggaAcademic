@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Konsultasi
@endsection

@section('contentheader_title')
Konsultasi
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
  <div class="container">
  <div class="row">
  <form action="{{url('/dosen/monitoring-skripsi/konsultasi/mhs')}}" method="get">
          <div class="col-md-3" style="padding: 0;">
            <select class="form-control" name="mhs" id="mhs">
            <option>--Pilih Mahasiswa--</option>
            @foreach($dis as $d)
   @foreach($dropdown as $i => $konsul)
   @if($d->skripsi_id == $konsul->skripsi_id)
   <option value="{{ $konsul->NIM_id }}">{{ $konsul->nama_mhs }}</option>
    @break
    @endif
    @endforeach
    @endforeach 
            </select>
          </div>
          <div class="col-md-4">
            <button class="btn btn-info" type="submit">Pilih</button>
          </div>
      </form>
          </div>
          </div>
      <br>
    <div style="overflow: auto">
<table id="myTable" class="table table-striped table-bordered" cellspacing="0">
  <thead>
    <tr>
      <th style="text-align:center">No.</th>
      <th style="text-align:center">NIM</th>      
      <th style="text-align:center">Nama</th>
      <th style="text-align:center">Tanggal Konsultasi</th>      
      <th style="text-align:center">Catatan Konsultasi</th>
      <th style="text-align:center">Action</th>
    </tr>
    </thead>
  <tbody>
   @forelse($konsultasi as $i => $konsul) 
    <tr>
      <td width="5%" style="text-align:center">{{ $i+1 }}</td>
      <td width="10%" style="text-align:center">{{$konsul->nim_id}}</td>
      <td width="10%" style="text-align:center">{{$konsul->nama_mhs}}</td>
      <td width="15%" style="text-align:center">{{$konsul->tgl_konsul}}</td>
      <td width="20%" style="text-align:center">{{$konsul->catatan_konsul}}</td>
     
      <td width="20%" style="text-align:center" >
        <a href="{{url('/dosen/monitoring-skripsi/konsultasi/'.$konsul->id_konsultasi.'/edit/')}}" class="btn btn-warning btn-xs">
        <i class="fa fa-pencil-square-o"></i> Edit</a>
        </td>
    </tr>
     @empty
        <tr>
          <td colspan="6"><center>Belum ada Konsultasi</center></td>
        </tr>
    @endforelse
  </tbody>
</table>
</div>

@endsection

@section('code-footer')

@endsection