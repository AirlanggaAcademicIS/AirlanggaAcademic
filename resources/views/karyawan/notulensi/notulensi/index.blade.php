@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Notulensi
@endsection

@section('contentheader_title')
Notulensi Rapat
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
<div style="margin-bottom: 10px">
  <!-- Href ini biar diklik masuk ke form tambah -->
  <a href="{{url('/notulensi/create')}}" class="btn btn-primary btn-l">
              <i class="fa fa-plus"></i> Tambah Notulensi</a>
              </div>
 
<div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                 
                  <th style="text-align:center">No</th>
                  <th style="text-align:center">Nama Rapat</th>
                  <th style="text-align:center">Waktu Pelaksanaan</th>
                  <th style="text-align:center">Tempat </th>
                  <th style="text-align:center">Agenda </th>
                  <th style="text-align:center">Hasil Rapat</th>
                  <th style="text-align:center">Status</th>
                  <th style="text-align:center">Action</th>
                  <th style="text-align:center">Kirim</th>
                  </tr>
                </thead>
                @forelse($notulensi as $i => $a) 
                <tbody>
                <tr>
      <td>{{ $i+1 }}</td>
      <td width="30%" style="text-align:center">{{$a->nama_rapat}}</td>
      <td width="30%" style="text-align:center">{{$a->waktu_pelaksanaan}}</td>
      <td width="20%" style="text-align:center">{{$a->nama_ruang}}</td>
       <td width="30%" style="text-align:center">{{$a->agenda_rapat}}</td>
       <td><button type="button" class="btn btn-link"data-toggle="modal" data-target="#myModal">Detail</button>
      <!-- <td width="80%" style="text-align:center">{{$a->hasil_pembahasan }}</td> -->
       <td width="20%" style="text-align:center">
      @if($a->id_verifikasi==0)
      {{'Belum Terferivikasi'}}
      @else
      {{'Sudah Diferivikasi'}}
      @endif
      </td>
      <td width="60%" style="text-align:center" ><a onclick="return confirm('Anda yakin untuk menghapus jenis penilaian ini?');" href="{{url('/notulensi/'.$a->id_notulen.'/delete/')}}" class="btn btn-danger btn-xs">
        <i class="fa fa-trash-o"></i> Hapus</a>
        <a href="{{url('/notulensi/'.$a->id_notulen.'/edit/')}}" class="btn btn-warning btn-xs">
        <i class="fa fa-pencil-square-o"></i> Edit</a></td>
        <td class="btn btn-primary btn"></i> Kirim</a>
        </td>

        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" 
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Detail Hasil Pembahasan</h4>
        </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                <div class="form-group">
          <label for="deskripsi_rapat " class="col-sm-6 control-label"></label>
          <div class="col-md-8">
            <input type="text" class="form-control input-lg" id="deskripsi_rapat" name="deskripsi_rapat" placeholder="Hasil Rapat" value="{{$a->hasil_pembahasan}}" disabled>
          </div>
        </div>
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                 
            </div>
        </div>
    </div>
</div>
    </tr>
     @empty
        <tr>
          <td colspan="6"><center>Belum ada Notulensi</center></td>
        </tr>
    @endforelse
  </tbody>
</table>
</div>


@endsection

@section('code-footer')

@endsection