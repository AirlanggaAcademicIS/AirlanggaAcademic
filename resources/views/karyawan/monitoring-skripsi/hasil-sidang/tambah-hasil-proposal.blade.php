@extends('adminlte::layouts.app')
@section('code-header')

@endsection

@section('htmlheader_title')
Upload Nilai Sidang Proposal
@endsection

@section('contentheader_title')
Upload Nilai Sidang Proposal
@endsection

@section('main-content')

<div class="container">
  <!-- <h2>Vertical (basic) form</h2> -->
  <form action="/action_page.php">
    <div class="form-group">
      <label for="nim">NIM</label>
      <input type="int" class="form-control" id="nim" name="nim">
    </div>
    <div class="form-group">
      <label for="nama">Nama</label>
      <input type="text" class="form-control" id="nama"  name="nama">
    </div>
    <div class="form-group">
      <label for="kbk">KBK</label>
      <input type="text" class="form-control" id="kbk"  name="kbk">
    </div>
    <div class="form-group">
      <label for="judul-prop">Judul Proposal</label>
      <input type="text" class="form-control" id="judul-prop"  name="judul-prop">
    </div>
    <div class="form-group">
      <label for="dos-pembimbing-1">Dosen Pembimbing 1</label>
      <input type="text" class="form-control" id="dos-pembimbing-1"  name="dos-pembimbing-1">
    </div>
    <div class="form-group">
      <label for="dos-pembimbing-2">Dosen Pembimbing 2</label>
      <input type="text" class="form-control" id="dos-pembimbing-2"  name="dos-pembimbing-2">
    </div>
    <div class="form-group">
      <label for="dos-penguji">Dosen Penguji</label>
      <input type="text" class="form-control" id="dos-penguji"  name="dos-penguji">
    </div>
    <div class="form-group">
      <label for="status-prop">Status Proposal</label>
      <input type="text" class="form-control" id="status-prop"  name="status-prop">
    </div>
    <div class="form-group">
      <label for="nilai-prop">Nilai</label>
      <input type="int" class="form-control" id="nilai-prop"  name="nilai-prop">
    </div>
    
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
 
@endsection
@section('code-footer')
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 

@endsection
