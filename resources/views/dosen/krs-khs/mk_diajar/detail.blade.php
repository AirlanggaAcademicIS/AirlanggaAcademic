@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Peserta MA 
@endsection

@section('contentheader_title')
Peserta MA
@endsection

@section('main-content')
<div class="box">
            <!-- /.box-header -->
            <div class="box-body">	
              <div style="overflow: auto">
        <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                <thead>
                <tr>
                  <th style="text-align:center">No.</th>
                  <th style="text-align:center">Nim</th>
                  <th style="text-align:center">Nama Mahasiswa</th>
                  <th style="text-align:center">Nilai</th>
                </tr>
                </thead> 
                <tbody>
                  @foreach($mk_diajar as $i => $m)
                <tr>
                  <td>{{$i+1}}</td>
                  <td>{{$m->nim_id}}</td>
                  <td>{{$m->nama_mhs}}</td>
                  <td width="20%" style="text-align:center"><a href="{{url('mahasiswa/krs-khs/khs/'.$m->mk_ditawarkan_id.'/'.$m->nim_id.'/detail')}}" class='button'>{{$m->nilai}}</a></td>
                </tr>
                @endforeach
              </tbody>
              </table>
            </div>
          </div>
    </div>
          </div>
</div>
@endsection

@section('code-footer')




@endsection