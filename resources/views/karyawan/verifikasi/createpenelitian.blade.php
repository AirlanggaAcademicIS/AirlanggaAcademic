@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Verifikasi Penelitian
@endsection

@section('contentheader_title')
Verifikasi Penelitian
@endsection

@section('main-content')
<!-- Kodingan HTML ditaruh di sini -->
<!-- /.box -->
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

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tabel Penelitian Mahasiswa</h3>
            </div>

          
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  
                  <th>Nim</th>
                  <th>Nama</th>
                  <th>Angkatan</th>
                  <th>Judul Penelitian</th>
                  <th>Status Verifikasi</th>
                  <th>Aksi</th>
                  
                </tr>
                </thead>
                <tbody>
                  @forelse($penelitian as $i => $pen)
                  <tr>
                  <td>{{$pen->nim_id}}</td>
                  <td>{{$pen->peneliti}}</td>
                  <td>{{$pen->angkatan}}</td>
                  <td>{{$pen->judul}}</td>
                  @if(($pen->is_verified)== '0')
                  <td>Proses</td>
                  @elseif(($pen->is_verified)== '1')
                  <td>Terverifikasi</td>
                  @elseif(($pen->is_verified)=='2')
                  <td>Revisi</td>
                  @else
                  <td>Verifikasi ditolak</td>
                  @endif
                  <td> <button type="button" class="btn btn-default btn-block"><a href="{{url('/karyawan/verifikasi/'.$pen->kode_penelitian.'/penelitian/')}}">View More</a></button> </td>
                </tr>
                @empty
                <tr>
                <td colspan="6"><center>Belum ada Penelitian</center></td>
                </tr>
                @endforelse
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
@endsection

@section('code-footer')

<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></script>

<script src="http://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('#example1').DataTable();
});
</script>

@endsection