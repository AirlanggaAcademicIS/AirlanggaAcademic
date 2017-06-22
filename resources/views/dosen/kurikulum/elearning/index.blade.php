@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
E-Learning
@endsection

@section('contentheader_title')
E-Learning
@endsection

@section('main-content')
<!-- include summernote css/js-->
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
<div class="box box-danger">
  <div style="margin-bottom: 10px; margin-left: 10px; margin-top: 10px;">
    <!-- Href ini biar diklik masuk ke form tambah -->
    <a href="{{url('dosen\kurikulum\elearning\create')}}" type="button" class="btn btn-info btn-md" >
      <i class="fa fa-plus-square"></i> Upload File</a>
  </div>
  <div style="overflow: auto">
    <table id="myTable" class="table table-striped table-bordered" cellspacing="0">
      <thead>
        <tr>
          <th style="text-align:center">No.</th>
          <th style="text-align:center">Mata Kuliah</th>
          <th style="text-align:center">Judul</th>      
          <th style="text-align:center">Tanggal</th>
          <th style="text-align:center">File</th>
        </tr>
      </thead>
      <tbody>
       @forelse($elearning as $i => $el) 
        <tr>
          <td width="2%">{{ $i+1 }}</td>
          <td width="5%" style="text-align:center">{{$el->mk_ditawarkan_id}}</td>
          <td width="20%" style="text-align:left">{{$el->judul}}</td>
          <td width="20%" style="text-align:leftr">{!!App\Helpers\GeneralHelper::indonesianDateFormat($el->created_at)!!}</td>
          <td width="20%" style="text-align:leftr">{{$el->nama_file}}</td>
        </tr>
         @empty
            <tr>
              <td colspan="5"><center>Belum ada data</center></td>
            </tr>
        @endforelse
      </tbody>
    </table>
  </div>
</div>
@endsection

@section('code-footer')
<script type="text/javascript">
  $(document).ready(function(){
      $('#myTable').DataTable();
  });
</script>  
@endsection