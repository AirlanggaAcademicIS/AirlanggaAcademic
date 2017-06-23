@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Mata Kuliah yang Diajar
@endsection

@section('contentheader_title')
Mata Kuliah yang Diajar
@endsection

@section('main-content')
<!-- include summernote css/js-->


<div style="overflow: auto">
<table id="myTable" class="table table-striped table-bordered" cellspacing="0">
  <thead>
    <tr>
      <th style="text-align:center">Nomer</th>
      <th style="text-align:center">Mata Kuliah</th>
      <th style="text-align:center">Bobot Nilai</th>      
      <th style="text-align:center">Nilai</th>
      <th style="text-align:center">Detail</th>
    </tr>
    </thead>
  <tbody>
   @forelse($mk_diajar as $i => $r) 
    <tr>
      <td width="5%" style="text-align:center">{{ $i+1 }}</td>
      <td width="20%" style="text-align:center">{{$r->nama_matkul}}</td>
      <td width="20%" style="text-align:center"><a href="{{url('dosen/krs-khs/'.$r->id_mk_ditawarkan.'/bobot_nilai')}}" class='button'>Bobot</a></td>
      <td width="20%" style="text-align:center"><a href="{{url('dosen/krs-khs/nilai/'.$r->id_mk_ditawarkan.'/upload')}}" class='button'>Upload Nilai</a></td>
      <td width="20%" style="text-align:center"><a href="{{url('dosen/krs-khs/mk_diajar/'.$r->id_mk_ditawarkan.'/detail')}}" class='button'>Detail</a></td>
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
                  
