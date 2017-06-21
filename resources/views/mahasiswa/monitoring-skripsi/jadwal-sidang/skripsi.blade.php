@extends('adminlte::layouts.app')
@section('code-header')

@endsection

@section('htmlheader_title')
Lihat Jadwal Sidang Skripsi
@endsection

@section('contentheader_title')
Lihat Jadwal Sidang Skripsi
@endsection

@section('main-content')

<div class="panel panel-info">
      <div class="panel-heading">Jadwal Sidang Skripsi</div>
      <div class="panel-body">
          
          <table data-toggle="table" id="tabel-jadwal-sidang-proposal"  data-search="true" data-locale="en-US" data-toolbar="#wrapper-tombol-jadwal-sidang-proposal" >

<thead>
      <tr>
        <th data-field="state" data-radio="true"></th>
        <th data-field="id_skripsi" data-visible="false">Id Skripsi</th>
        <th data-field="nim">NIM</th>
        <th data-field="nama_mhs">Nama</th>
        <th data-field="kbk">KBK</th>
        <th data-field="judul-proposal">Judul Skripsi</th>
        <!-- <th>Status Proposal</th> -->
        <th data-field="tgl-sidang">Tanggal Sidang</th>
        <th data-field="waktu-sidang">Waktu Sidang</th>
        <th data-field="tempat-sidang">Tempat Sidang</th>
        <th data-field="dosbing1">Dosen Pembimbing 1</th>
        <th data-field="dosbing2">Dosen Pembimbing 2</th>
        <th data-field="dosji">Dosen Penguji</th>
        <!-- <th></th> -->
        
      </tr>
    </thead>
    <tbody> 

   @for ($i = 0; $i < count($jadwal_sidang_skripsi); $i++)
                            <tr>
                                <!-- Task Name -->
                                <td></td>
                                <td>
                                  {{$jadwal_sidang_skripsi[$i]['id_skripsi']}}
                                </td>
                                <td>
                                    {{ $jadwal_sidang_skripsi[$i]['nim']}}
                                </td>
                                 <td>
                                    {{ $jadwal_sidang_skripsi[$i]['nama_mhs']}}
                                </td>
                                <td>
                                    <div>{{ $jadwal_sidang_skripsi[$i]['jenis_kbk']}}</div>
                                </td>
                                <td>
                                    <div>{{ $jadwal_sidang_skripsi[$i]['Judul']}}</div>
                                </td>
                                <td>
                                    <div>{{ $jadwal_sidang_skripsi[$i]['tgl_sidangpro']}}</div>
                                </td>
                                <td>
                                    <div>{{ $jadwal_sidang_skripsi[$i]['waktu_sidangpro']}}</div>
                                </td>
                                <td>
                                    <div>{{ $jadwal_sidang_skripsi[$i]['ruang']}}</div>
                                </td>
                                <td>
                                    <div>{{ $jadwal_sidang_skripsi[$i]['nama_dosen_pembimbing1']}}</div>
                                </td>
                                <td>
                                    <div>{{ $jadwal_sidang_skripsi[$i]['nama_dosen_pembimbing2']}}</div>
                                </td>
                                <td>
                                    <div>{{ $jadwal_sidang_skripsi[$i]['nama_dosen_penguji']}}</div>
                                </td>
                                <!-- <td class="table-text">
                                    <div>{{ $jadwal_sidang_skripsi[$i]['nim']}}</div>
                                </td> -->
                                </tr>
@endfor

      
    </tbody>
    
</table>

      </div>
    </div>

@endsection

