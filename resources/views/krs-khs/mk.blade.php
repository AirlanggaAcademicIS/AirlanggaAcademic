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
              <h3 class="box-title">Mata Kuliah</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">	
	<div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                <thead>
                <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Kode MK: activate to sort column descending">Kode MK</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Nama MK: activate to sort column ascending">Nama MK</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Silabus: activate to sort column ascending">Silabus</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Bobot Penilaian: activate to sort column ascending">Bobot Penilaian</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Penilaian: activate to sort column ascending">Penilaian</th></tr>
                </thead> 
                <tbody>
                <tr role="row" class="odd">
                  <td class="sorting_1">MAA101</td>
                  <td>Kalkulus</td>
                  <td><a href='#' class='button'>Silabus</a></td>
                  <td><a href='/krs-khs/mk/bobot' class='button'>Bobot</a></td>
                  <td><a href='/krs-khs/mk/input_nilai' class='button'>Nilai</a></td>
                </tr><tr role="row" class="even">
                  <td class="sorting_1">MAL102</td>
                  <td>Matriks dan Transformasi Linier</td>
                  <td><a href='#' class='button'>Silabus</a></td>
                  <td><a href='/krs-khs/mk/bobot' class='button'>Bobot</a></td>
                  <td><a href='/krs-khs/mk/input_nilai' class='button'>Nilai</a></td>
                </tr><tr role="row" class="odd">
                  <td class="sorting_1">MAS101</td>
                  <td>Statistika Dasar</td>
                  <td><a href='#' class='button'>Silabus</a></td>
                  <td><a href='/krs-khs/mk/bobot' class='button'>Bobot</a></td>
                  <td><a href='/krs-khs/mk/input_nilai' class='button'>Nilai</a></td>
                </tr><tr role="row" class="even">
                  <td class="sorting_1">MAL204</td>
                  <td>Matematika Diskrit</td>
                  <td><a href='#' class='button'>Silabus</a></td>
                  <td><a href='/krs-khs/mk/bobot' class='button'>Bobot</a></td>
                  <td><a href='/krs-khs/mk/input_nilai' class='button'>Nilai</a></td>
                </tr></tbody>
              </table></div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10 of 4 entries</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="example2_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="example2_previous"><a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0">3</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="4" tabindex="0">4</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="5" tabindex="0">5</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="6" tabindex="0">6</a></li><li class="paginate_button next" id="example2_next"><a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0">Next</a></li></ul></div></div></div></div>
          </div>
</div>
@endsection

@section('code-footer')




@endsection