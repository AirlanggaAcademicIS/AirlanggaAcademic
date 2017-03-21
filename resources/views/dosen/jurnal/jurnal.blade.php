@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
<!-- Nama konten -->
Jurnal Dosen
@endsection

@section('contentheader_title')
<!-- Nama konten -->
Jurnal Dosen
@endsection

@section('main-content')
<!-- Kodingan HTML ditaruh di sini -->
 <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
             
            <a href="{{url('dosen/jurnal/create')}}"><button type="button" class="btn btn-primary">Tambah jurnal</button></a>
              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-bordered">
                <tr class="info">
                  <th>Nama jurnal</th>
                  <th>Penulis ke</th>
                  <th>Volume</th>
                  <th>Halaman Jurnal</th>
                  <th>Bidang</th>
                  <th>File</th>
                  <th>Tanggal</th>
                  <th>Status</th>
                  <th> <td>
                 
                </tr>
                <tr>
                  <td>A Medical Decision Support System for Ubiquitous Healthcare Diagnosis System</td>
                  <td>1</td>
                  <td>23</td>
                  <td>117-123</td>
                  <td>Sistem Informasi</td>
                  <td></td>
                  <td>11-03-2017</td>
                  <td><span class="label label-success">Approved</span></td>
                  <td><a href="{{url('dosen/jurnal/edit')}}"><button type="button" class="btn btn-info btn-xs pull">Edit</button>
                  </a>
                  <button type="button" class="btn btn-danger btn-xs">Delete</button></td>
                </tr>
                <tr>
                  <td>Decision Support System to Majoring High School Student Using Simple Addictive Weighting Method</td>
                  <td>3</td>
                  <td>122</td>
                  <td>200-215</td>
                  <td>Sistem Informasi</td>
                  <td></td>
                  <td>12-02-2017</td>
                  <td><span class="label label-warning">Process</span></td>
                  <td><a href="{{url('dosen/jurnal/edit')}}"><button type="button" class="btn btn-info btn-xs pull">Edit</button>
                  </a>
                  <button type="button" class="btn btn-danger btn-xs">Delete</button></td>
                </tr>
                <tr>
                  <td>Design and natural science research on information technology</td>
                  <td>2</td>
                  <td>179</td>
                  <td>73-81</td>
                  <td>Sistem Informasi</td>
                  <td></td>
                  <td>23-01-2017</td>
                  <td><span class="label label-success">Approved</span></td>
                  <td><a href="{{url('dosen/jurnal/edit')}}"><button type="button" class="btn btn-info btn-xs pull">Edit</button>
                  </a>
                  <button type="button" class="btn btn-danger btn-xs">Delete</button></td>
                </tr>
                <tr>
                  <td>Designing Enterprise System: Design Science Research on Enterprise Engineering and Design</td>
                  <td>1</td>
                  <td>9</td>
                  <td>130-142</td>
                  <td>Sistem Informasi</td>
                  <td></td>
                  <td>23-08-2016</td>
                  <td><span class="label label-success">Approved</span></td>
                  <td><a href="{{url('dosen/jurnal/edit')}}"><button type="button" class="btn btn-info btn-xs pull">Edit</button>
                  </a>
                  <button type="button" class="btn btn-danger btn-xs">Delete</button></td>
                </tr>
                <tr>
                  <td>Housing Health and Safety Decision Support System with Augmented Reality</td>
                  <td>5</td>
                  <td>12</td>
                  <td>188-195</td>
                  <td>Sistem Informasi</td>
                  <td></td>
                  <td>03-12-2016</td>
                  <td><span class="label label-warning">Process</span></td>
                  <td><a href="{{url('dosen/jurnal/edit')}}"><button type="button" class="btn btn-info btn-xs pull">Edit</button>
                  </a>
                  <button type="button" class="btn btn-danger btn-xs">Delete</button></td>
                </tr>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
@endsection

@section('code-footer')




@endsection