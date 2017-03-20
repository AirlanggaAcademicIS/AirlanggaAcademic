@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Input Jadwal
@endsection

@section('contentheader_title')
<!-- Nama konten -->
Input Jadwal
@endsection

@section('main-content')
<div class="box-body">
              <form role="form">
                <!-- text input -->
                <!-- select -->
                <div class="form-group">
                  <label>Tahun Ajaran</label>
                  <select class="form-control">
                    <option>Gasal 2015/2016</option>
                    <option>Genap 2015/2016</option>
                    <option>Gasal 2016/2017</option>
                    <option>Genap 2016/2017</option>
                  </select>

                <div class="form-group">
                  <label>Mata Kuliah</label>
                  <select class="form-control">
                    <option>Kalkulus</option>
                    <option>Pengantar Teknologi Informasi</option>
                    <option>Pengantar Manajemen Umum</option>
                    <option>Algoritma dan Pemrograman</option>
                  </select>
                
                <div class="form-group">
                  <label>Hari</label>
                  <select class="form-control">
                    <option>Senin</option>
                    <option>Selasa</option>
                    <option>Rabu</option>
                    <option>Kamis</option>
                    <option>Jum'at</option>
                    <option>Sabtu</option>
                    <option>Minggu</option>
                  </select>
                
                <!-- Select multiple-->
                <div class="form-group">
                  <label>Jam Kuliah</label>
                  <select multiple="" class="form-control">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Ruang</label>
                  <select class="form-control">
                    <option>R.101</option>
                    <option>R.102</option>
                    <option>R.301</option>
                    <option>R.302A</option>
                    <option>R.302B</option>
                  </select>
                </div>

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>


              </form>
            </div><!-- Kodingan HTML ditaruh di sini -->
@endsection

@section('code-footer')




@endsection