@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Share Document
@endsection

@section('contentheader_title')
Share Document
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

<div class="form-group">
          <label for="file-upload" class="col-sm-2 control-label">Upload File</label>
          <div class="col-md-8">
            <input type="file" class="form-control input-lg" id="file-upload" name="file-upload" placeholder="Pilih File" required>

          </div>
  </div>

<div style="overflow: auto">
<table id="myTable" class="table table-striped table-bordered" cellspacing="0">
  <thead>
    <tr>
      <th style="text-align:center">No.</th>
      <th style="text-align:center">Nama Dokumen</th>
      <th style="text-align:center">Tanggal Upload</th>
      <th style="text-align:center">Uploader</th>
      <th style="text-align:center">Action</th>
      
    </tr>
    </thead>
  <tbody>
   @forelse($upload-dokumen as $i => $ud) 
    <tr>
      <td>{{ $i+1 }}</td>
      <td width="25%" style="text-align:center">{{$ud->nama}}</td>
      <td width="20%" style="text-align:center">{{$ud->tgl_upload}}</td>
      <td width="20%" style="text-align:center">{{$ud->nama_petugas}}</td>
      <td width="15%" style="text-align:center" >
      <a onclick="return confirm('Anda yakin untuk menghapus ini?');" href="{{url('/karyawan/PermohonanRuang/Konfirmasi/'.$PR->id_permohonan_ruang.'/accept/')}}" class="btn btn-success btn-xs">
        <i></i value="1"> Delete</a>
        
        </td>
    </tr>
     @empty
        <tr>
          <td colspan="8"><center>Belum ada permohonan</center></td>
        </tr>
    @endforelse
  </tbody>
</table>
</div>

@endsection

@section('code-footer')

@endsection