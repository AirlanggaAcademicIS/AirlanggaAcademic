@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
<!-- Nama konten -->
Nama konten 
@endsection

@section('contentheader_title')
<!-- Nama konten -->
Nama konten
@endsection

@section('main-content')
<<<<<<< HEAD
<div class="col-md-3">

              <div id="external-events">
              	<div class="external-event ui-draggable ui-draggable-handle" style="background-color: rgb(0, 31, 63); border-color: rgb(0, 31, 63); color: rgb(255, 255, 255); position: relative;">wrgws</div>
              	<div class="external-event ui-draggable ui-draggable-handle" style="background-color: rgb(114, 175, 210); border-color: rgb(114, 175, 210); color: rgb(255, 255, 255); position: relative;">dg</div>
                <div class="external-event bg-green ui-draggable ui-draggable-handle" style="position: relative; z-index: auto; width: 230px; right: auto; height: 30px; bottom: auto; left: 0px; top: 0px;">Lunch</div>
                <div class="external-event bg-yellow ui-draggable ui-draggable-handle" style="position: relative;">Go home</div>
                <div class="external-event bg-aqua ui-draggable ui-draggable-handle" style="position: relative; z-index: auto; width: 230px; right: auto; height: 30px; bottom: auto; left: 0px; top: 0px;">Do homework</div>
                <div class="external-event bg-light-blue ui-draggable ui-draggable-handle" style="position: relative;">Work on UI design</div>
                <div class="external-event bg-red ui-draggable ui-draggable-handle" style="position: relative; z-index: auto; width: 230px; right: auto; height: 30px; bottom: auto; left: 0px; top: 0px;">Sleep tight</div>
              </div>

              <div class="input-group">
                <div class="input-group-btn">
                  <button id="add-new-event" type="button" class="btn btn-primary btn-flat">Add</button>
                </div>
                <!-- /btn-group -->
              </div>
 
        </div>

<script>
  $(function () {
  	$("#add-new-event").click(function (e) {
      e.preventDefault();
     
      //Create events
      var event = $("<div />");
      event.addClass("external-event");
      event.html(val);
      $('#external-events').prepend(event);
    });
  });
</script>

=======
<<<<<<< HEAD
<div class="content-wrapper" style="min-height: 916px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tables
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Hover Data Table</h3>
            </div>
            <!-- /.box-header -->
            </tr>
                </thead>
                <tbody>
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                <tr role="row" class="odd">
                  <td class="">Gecko</td>
                  <td class="sorting_1">Seamonkey 1.1</td>
                  <td class="">Win 98+ / OSX.2+</td>
                  <td>1.8</td>
                  <td>A</td>
                </tr><tr role="row" class="even">
                  <td class="">Webkit</td>
                  <td class="sorting_1">Safari 3.0</td>
                  <td class="">OSX.4+</td>
                  <td>522.1</td>
                  <td>A</td>
                </tr><tr role="row" class="odd">
                  <td class="">Webkit</td>
                  <td class="sorting_1">Safari 2.0</td>
                  <td class="">OSX.4+</td>
                  <td>419.3</td>
                  <td>A</td>
                </tr><tr role="row" class="even">
                  <td class="">Webkit</td>
                  <td class="sorting_1">Safari 1.3</td>
                  <td class="">OSX.3</td>
                  <td>312.8</td>
                  <td>A</td>
                </tr><tr role="row" class="odd">
                  <td class="">Webkit</td>
                  <td class="sorting_1">Safari 1.2</td>
                  <td class="">OSX.3</td>
                  <td>125.5</td>
                  <td>A</td>
                </tr><tr role="row" class="even">
                  <td class="">Webkit</td>
                  <td class="sorting_1">S60</td>
                  <td class="">S60</td>
                  <td>413</td>
                  <td>A</td>
                </tr><tr role="row" class="odd">
                  <td class="">Misc</td>
                  <td class="sorting_1">PSP browser</td>
                  <td class="">PSP</td>
                  <td>-</td>
                  <td>C</td>
                </tr><tr role="row" class="even">
                  <td class="">Presto</td>
                  <td class="sorting_1">Opera for Wii</td>
                  <td class="">Wii</td>
                  <td>-</td>
                  <td>A</td>
                </tr><tr role="row" class="odd">
                  <td class="">Presto</td>
                  <td class="sorting_1">Opera 9.5</td>
                  <td class="">Win 88+ / OSX.3+</td>
                  <td>-</td>
                  <td>A</td>
                </tr><tr role="row" class="even">
                  <td class="">Presto</td>
                  <td class="sorting_1">Opera 9.2</td>
                  <td class="">Win 88+ / OSX.3+</td>
                  <td>-</td>
                  <td>A</td>
                </tr></tbody>
                <tfoot>
                <tr><th rowspan="1" colspan="1">Rendering engine</th><th rowspan="1" colspan="1">Browser</th><th rowspan="1" colspan="1">Platform(s)</th><th rowspan="1" colspan="1">Engine version</th><th rowspan="1" colspan="1">CSS grade</th></tr>
                </tfoot>
              </table></div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="example2_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="example2_previous"><a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0">3</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="4" tabindex="0">4</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="5" tabindex="0">5</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="6" tabindex="0">6</a></li><li class="paginate_button next" id="example2_next"><a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0">Next</a></li></ul></div></div></div></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="example1_length"><label>Show <select name="example1_length" aria-controls="example1" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-6"><div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="example1"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                <thead>
                <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 121px;">Rendering engine</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 152px;">Browser</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 133px;">Platform(s)</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 101px;">Engine version</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 71px;">CSS grade</th></tr>
                </thead>
                <tbody>
                </tr><tr role="row" class="odd">
                  <td class="sorting_1">Gecko</td>
                  <td>Netscape Navigator 9</td>
                  <td>Win 98+ / OSX.2+</td>
                  <td>1.8</td>
                  <td>A</td>
                </tr><tr role="row" class="even">
                  <td class="sorting_1">Gecko</td>
                  <td>Mozilla 1.0</td>
                  <td>Win 95+ / OSX.1+</td>
                  <td>1</td>
                  <td>A</td>
                </tr></tbody>
                <tfoot>
                <tr><th rowspan="1" colspan="1">Rendering engine</th><th rowspan="1" colspan="1">Browser</th><th rowspan="1" colspan="1">Platform(s)</th><th rowspan="1" colspan="1">Engine version</th><th rowspan="1" colspan="1">CSS grade</th></tr>
                </tfoot>
              </table></div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="example1_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0">3</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0">4</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0">5</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0">6</a></li><li class="paginate_button next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0">Next</a></li></ul></div></div></div></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
=======
<!-- Kodingan HTML ditaruh di sini -->
>>>>>>> de4bfccffc14a8ee68cf1015ed13a93bcb7be818
>>>>>>> ea7138f61680371be6328adb72ddcdcad47c69a9
@endsection

@section('code-footer')




@endsection