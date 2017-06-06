@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Krs
@endsection

@section('contentheader_title')
Input Krs
@endsection

@section('main-content')
<!-- include summernote css/js-->
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
<!-- <form action="{{url('mahasiswa/krskhs/krs/create')}}" method="get">
<div class="col-md-3" style="padding: 0;">
<div style="overflow: auto">
  <select class="form-control" id="periode" name="periode">
      <option>Tahun Akademik</option>
      @foreach($tahun as $t) 
      <option value ="{{$t->id_thn_akademik}}">{{$t->semester_periode}}</option>
      @endforeach
  </select>
            <button class="btn btn-info" type="submit">Pilih</button>
</div>
</div>
</form>
<style>
  .form-group label{
    text-align: left !important;
  }
</style> -->
  <!-- Ini buat menampilkan notifikasi -->
  <div class="row">
    <div class="col-md-12">
        <div class="">
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <br>
            <ul class="nav nav-tabs nav-justified">
              <li class="active"><a data-toggle="tab" href="#AmbilKrs">Ambil Krs</a></li>           
              <li><a data-toggle="tab" href="#LihatKrs">Lihat Krs</a></li>
             </ul>

            <div class="tab-content">
              <div id="AmbilKrs" class="tab-pane fade in active">
              <h3>Ambil Krs</h3>
              <div style="overflow: auto">
                <table id="myTable" class="table table-striped table-bordered" cellspacing="0">
                <thead>
                  <tr>
                  <th style="text-align:center">No.</th>
                  <th style="text-align:center">Jenis MK</th>
                  <th style="text-align:center">Kode Mk</th>
                  <th style="text-align:center">Nama MK</th>
                  <th style="text-align:center">SKS</th>
                  <th style="text-align:center">Syarat SKS</th>
                  <th style="text-align:center">Action</th>
                  </tr>
                </thead>
                <tbody>
                 @forelse($krs as $i => $d) 
                  <tr>
                    <td>{{ $i+1 }}</td>
                    <td width="20%" style="text-align:center">{{$d->jenis_mk}}</td>
                    <td width="10%" style="text-align:center">{{$d->kode_matkul}}</td>
                    <td width="20%" style="text-align:center">{{$d->nama_matkul}}</td>
                    <td width="15%" style="text-align:center">{{$d->sks}}</td>
                    <td width="25%" style="text-align:center">{{$d->syarat_sks}}</td>
                    <td width="20%" style="text-align:center" ><a onclick="return confirm('Anda yakin untuk mengambil mata kuliah ini?');" href="{{url('/mahasiswa/krs-khs/krs/create/'.$d->id_mk)}}" class="btn btn-success btn-xs">
                      <i class="glyphicon glyphicon-book"></i>Take</a>
                      </td>
                  </tr>
                   @empty
                      <tr>
                        <td colspan="6"><center>Belum ada mata kuliah</center></td>
                      </tr>
                  @endforelse
                </tbody>
              </table>
              </div>
            </div>
            <div id="LihatKrs" class="tab-pane fade">
              <h3>Lihat Krs</h3>
              <div style="overflow: auto">
                <table id="myTable" class="table table-striped table-bordered" cellspacing="0">
                <thead>
                  <tr>
                  <th style="text-align:center">No.</th>
                  <th style="text-align:center">Kode Mk</th>
                  <th style="text-align:center">Nama MK</th>
                  <th style="text-align:center">SKS</th>
                  <th style="text-align:center">Status Approve</th>
                  <th style="text-align:center">Action</th>
                  </tr>
                </thead>
                <tbody>
                 @forelse($app as $j => $s) 
                  <tr>
                    <td>{{ $j+1 }}</td>
                    <td width="10%" style="text-align:center">{{$s->kode_matkul}}</td>
                    <td width="20%" style="text-align:center">{{$s->nama_matkul}}</td>
                    <td width="15%" style="text-align:center">{{$s->sks}}</td>
                    @if($s->is_approve ==0)
                    <td width="15%" style="text-align:center">Belum Diapprove</td>
                    @else
                    <td width="15%" style="text-align:center">Approved</td>
                    @endif
                    <td width="20%" style="text-align:center" ><a onclick="return confirm('Anda yakin untuk menghapus pilihan mata kuliah ini?');" href="{{url('/mahasiswa/krskhs/krs/delete/'.$s->mk_ditawarkan_id)}}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>Delete</a>
                      </td>
                  </tr>
                   @empty
                      <tr>
                        <td colspan="6"><center>Belum ada mata kuliah yang diambil</center></td>
                      </tr>
                  @endforelse
                </tbody>
              </table>
              </div>
            </div>
            <div>
                <h3 class="label"> <h3 class="label label-info" style="text-align:center">Total SKS :  </h3></h3>
                <h3 class="label"> <h3 class="label label-info" style="text-align:center">{{$sum}}</h3></h3>
                <br>
            </div>
            <div>
                <h3 class="label"> <h3 class="label label-info" style="text-align:center">IPS :  </h3></h3>
                <h3 class="label"> <h3 class="label label-info" style="text-align:center">{{$ips}}</h3></h3>
                <br>
            </div>
            <div>
                <h3 class="label"> <h3 class="label label-info" style="text-align:center">Limit SKS :  </h3></h3>
                <h3 class="label"> <h3 class="label label-info" style="text-align:center">{{$limitSks}}</h3></h3>
            </div>
            </div>
            </div>
                               
@endsection

@section('code-footer')


@endsection