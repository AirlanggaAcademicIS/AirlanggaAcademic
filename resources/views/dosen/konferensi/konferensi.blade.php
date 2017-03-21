@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
<!-- Nama konten -->
konferensi Dosen
@endsection

@section('contentheader_title')
<!-- Nama konten -->
Konferensi Dosen
@endsection

@section('main-content')
<!-- Kodingan HTML ditaruh di sini -->
 <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
             
            <a href="{{url('dosen/konferensi/create')}}"><button type="button" class="btn btn-primary">Tambah Konferensi</button></a>
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
                  <th>Nama Konferensi</th>
                  <th>Pemateri</th>
                  <th>Tempat</th>
                  <th>Tanggal</th>
                  <th>Materi</th>
                  <th>File</th>
                  <th>Status</th>
                  <th> </th>
                 
                </tr>
                <tr>
                  <td>Tingkat Tinggi ASEAN G20</td>
                  <td>Kojiro Matsumoto</td>
                  <td>Switzerland</td>
                  <td>15-03-2016</td>
                  <td>Perdamaian Dunia</td>
                  <td></td>
                  <td><span class="label label-success">Approved</span></td>
                  <td><a href="{{url('dosen/konferensi/edit')}}"><button type="button" class="btn btn-info btn-xs pull">Edit</button></a>
                  <button type="button" class="btn btn-danger btn-xs">Delete</button></td>
                </tr>
                <tr>
                  <td>Kehidupan Seribu Pohon</td>
                  <td>Ryamizard</td>
                  <td>Makassar</td>
                  <td>11-05-2016</td>
                  <td>Kesehatan Lingkungan</td>
                  <td></td>
                  <td><span class="label label-success">Approved</span></td>
                  <td><a href="{{url('dosen/konferensi/edit')}}"><button type="button" class="btn btn-info btn-xs pull">Edit</button></a>
                  <button type="button" class="btn btn-danger btn-xs">Delete</button></td>
                </tr>
                <tr>
                  <td>Flat Earth Society Meeting</td>
                  <td>Gerome Miller</td>
                  <td>Brazil</td>
                  <td>20-06-2016</td>
                  <td>Kebenaran Sosial</td>
                  <td></td>
                  <td><span class="label label-warning">Process</span></td>
                  <td><a href="{{url('dosen/konferensi/edit')}}"><button type="button" class="btn btn-info btn-xs pull">Edit</button></a>
                  <button type="button" class="btn btn-danger btn-xs">Delete</button></td>
                </tr>
                 <tr>
                  <td>Pengaruh E-commerce Dalam Perkembangan Ekonomi Indonesia</td>
                  <td>Chairul Tandjung</td>
                  <td>Jakarta</td>
                  <td>25-08-2016</td>
                  <td>Bisnis Elektronik</td>
                  <td></td>
                  <td><span class="label label-info">Scheduled</span></td>
                  <td><a href="{{url('dosen/konferensi/edit')}}"><button type="button" class="btn btn-info btn-xs pull">Edit</button></a>
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