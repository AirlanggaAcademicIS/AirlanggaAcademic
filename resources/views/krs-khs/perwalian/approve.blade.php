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
              <h3 class="box-title">Detail KRS</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                <thead>
                <tr role="row">
                <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">No</th>
                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Kode MA</th>
                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Nama Mata Ajar</th>
                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">SKS</th>
                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Kelas</th>
                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Status</th></tr>
                </thead>
                <tbody>
                <tr role="row" class="odd">
                  <td class="sorting_1">1</td>
                  <td>AG001</td>
                  <td>Agama</td>
                  <td>2</td>
                  <td>322</td>
                 <!-- <td><a href="/approve1"><button type="button" class="btn btn-md btn-primary">Approve</button></a></td>-->
                 <div class="container">
  
  <!-- Trigger the modal with a button -->
  <td><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Approve</button></td>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Succes</h4>
        </div>
        <div class="modal-body">
          <p>Mata kuliah berhasil diapprove</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
                </tr><tr role="row" class="even">
                  <td class="sorting_1">2</td>
                  <td>PS001</td>
                  <td>PSI</td>
                  <td>3</td>
                  <td>319B</td>
                  <!-- <td><a href="/approve1"><button type="button" class="btn btn-md btn-primary">Approve</button></a></td>-->
                   <div class="container">
  
  <!-- Trigger the modal with a button -->
  <td><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Approve</button></td>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Succes</h4>
        </div>
        <div class="modal-body">
          <p>Mata kuliah berhasil diapprove</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
                 </tr><tr role="row" class="even">
                  <td class="sorting_1">3</td>
                  <td>KB001</td>
                  <td>KCB</td>
                  <td>3</td>
                  <td>323</td>
                  <!--<td><td><a href="/approve1"><button type="button" class="btn btn-md btn-primary">Approve</button></td>-->
                   <div class="container">
  
  <!-- Trigger the modal with a button -->
  <td><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Approve</button></td>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Succes</h4>
        </div>
        <div class="modal-body">
          <p>Mata kuliah berhasil diapprove</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
                </tbody>
                <tfoot>
                <tr>
                </tr>
                </tfoot>
                
              </table></div></div><div class="row"><div class="col-sm-5"></div></div></div>
            </div>

            <div align="center">
            <button type="button" class="btn btn-block-md-4 btn-success">Save</button>
            
            </div>
            <!-- /.box-body -->
          </div>
@endsection

@section('code-footer')




@endsection