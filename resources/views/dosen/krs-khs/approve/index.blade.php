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
                  @foreach($mhs as $h)
                  @if($m->nim == $h->nim_id)
                  {{$h->nama_mhs}}
                  @endif
                  @endforeach
                  </td>
                  <td>
                  <a style="width: 110%; margin-bottom: 5px;" onclick="return" href="{{url('/karyawan/kurikulum/mata-kuliah/delete/'.$mk->id_mk)}}" class="btn btn-danger btn-xs">
                  <i class="fa fa-trash-o"></i> Approve</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
              </table>
            </div>
          </div>
          <div class="row"><div class="col-sm-5"><div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10 of 4 entries</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="example2_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="example2_previous"><a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0">3</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="4" tabindex="0">4</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="5" tabindex="0">5</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="6" tabindex="0">6</a></li><li class="paginate_button next" id="example2_next"><a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0">Next</a></li></ul></div></div></div></div>
          </div>
</div>
@endsection

@section('code-footer')




@endsection