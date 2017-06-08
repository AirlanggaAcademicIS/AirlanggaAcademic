@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Fitur 
@endsection

@section('contentheader_title')
Fitur
@endsection

@section('main-content')
<div class="box">
            <div class="box-header">
              <h3 class="box-title">Approve KRS</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">	
              <div style="overflow: auto">
        <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                <thead>
                <tr>
                  <th style="text-align:center">No.</th>
                  <th style="text-align:center">Nim</th>
                  <th style="text-align:center">Nama Mahasiswa</th>
                  <th style="text-align:center">Approve</th>
                </tr>
                </thead> 
                <tbody>
                  @foreach($mahasiswa as $i => $m)
                <tr>
                  <td>{{$i+1}}</td>
                  <td>{{$m->nim}}</td>
                  <td>
                  {{$m->biodataMhs->nama_mhs}}
                  </td>
                  <td>
                  <a style="width: 100%; margin-bottom: 5px;" onclick="return" href="{{url('dosen/krs-khs/approve/'.$m->nim.'/create')}}" class="btn btn-primary">Approve</a>
                  </td>
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