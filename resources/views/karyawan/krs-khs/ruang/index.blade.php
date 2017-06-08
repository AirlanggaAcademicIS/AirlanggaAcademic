@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Input ruang
@endsection

@section('contentheader_title')
Input ruang
@endsection

@section('main-content')
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
  <form role="form" method="post" action="{{url('karyawan/krs-khs/ruang/create')}}">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <!-- text input -->
                <div class="form-group">
                  <label>Nama Ruang</label>
                  <input type="text" class="form-control input-md" id="nama_ruang" name="nama_ruang" placeholder="Enter ... " required>
                </div>
                <div class="form-group">
                  <label>Kapasitas Ruang</label>
                  <input type="number" class="form-control input-md" id="kapasitas" name="kapasitas" placeholder="Enter ..." required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
</div>
<div style="overflow: auto">
<h3 class="box-title">Data Ruang Kelas</h3>
<table id="data-table" class="table table-striped table-bordered" cellspacing="0">
  <thead>
    <tr>
      <th style="text-align:center">No</th>
      <th style="text-align:center" hidden>ID</th>
      <th style="text-align:center">Ruang</th> 
      <th style="text-align:center">Kapasitas</th>
      <th style="text-align:center">Action</th>
    </tr>
    </thead>
  <tbody>
   @forelse($ruang as $i => $r) 
    <tr>
      <td style="text-align:center">{{$i+1}}</td>
      <td width="20%" style="text-align:center" hidden>{{$r->id_ruang}}</td>
      <td width="40%" style="text-align:center">{{$r->nama_ruang}}</td>
      <td width="40%" style="text-align:center">{{$r->kapasitas}}</td>
      <td style="text-align:center"><a href="{{url('karyawan/krs-khs/ruang/'.$r->id_ruang.'/edit')}}" class="btn btn-warning btn-xs">
                <i class="fa fa-pencil-square-o"></i> Edit</a>                
              
      </td>
    </tr>
     @empty
        <tr>
          <td colspan="6"><center>Ruang kosong</center></td>
        </tr>
    @endforelse
  </tbody>
</table>
</div>

@endsection

@section('code-footer')
<script type="text/javascript">
  $(document).ready(function(){
   $('#data-table').DataTable(); 
  });
  </script>

@endsection
