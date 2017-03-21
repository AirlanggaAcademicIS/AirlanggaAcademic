@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Fitur 
@endsection

@section('contentheader_title')
JUMLAH PESERTA RAPAT
@endsection

@section('main-content')
<!-- Isi Tablenya -->   
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Peserta</th>
                  <th>Jabatan</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>1</td>
                  <td>Badrus Zaman, S.Kom., M.Cs.</td>
                  <td>Kaprodi</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Ir. Dyah Herawatie, M.Si.</td>
                  <td>Dosen</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Endah Purwanti, S.Si, M.Kom.Eva Hariyanti, S.Si., MT.</td>
                  <td>Dosen</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Eva Hariyanti, S.Si., MT.Indra Kharisma, S. Kom., M.T.</td>
                  <td>Dosen</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Indra Kharisma, S. Kom., M.T.</td>
                  <td>Dosen</td>
                </tr>
              </table>
              <br>
              <div>
                <button type="button" class="btn bg-olive btn-sm">Cetak</button>
                <button type="button" class="btn bg-olive btn-sm">Ok</button>
              </div>
            </div>
@endsection

@section('code-footer')
	
@endsection