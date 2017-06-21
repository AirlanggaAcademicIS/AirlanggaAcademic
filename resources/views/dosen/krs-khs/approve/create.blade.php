@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Mata Kuliah yang Diambil
@endsection

@section('contentheader_title')
Mata Kuliah yang Diambil
@endsection

@section('main-content')
<!-- include summernote css/js-->

<div style="overflow: auto">
<table id="myTable" class="table table-striped table-bordered" cellspacing="0">
  <thead>
    <tr>
      <th style="text-align:center">Nomer</th>
      <th style="text-align:center">Mata Kuliah</th>
      <th style="text-align:center"></th>      
    </tr>
    </thead>
  <tbody>
   @forelse($matkul as $i => $r) 
    <tr>
      <td width="5%" style="text-align:center">{{ $i+1 }}</td>
      <td width="20%" style="text-align:center">{{$r->nama_matkul}}</td>
      <td width="20%" style="text-align:center">
        @if($r->is_approve==0)
        <form id="approve" method="post" action="{{url('dosen/krs-khs/approve/'.$mahasiswa->nim.'/'.$r->mk_ditawarkan_id.'/approve')}}" enctype="multipart/form-data"  class="form-horizontal">
         <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button type="submit" class="btn btn-primary">
              Approve
            </button>
        </form>  
        @else
        <form id="approve" method="post" action="{{url('dosen/krs-khs/approve/'.$mahasiswa->nim.'/'.$r->mk_ditawarkan_id.'/unapprove')}}" enctype="multipart/form-data"  class="form-horizontal">
         <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button type="submit" class="btn btn-danger">
              Unapprove
            </button>
        </form>
        @endif        
      </td>
    </tr>
     @empty
        <tr>
          <td colspan="6"><center>Belum ada Mata Kuliah</center></td>
        </tr>
    @endforelse
  </tbody>
</table>
</div>

@endsection

@section('code-footer')

@endsection
                  
