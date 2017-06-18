@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Verifikasi Prestasi dan Penelitian Mahasiswa
@endsection

@section('contentheader_title')
Verifikasi Prestasi dan Penelitian Mahasiswa
@endsection

@section('main-content')
<!-- Kodingan HTML ditaruh di sini -->

<!-- Main content -->
    <section align="center" class="main-content">
      <!-- Small boxes (Stat box) -->
      <div align="center" class="row">
        <div align="center" class="col-lg-3 col-xs-6">
        <br>
        <br>
          <!-- small box -->
          <div align="center" margin class="small-box bg-aqua">
            <div align="center" class="inner">
              <p>{{$count_prestasi}} Prestasi</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="{{url('/karyawan/verifikasi/prestasi')}}" class="small-box-footer">Lihat <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <br>
        <br>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <p>{{$count_penelitian}} Penelitian</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="{{url('/karyawan/verifikasi/penelitian')}}" class="small-box-footer">Lihat <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
    	</div>
    </section>

@endsection

@section('code-footer')

@endsection