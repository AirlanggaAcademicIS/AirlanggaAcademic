@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Pengumpulan Hardcopy
@endsection

@section('contentheader_title')
Pengumpulan Hardcopy Proposal dan Skripsi
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



<div class="box box-primary">
 <form  method="post" action="{{url('karyawan/Pengumpulan-Hardcopy/search')}}" enctype="multipart/form-data"  class="form-horizontal">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="row" style="padding:10px">
                <div class="col-sm-8">
                <div class="form-group-text-center" > 
    <label for="nip_id" class="col-sm-4 control-label">Search by NIM :</label> 
    <div class="col-sm-8"> 
    <input  type="text" class="form-control input-md" name="nim_key"  placeholder="Masukkan NIM"> 
            </div> </div>
            </div>
            <div class="col-sm-4">
            <button type="submit" class="btn btn-primary btn-sm">
              Search
            </button>
            </div>

</div>
    

</form>




<div style="overflow: auto">
<table id="myTable" class="table table-striped table-bordered" cellspacing="0">
  <thead>
    <tr>
      <th style="text-align:center">No.</th>
      <th style="text-align:center">NIM</th>      
      <th style="text-align:center">Nama</th>
      <th style="text-align:center">Proposal</th>
      <th style="text-align:center">Skripsi</th>
    </tr>
    </thead>
  <tbody>
   @forelse($Skripsi as $i => $bio) 
    <tr>
      <td>{{ $i+1 }}</td>
      <td  style="text-align:center">{{$bio->NIM_id}}</td>
      <td  style="text-align:center">{{$bio->Judul}}</td>
      <td style="text-align:center">
      @if($bio->tanggal_pengumpulan_proposal=='')
      <a onclick="return confirm('Cek Apakah Proposal Telah Sesuai!');" href="{{url('karyawan/Pengumpulan-Hardcopy/'.$bio->id_skripsi.'/Proposal')}}" class="btn btn-success btn-xs">
                    <i class="fa fa-pencil-square-o"></i> Kumpulkan Proposal</a>
      @else
      {{$bio->tanggal_pengumpulan_proposal}}
      @endif
      </td>
      <td  style="text-align:center" >
       @if($bio->tanggal_pengumpulan_skripsi=='')
      <a onclick="return confirm('Cek Apakah Skripsi Telah Sesuai!');" href="{{url('karyawan/Pengumpulan-Hardcopy/'.$bio->id_skripsi.'/Skripsi')}}" class="btn btn-success btn-xs">
                    <i class="fa fa-pencil-square-o"></i> Kumpulkan Skripsi</a>
      @else
      {{$bio->tanggal_pengumpulan_skripsi}}
      @endif
        </td>
    </tr>
     @empty
        <tr>
          <td colspan="12"><center>Tidak ada Data yang Ditemukan</center></td>
        </tr>
    @endforelse
  </tbody>
</table>
</div>
</div>

@endsection

@section('code-footer')

@endsection