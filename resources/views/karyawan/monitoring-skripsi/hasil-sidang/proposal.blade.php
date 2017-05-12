@extends('adminlte::layouts.app')
@section('code-header')

@endsection

@section('htmlheader_title')
Hasil Sidang Proposal
@endsection

@section('contentheader_title')
Hasil Sidang Proposal
@endsection

@section('main-content')

<!-- <th>
<a href="#" class="btn btn-primary" role="button" style="margin-bottom: 15px;;">Tambah</a>
</th> -->

<div class="panel panel-default">
  


  <div class="panel-body">

	<table class="table table-hover">
    <thead>
      <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>KBK</th>
        <th>Judul Proposal</th>
        <th>Dosen Pembimbing 1</th>
        <th>Dosen Pembimbing 2</th>
        <th>Dosen Penguji</th>
        <th>Status Proposal</th>
        <th>Nilai</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th>081411631016</th>
        <th>Zafitra Ramadani</th>
        <th>Sistem Pendukung Keputusan</th>
        <th>Sistem Pakar Berbasis Web</th>
        <th>Dr. Hndradi Rimuljo</th>
        <th>Dr. Ira Puspitasari</th>
        <th>Indah Werdaningsih M.kom</th>
        <th>Lulus</th>
        <th>A</th>
        <th><a href="{{ url('Karyawan/view-tambah-hasil-sidang-proposal') }}" class="btn btn-warning">Upload Nilai</a></th>
        <th><a href="http://google.com" class="btn btn-danger">Hapus</a></th>
        <!-- <th><button type="button" class="btn btn-warning">Edit</button></th> -->
        <!-- <th><button type="button" class="btn btn-danger">Hapus</button></th> -->

      <!-- </tr>
      <tr>
        <th>081411631071</th>
        <th>Dewi Ayu</th>
        <th>Sistem Pendukung Keputusan</th>
        <th>Sistem Pakar Berbasis Web</th>
        <th>Dr. Hndradi Rimuljo</th>
        <th>Dr. Ira Puspitasari</th>
        <th>Indah Werdaningsih M.kom</th>
        <th>Lulus</th>
        <th>A</th>
        <th><button type="button" class="btn btn-warning">Edit</button></th>
        <th><button type="button" class="btn btn-danger">Hapus</button></th>

      </tr>
      <tr>
        <th>081411631089</th>
        <th>Sinta Maharani</th>
        <th>Sistem Pendukung Keputusan</th>
        <th>Sistem Pakar Berbasis Web</th>
        <th>Dr. Hndradi Rimuljo</th>
        <th>Dr. Ira Puspitasari</th>
        <th>Indah Werdaningsih M.kom</th>
        <th>Lulus</th>
        <th>A</th>
        <th><button type="button" class="btn btn-warning">Edit</button></th>
        <th><button type="button" class="btn btn-danger">Hapus</button></th>

      </tr> -->
    </tbody>
  </table>

</div>
</div>

  
 
@endsection
@section('code-footer')
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 

@endsection
