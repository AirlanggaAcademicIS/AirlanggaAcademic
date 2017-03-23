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
              <h3 class="box-title">Input Nilai Mahasiswa</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">	
	<div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                <thead>
                <tr role="row">
                	<th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="NIM: activate to sort column descending">NIM</th>
                	<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Nama Mahasiswa: activate to sort column ascending">Nama Mahasiswa</th>
                	<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Nilai: activate to sort column ascending">Input Nilai</th>
                	<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Bobot Penilaian: activate to sort column ascending">Nilai</th>
                	</tr>
                </thead> 
                <tbody>
                <tr role="row" class="odd">
                  <td class="sorting_1">081411631035</td>
                  <td>Ayu Fara Mega P</td>
                  <td><a href='/krs-khs/dosen/list_mahasiswa/input_nilai' class='button'>Input</a></td>
                  <td>B</td>
                </tr><tr role="row" class="even">
                  <td class="sorting_1">081411631003</td>
                  <td>Almira Hani</td>
                  <td><a href='/krs-khs/dosen/list_mahasiswa/input_nilai' class='button'>Input</a></td>
                  <td>AB</td>
                </tr><tr role="row" class="odd">
                  <td class="sorting_1">081411631021</td>
                  <td>Pandu Patra</td>
                  <td><a href='/krs-khs/dosen/list_mahasiswa/input_nilai' class='button'>Input</a></td>
                  <td>B</td>
                </tr><tr role="row" class="even">
                  <td class="sorting_1">081411631012</td>
                  <td>Fachruziah Wulan</td>
                  <td><a href='/krs-khs/dosen/list_mahasiswa/input_nilai' class='button'>Input</a></td>
                  <td>A</td>
                </tr></tbody>
              </table></div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10 of 4 entries</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="example2_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="example2_previous"><a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0">3</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="4" tabindex="0">4</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="5" tabindex="0">5</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="6" tabindex="0">6</a></li><li class="paginate_button next" id="example2_next"><a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0">Next</a></li></ul></div></div></div></div>
          </div>
</div>
@endsection

@section('code-footer')




@endsection