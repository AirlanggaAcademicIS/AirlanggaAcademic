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
  <form action="{{url('/dosen/monitoring-skripsi/berkas/mhs')}}"method="get">
          <div class="col-md-3" style="padding: 0;">
            <select class="form-control" name="mhs" id="mhs">
            <option>--Pilih Mahasiswa--</option>
   @foreach($dis as $d)
   @foreach($dospem as $i => $dos)
   @if($d->skripsi_id == $dos->skripsi_id)
   <option value="{{ $dos->NIM_id }}">{{$dos->nama_mhs}}</option>
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
@endsection

@section('code-footer')

@endsection