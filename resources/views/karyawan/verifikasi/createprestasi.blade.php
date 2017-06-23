@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Verifikasi Prestasi
@endsection

@section('contentheader_title')
Verifikasi Prestasi
@endsection

@section('main-content')
<!-- Kodingan HTML ditaruh di sini -->
<!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tabel Prestasi Mahasiswa </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nim</th>
                  <th>Nama</th>
                  <th>Angkatan</th>
                  <th>Prestasi</th>
                  <th>Status Verifikasi</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @forelse($prestasi as $i => $pres)
                  <tr>

                  <td>{{$pres->nim_id}}</td>
                  <td>{{$pres->nama_mhs}}</td>
                  <td>{{$pres->angkatan}}</td>
                  <td>{{$pres->prestasi}}</td>
                  @if(($pres->ps_is_verified)== '0')
                  <td>Proses</td>
                  @elseif(($pres->ps_is_verified)== '1')
                  <td>Terverifikasi</td>
                  @elseif(($pres->ps_is_verified)=='2')
                  <td>Revisi</td>
                  @else
                  <td>Verifikasi Ditolak</td>
                  @endif          
                  <td> <button type="button" class="btn btn-default btn-block"><a href="{{url('/karyawan/verifikasi/'.$pres->id_prestasi.'/prestasi/')}}">View More</a></button> </td>
                </tr>
                @empty
                <tr>
                <td colspan="6"><center>Belum ada Prestasi Mahasiswa</center></td>
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


<script src="http://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('#example1').DataTable();
});
</script>

@endsection