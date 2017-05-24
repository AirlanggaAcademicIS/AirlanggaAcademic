@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Input Ruang
@endsection

@section('contentheader_title')
<!-- Nama konten -->
Input Ruang
@endsection

@section('main-content')
<div class="box box-warning">

            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" method="post" action="{{url('/ruang/create')}}">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <!-- text input -->
                <div class="form-group">
                  <label>Nama Ruang</label>
                  <input type="text" class="form-control input-md" id="nama_ruang" name="nama_ruang" placeholder="Enter ... " required>
                </div>
                <div class="form-group">
                  <label>Kapasitas Ruang</label>
                  <input type="number" class="form-control input-md" id="kapasitas" name="kapasitas" placeholder="Enter ..." required="">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
            <!-- /.submit-->
            <div class="box-footer">
              </div>
                <div class="box-header">
              <h3 class="box-title">Data Ruang Kelas</h3>
            </div>
              <div style="overflow: auto">
<table id="myTable" class="table table-striped table-bordered" cellspacing="0">
  <thead>
    <tr>
      <th style="text-align:center">No</th>
      <th style="text-align:center">Ruang</th> 
      <th style="text-align:center">Kapasitas</th>
    </tr>
    </thead>
  <tbody>
   @forelse($ruang as $i => $r) 
    <tr>
      <td witdh="10%" style="text-align:center">{{$i+1}}</td>
      <td width="45%" style="text-align:center">{{$r->nama_ruang}}</td>
      <td width="45%" style="text-align:center">{{$r->kapasitas}}</td>
       
        </td>
    </tr>
     @empty
        <tr>
          <td colspan="6"><center>Belum ada KBK</center></td>
        </tr>
    @endforelse
  </tbody>
</table>
</div>


@endsection

@section('code-footer')




@endsection