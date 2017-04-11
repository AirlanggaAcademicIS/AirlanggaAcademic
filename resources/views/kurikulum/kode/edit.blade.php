@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Biodata
@endsection

@section('contentheader_title')
Biodata
@endsection

@section('main-content')
<!-- include summernote css/js-->

<div class="col-md-6">

          <!-- /.box -->
          <!-- general form elements disabled -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Input Kategori Capaian Mata Kuliah</h3>
            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <form method="post" action="{{url('/kurikulum/kodecpmatkul/kode/'.$single_kode->id.'/edit')}}" enctype="multipart/form-data"  class="">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <!-- text input -->
                <div class="form-group">
                  <label>Nama Kategori</label>
                  <input type="text" class="form-control" id="nam_cp" value="{{$single_kode->nama_cp}}" name="nama_cp" placeholder="" required=>
                </div>
                <button type="submit" class="btn btn-primary" style="float:right;">Edit</button>
              </form>
            </div>
          </div>
</div>

        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Daftar Kategori Mata Kuliah</h3>
            </div>    
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table">
              <table id="myTable" class="table table-striped table-bordered" cellspacing="0">
                <tbody>
                <thead>
                <tr>
                  <th style="text-align:center">No.</th>
                  <th style="text-align:center">Nama Kategori Capaian Mata Kuliah</th>      
                  <th style="text-align:center"></th>
                </tr>
                </thead>
                <tbody>
                 @forelse($kode_cpmatkul as $i => $kod) 
                  <tr>
                    <td>{{ $i+1 }}</td>
                    <td width="60%" style="text-align:center">{{$kod->nama_cp}}</td>
                    <td width="35%" style="text-align:center" ><a onclick="return confirm('Anda yakin untuk menghapus biodata ini?');" href="{{url('/kurikulum/kodecpmatkul/kode/'.$kod->id.'/delete/')}}" class="btn btn-danger btn-xs">
                    <i class="fa fa-trash-o"></i> Hapus</a>

                      <a href="{{url('/kurikulum/kodecpmatkul/kode/'.$kod->id.'/edit/')}}" class="btn btn-success btn-xs">
                      <i class="fa fa-pencil-square-o"></i> Edit</a>
                      </td>
                  </tr>
                   @empty
                      <tr>
                        <td colspan="6"><center>Belum ada Kode</center></td>
                      </tr>
                  @endforelse
                </tbody>


              </tbody>
              </table>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        </div>

@endsection

@section('code-footer')

@endsection