@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
MK Ditawarkan
@endsection

@section('contentheader_title')
MK Ditawarkan
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
  <a href="{{ url('karyawan/krs-khs/mk-ditawarkan/create') }}" type="button" class="btn btn-info btn-md" >
    <i class="fa fa-plus-square"></i> Tambah Periode MK Ditawarkan</a>
</div>
<form action="{{url('karyawan/krs-khs/mk-ditawarkan/show')}}" method="get">
<div class="col-md-3" style="padding: 0;">
<div style="overflow: auto">
  <select class="form-control" id="periode" name="periode" required>
      <option value="">Tahun Akademik</option>
      @foreach($tahun as $t) 
      <option value ="{{$t->id_thn_akademik}}">{{$t->semester_periode}}</option>
      @endforeach
  </select>
            <button class="btn btn-info" type="submit">Pilih</button>
</div>
</div>
</form>
<br>
<br>
<br>
<br>
<br>
<Label>Tahun Akademik {{$periode->semester_periode}}</label>
<table id="myTable" class="table table-striped table-bordered" cellspacing="0">
  <thead>
    <tr>
      <th style="text-align:center">No.</th>
      <th style="text-align:center" hidden>ID MK Ditawarkan</th>
      <th style="text-align:center" hidden>Tahun Akademik</th>
      <th style="text-align:center">Mata Kuliah</th>
      </tr>
    </thead>
  <tbody>
   @forelse($mk_ditawarkan as $i => $md) 
    <tr>
      <td width="20%" style="text-align:center">{{ $i+1 }}</td>
      <td width="20%" style="text-align:center" hidden>{{$md->id_mk_ditawarkan}}</td>
      <td width="20%" style="text-align:center" hidden>{{$md->tahun->semester_periode}}</td>
      <td width="20%" style="text-align:center">{{$md->mk->nama_matkul}}</td>
    </tr>
     @empty
        <tr>
          <td colspan="6"><center>Belum ada mata kuliah yang ditawarkan</center></td>
        </tr>
    @endforelse
  </tbody>
</table>
  <a style="width: 10%; margin-bottom: 5px;" href="{{url('karyawan/krs-khs/mk-ditawarkan/'.$id_thn_akademik.'/edit')}}" class="btn btn-primary">Edit</a>
@endsection

@section('code-footer')

@endsection
