@extends('adminlte::layouts.app')
@section('code-header')

@endsection

@section('htmlheader_title')
Dashboard
@endsection

@section('contentheader_title')
Jadwal Sidang Proposal
@endsection

@section('main-content')

<div class="row">

<div class="wrapper">
<button type="button" class="btn btn-primary">Tambah</button>
</div>

<div class="col-md-12">

<table class="table table-bordered" id="tabel-jadwal-sidang-proposal">

<thead>
      <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>KBK</th>
        <th>Judul Proposal</th>
        <!-- <th>Status Proposal</th> -->
        <th>Tanggal Sidang</th>
        <th>Waktu Sidang</th>
        <th>Tempat Sidang</th>
        <th>Dosen Pembimbing 1</th>
        <th>Dosen Pembimbing 2</th>
        <th>Dosen Penguji</th>

        <!-- <th>Verifikasi</th> -->
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>081411631044</td>
        <td>Kenny Everest K</td>
        <td>Sistem Pendukung Keputusan</td>
        <td>Aplikasi Android Untuk Pengenalan Plat Kendaraan dalam Tulisan Tangan Menggunakan Hidden Markov Model</td>
        
        <td>20 Juni 2017</td>
        <td>09:00</td>
        <td>Labkom 4</td>
        <!-- <td></td> -->
      </tr>
      
    </tbody>
	
</table>

</div>


</div>

@endsection
@section('code-footer')
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 

@endsection
