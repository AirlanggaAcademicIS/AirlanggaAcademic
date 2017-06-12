@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Memohon Ruangan
@endsection

@section('contentheader_title')
Memohon Ruangan
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

<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Peminjaman Ruangan</h3>
            </div>

<div style="padding:10px">
<table id="data-table" class="table table-striped table-bordered" cellspacing="0">
  <thead>
    <tr>
      <th style="text-align:center">No.</th>
      <th style="text-align:center">Perihal</th>
      <th style="text-align:center">NIM/NIP Peminjam</th>
      <th style="text-align:center">Ruang</th>
      <th style="text-align:center">Tanggal Peminjaman</th>
      <th style="text-align:center">Hari</th>
      <th style="text-align:center">Jam</th>
      <th style="text-align:center">Status</th>
    </tr>
    </thead>
  <tbody>
   @forelse($permohonan as $i=>$p) 
    <tr>
      <td width="5%" style="text-align:center">{{ $i+1 }}</td>
      <td width="20%" style="text-align:center">{{$p->nama}}</td>
      <td width="10%" style="text-align:center">{{$p->nim_nip}}</td>
      <td width="10%" style="text-align:center">{{$p->nama_ruang}}</td>
      <td width="10%" style="text-align:center">{{$p->tgl_pinjam}}</td>
      <td width="6%" style="text-align:center">{{$p->nama_hari}}</td>
      <td width="6%" style="text-align:center">{{$p->waktu}}</td>
      <td width="6%" style="text-align:center">
      @if($p->atribut_verifikasi==0)
      <span class="label label-info"><i class="fa fa-check-square-o" aria-hidden="true"></i> Pending</span>
      @elseif($p->atribut_verifikasi==1)
      <span class="label label-success"><i class="fa fa-check-square-o" aria-hidden="true"></i> Approved</span>
      @elseif($p->atribut_verifikasi==2)
      <span class="label label-danger"><i class="fa fa-window-close-o" aria-hidden="true"></i> Rejected</span>
      @endif
      </td>
    </tr>
     @empty
        <tr>
          <td colspan="9"><center>Belum ada peminjaman</center></td>
        </tr>
    @endforelse
  </tbody>
</table>
</div>
</div>

<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Form Permohonan Ruangan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form id="tambahPermohonanRuang" method="post" action="{{url('dosen/memohon-ruangan/create')}}" enctype="multipart/form-data"  class="form-horizontal">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <!-- Menampilkan input text biasa --> 
      <div class="box-body">
        <div class="form-group">
          <label for="ruang_id" class="col-sm-2 control-label">Ruang</label>
          <div class="col-md-8">
            <select name="ruang_id" required>
               @foreach($ruang as $r)
               <option value="{{$r->id_ruang}}">{{$r->nama_ruang}}</option>
               @endforeach
              </select>
          </div>
        </div>

        <div class="form-group">
          <label for="jam_id" class="col-sm-2 control-label">Jam</label>
          <div class="col-md-8">
            <select name="jam_id" required>
               @foreach($jam as $j)
               <option value="{{$j->id_jam}}">{{$j->waktu}}</option>
               @endforeach
              </select>
          </div>
        </div>

        <div class="form-group">
          <label for="sks" class="col-sm-2 control-label">SKS</label>
          <div class="col-md-8">
            <select name="sks" required>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              </select>
          </div>
        </div>

        <div class="form-group">
         <label for="tgl_pinjam" class="col-sm-2 control-label">Tanggal Peminjaman</label>
         <div class="col-md-8">
          <input type="text" class="form-control input-lg" id="datepicker" name="tgl_pinjam" placeholder="Tanggal Peminjaman" required>
         </div>
        </div>

        <div class="form-group">
         <label for="nama" class="col-sm-2 control-label">Perihal</label>
         <div class="col-md-8">
          <input type="text" class="form-control input-lg" id="nama" name="nama" placeholder="Perihal Peminjaman Ruangan" required>
         </div>
        </div>

        <div class="form-group text-center">
          <div class="col-md-8 col-md-offset-2">
          <button type="submit" class="btn btn-primary btn-lg">
              Confirm
            </button>
          </div>
        </div>
        </div>
      </form>
    </div>



@endsection

@section('code-footer')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
$( function() {
    var date = $('#datepicker').datepicker({ dateFormat: 'DD, yy-mm-dd' }).val();

  } );
  </script>
  <!-- <script src="{{asset('js/jquery.dataTables.min.js')}}"></script> -->
<script type="text/javascript"> 
    $(document).ready(function(){ 
        $('#data-table').DataTable(); 
    }); 
</script>
@endsection 