@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')

@endsection

@section('contentheader_title')

@endsection

@section('main-content')
<!-- include summernote css/js-->

<!-- INI TABEL SELURUH MATKUL -->
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
                  <th style="text-align:center">Nama Matkul</th>      
                  <th style="text-align:center"></th>
                </tr>
                </thead>

                <tbody>
                 @forelse($mata_kuliah as $i => $mk) 
                  @if(!in_array($mk->id_mk,$mk_terpilih))
                  <tr>
                    <td>{{ $i+1 }}</td>
                    <td width="60%" style="text-align:center">{{$mk->nama_matkul}}</td>
                    <td width="35%" style="text-align:center" >
                    <a href="{{url('karyawan/kurikulum/mk-prodi/pilih/'.$mk->id_mk)}}" class="btn btn-success btn-xs">
                    <i class="fa fa-pencil-square-o"></i> Pilih</a>
                    </td>
                  </tr>
                  @endif
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
          </div>
        </div>

<!-- INI TABEL MATUKUL TERPILIH -->
        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Daftar Mata Kuliah S1 Sistem Informasi</h3>
            </div>    
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table">
              <table id="myTable" class="table table-striped table-bordered" cellspacing="0">
                <tbody>

                <thead>
                <tr>
                  <th style="text-align:center">No.</th>
                  <th style="text-align:center">Nama Matkul</th>      
                  <th style="text-align:center"></th>
                </tr>
                </thead>

                <tbody>
                 @forelse($mkprodi as $i => $mk) 
                  <tr>
                    <td>{{ $i+1 }}</td>
                    <td width="60%  " style="text-align:center">{{$mk->nama_matkul}}</td>
                    <td width="35%" style="text-align:center" >
                      <a onclick="return confirm('Anda yakin untuk menghapus mata kuliah ini?');" href="{{url('karyawan/kurikulum/mk-prodi/delete/'.$mk->mk_id)}}" class="btn btn-danger btn-xs">
                    <i class="fa fa-trash-o"></i> Hapus</a>
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
          </div>
        </div>

@endsection

@section('code-footer')

@endsection