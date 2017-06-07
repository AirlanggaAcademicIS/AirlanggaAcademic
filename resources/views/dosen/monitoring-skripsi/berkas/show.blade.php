@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Data Bimbingan
@endsection

@section('contentheader_title')
Monitoring Skripsi
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
  <form action="{{url('/dosen/monitoring-skripsi/berkas/mhs')}}" method="get">
          <div class="col-md-3" style="padding: 0;">
            <select class="form-control" name="mhs" id="mhs">
            <option>--Pilih Mahasiswa--</option>
            @foreach($dis as $d)
   @foreach($dropdown as $i => $dos)
   @if($d->skripsi_id == $dos->skripsi_id)
   <option value="{{ $dos->NIM_id }}">{{ $dos->nama_mhs }}</option>
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
      <th style="text-align:center">Nama</th>      
      <th style="text-align:center">NIM</th>
      <th style="text-align:center">KBK</th>
      <th style="text-align:center">Judul</th>
      <th style="text-align:center">File Proposal</th>
      <th style="text-align:center">File Skripsi</th>
    </tr>
    </thead>
  <tbody>
   @forelse($dospem as $i => $dos) 
    <tr>
      <td width="5%" style="text-align:center">{{ $i+1 }}</td>
      <td width="15%" style="text-align:center">{{$dos->nama_mhs}}</td>
      <td width="15%" style="text-align:center">{{$dos->nim_id}}</td>
      <td width="15%" style="text-align:center">{{$skripsi->kbk['jenis_kbk']}}</td>
      <td width="15%" style="text-align:center">{{$dos->Judul}}</td>
      <td width="20%" style="text-align:center" >
      @if($dos->upload_berkas_proposal != "")
        <a class="btn btn-info" href="{{url('dosen/monitoring-skripsi/berkas/'.$dos->nim_id.'/download')}}"><i class="fa fa-download"></i> Download File</a>
        @else 
        Belum ada file
      @endif
      </td>
      <td width="20%" style="text-align:center" >
      @if($dos->upload_berkas_skripsi != "")
        <a class="btn btn-info" href="{{url('dosen/monitoring-skripsi/berkas/'.$dos->nim_id.'/download-skripsi')}}"><i class="fa fa-download"></i> Download File</a>
        @else 
        Belum ada file
      @endif
      </td>
    </tr>
     @empty
        <tr>
          <td colspan="6"><center>Belum ada File</center></td>
        </tr>
    @endforelse
  </tbody>
</table>
</div>

@endsection

@section('code-footer')

@endsection