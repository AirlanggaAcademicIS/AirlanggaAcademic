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
              <form role="form">
                <!-- text input -->
                <div class="form-group">
                  <label>Nama Ruang</label>
                  <input type="text" class="form-control" placeholder="Enter ...">
                </div>
                <div class="form-group">
                  <label>Kapasitas Ruang</label>
                  <input type="text" class="form-control" placeholder="Enter ...">
                </div>
              </form>
            </div>
            <!-- /.submit-->
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
</div>

<div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Ruang Kelas</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                <thead>
                <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Nomer</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Ruang</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Kapasitas</th>
                </thead>
                <tbody>
                
                <tr role="row" class="odd">
                  <td class="sorting_1">1</td>
                  <td>R.101</td>
                  <td>80 orang</td>
                </tr><tr role="row" class="even">
                  <td class="sorting_1">2</td>
                  <td>R.102</td>
                  <td>60 orang</td>
                <tr role="row" class="odd">
                  <td class="sorting_1">3</td>
                  <td>R.301</td>
                  <td>80 orang</td>
                </tr><tr role="row" class="even">
                  <td class="sorting_1">4</td>
                  <td>R.302A</td>
                  <td>60 orang</td>
                <tr role="row" class="odd">
                  <td class="sorting_1">5</td>
                  <td>R.302B</td>
                  <td>80 orang</td>
                </tr><tr role="row" class="even">
                  <td class="sorting_1">6</td>
                  <td>R.303</td>
                  <td>60 orang</td>
                <tr role="row" class="odd">
                  <td class="sorting_1">7</td>
                  <td>R.304</td>
                  <td>40 orang</td>
                </tr><tr role="row" class="even">
                  <td class="sorting_1">8</td>
                  <td>R.304</td>
                  <td>60 orang</td>
                <tr role="row" class="odd">
                  <td class="sorting_1">9</td>
                  <td>R.305</td>
                  <td>80 orang</td>
                </tr><tr role="row" class="even">
                  <td class="sorting_1">10</td>
                  <td>R.306</td>
                  <td>60 orang</td>
                <tr role="row" class="odd">
                  <td class="sorting_1">11</td>
                  <td>R.307</td>
                  <td>80 orang</td>
                </tr><tr role="row" class="even">
                  <td class="sorting_1">12</td>
                  <td>R.308</td>
                  <td>60 orang</td>
                <tr role="row" class="odd">
                  <td class="sorting_1">13</td>
                  <td>R.309</td>
                  <td>80 orang</td>
                </tr><tr role="row" class="even">
                  <td class="sorting_1">14</td>
                  <td>R.310</td>
                  <td>60 orang</td>
       
              </table></div></div>
          </div>
            <!-- /.box-body -->
          </div><!-- Kodingan HTML ditaruh di sini -->
@endsection

@section('code-footer')




@endsection