@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Kartu Hasil Studi 
@endsection

@section('contentheader_title')
Kartu Hasil Studi
@endsection

@section('main-content')
<section class="content-header">
<form action="{{url('mahasiswa/krs-khs/khs/show')}}" method="get">
<div class="col-md-3" style="padding: 0;">
<div style="overflow: auto">
  <select class="form-control" id="periode" name="periode" required>
      <option value="">Tahun Akademik</option>
      @foreach($tahun as $t) 
      <option value ="{{$t->id_thn_akademik}}">{{$t->semester_periode}}</option>
      @endforeach
  </select>
  <div class="col-md-4">
            <button class="btn btn-info" type="submit">Pilih</button>
          </div>
</div>
<br>
<p><b>Tahun Akademik {{$tahun_pilih->semester_periode}}</b></p>
</div>
</form>
    </section>
    <br>
    <br>
    <br>
    <br>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
            <!-- /.box-header -->

            <div class="box-body">

            @if(empty($cek))
            <button type="button" disabled class="btn btn-info btn-flat" style="margin-bottom: 10px;">CETAK</button>
            @else
            <a href="{{url('mahasiswa/krs-khs/khs/'.$tahun_pilih->id_thn_akademik.'/cetak')}}" type="button" class="btn btn-info btn-flat" style="margin-bottom: 10px;">CETAK</a>
            @endif

              <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12">

              <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">

                  <thead>
                    <tr>
                    <th style="text-align:center">No</th>
                    <th style="text-align:center">Mata Kuliah</th> 
                    <th style="text-align:center">SKS</th>
                    <th style="text-align:center">Nilai</th>
                    <th style="text-align:center">Bobot</th>
                    </tr>
                    </thead>
                  <tbody>
    @forelse($khs as $i => $k) 
    <tr>
      <td witdh="10%" style="text-align:center">{{$i+1}}</td>
      <td width="50%" style="text-align:center">{{$k->nama_matkul}}</td>
      <td width="20%" style="text-align:center">{{$k->sks}}</td>
      <td width="20%" style="text-align:center"><a href="{{url('mahasiswa/krs-khs/khs/'.$k->mk_ditawarkan_id.'/'.$k->mhs_id.'/detail')}}" class='button'>{{$k->nilai}}</a></td> 
        @if($k->nilai=="A")
        <td width="20%" style="text-align:center">{{4 * $k->sks}} </td>
        @elseif($k->nilai=="AB")
        <td width="20%" style="text-align:center">{{3.5 * $k->sks}} </td>
        @elseif($k->nilai=="B")
        <td width="20%" style="text-align:center">{{3 * $k->sks}} </td>
        @elseif($k->nilai=="BC")
        <td width="20%" style="text-align:center">{{2.5 * $k->sks}} </td>
        @elseif($k->nilai=="C")
        <td width="20%" style="text-align:center">{{2 * $k->sks}} </td>
        @elseif($k->nilai=="D")
        <td width="20%" style="text-align:center">{{1 * $k->sks}} </td>
        @else
        <td width="20%" style="text-align:center">0</td>
        @endif     
    </tr>
    @empty
                      <tr>
                        <td colspan="6"><center>Belum ada mata kuliah</center></td>
                      </tr>
    @endforelse
                    </tbody>
                  </table>
                 
                </div>
          <!-- /.col -->
      </div>
        <!-- /.row -->
    </section>
    <!-- Content Header (Page footer) -->
    <section class="content-footer">
      
    </section>
    <!-- /.content -->
@endsection

@section('code-footer') 
@endsection