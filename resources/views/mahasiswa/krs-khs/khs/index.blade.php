@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Fitur 
@endsection

@section('contentheader_title')
KHS
@endsection

@section('main-content')
<section class="content-header">
      <select class="form-control" id="periode" name="periode">
                <option class="button">Tahun Akademik</option>
                @foreach($tahun as $i=>$thn)
                <option>{{$thn->semester_periode}}</option>
                @endforeach
                </select>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
            <!-- /.box-header -->

            <div class="box-body">
            <a href="{{url('mahasiswa/krs-khs/khs/cetak')}}" type="button" class="btn btn-info btn-flat" style="margin-bottom: 10px;">CETAK</a>
              <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12">

              <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">

                  <thead>
                    <tr>
                    <th style="text-align:center">No</th>
                    <th style="text-align:center">Mata Kuliah</th> 
                    <th style="text-align:center">SKS</th>
                    <th style="text-align:center">Nilai</th>
                    </tr>
                    </thead>
                  <tbody>
                    @foreach($khs as $i => $k) 
    <tr>
      <td witdh="10%" style="text-align:center">{{$i+1}}</td>
      <td width="50%" style="text-align:center">{{$k->MKDitawarkan->MK->nama_matkul}}</td>
      <td width="20%" style="text-align:center">{{$k->MKDitawarkan->MK->sks}}</td>
      <td width="20%" style="text-align:center">{{$k->nilai}}</td> 
    
      
      
    </tr>
    @endforeach
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