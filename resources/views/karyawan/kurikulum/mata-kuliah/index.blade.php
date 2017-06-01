@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')

@endsection

@section('contentheader_title')

@endsection

@section('main-content')
<div class="flash-message" style="margin-left: -16px;margin-right: -16px; margin-top: 13px;">
  @foreach (['danger', 'warning', 'success', 'info'] as $msg)
    @if(Session::has('alert-' . $msg))
      <div class="alert alert-{{ $msg }}">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <p class="" style="border-radius: 0">{{ Session::get('alert-' . $msg) }}</p>
      </div>
      {!!Session::forget('alert-' . $msg)!!}
    @endif
  @endforeach
</div>
<div class="col-md-6">

          <!-- /.box -->
          <!-- general form elements disabled -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Input Mata Kuliah</h3>
            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <form method="post" action="{{url('karyawan/kurikulum/inputmatkul/create')}}" enctype="multipart/form-data"  class="">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <!-- text input -->
                  <div class="form-group">
                  <label >Kode Mata Kuliah</label>
                    <input type="text" class="form-control" id="kode_matkul" name="kode_matkul" placeholder="" required="">
                  <label style="margin-top: 10px">Nama Mata Kuliah</label>
                    <input type="text" class="form-control" id="nama_matkul" name="nama_matkul" placeholder="" required="">
                  <label style="margin-top: 10px">Jumlah SKS</label>
                    <input type="text" class="form-control" id="sks" name="sks" placeholder="" required="">
                  <label style="margin-top: 10px">Jenis Mata Kuliah</label>
                  <select class="form-control" name="jenis_mk_id">
                  <option value="">Jenis mata kuliah</option>
                  @foreach($jenis_mk as $i => $jns)
                    <option style="margin-top: 10px" value="{{$jns -> id}}">{{$jns -> jenis_mk}}</option>
                  @endforeach
                  </select>
                </div>
                <button type="submit" class="btn btn-primary" style="float:right;">Tambah</button>
              </form>
            </div>
          </div>
</div>

        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Daftar Mata Kuliah</h3>
            </div>    
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table">
              <table id="myTable" class="table table-striped table-bordered" cellspacing="0">
                <tbody>
                <thead>
                <tr>
                  <th style="text-align:center">No.</th>
                  <th style="text-align:center">Kode Mata Kuliah</th>
                  <th style="text-align:center">Nama Mata Kuliah</th>
                  <th style="text-align:center">Jumlah SKS</th>
                  <th style="text-align:center">Jenis Mata Kuliah</th>
                  <th style="text-align:center"></th>
                </tr>
                </thead>
                <tbody>
                 @forelse($input_matkul as $i => $inputmk) 
                  <tr>
                    <td style="text-align: center">{{ $i+1 }}</td>
                    <td width="20%" style="text-align:center">{{$inputmk->kode_matkul}}</td>
                    <td width="40%" style="text-align:center">{{$inputmk->nama_matkul}}</td>
                    <td width="20%" style="text-align:center">{{$inputmk->sks}}</td>
                    <td width="20%" style="text-align:center">{{$inputmk->jenis_mk}}</td>
                    <td width="35%" style="text-align:center" >
                      <a style="width: 70px;" onclick="return confirm('Anda yakin untuk menghapus mata kuliah ini?');" href="{{url('karyawan/kurikulum/inputmatkul/delete/'.$inputmk->id_mk)}}" class="btn btn-danger btn-xs">
                      <i class="fa fa-trash-o"></i>Hapus</a>
                      <a style="width: 70px; margin-top: 5px" href="{{url('karyawan/kurikulum/inputmatkul/edit/'.$inputmk->id_mk)}}" class="btn btn-success btn-xs">
                      <i class="fa fa-pencil-square-o"></i> Edit</a>
                    </td>
                  </tr>
                   @empty
                      <tr>
                        <td colspan="6"><center>Belum ada Mata Kuliah</center></td>
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