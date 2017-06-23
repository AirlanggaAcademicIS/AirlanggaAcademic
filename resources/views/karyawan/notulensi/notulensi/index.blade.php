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

 
<div class="box-body">
              <table id="data-table" class="table" style="width:100%">
                <thead>
                  <tr>
                  <th style="text-align:center">No</th>
                  <th style="text-align:center">Nama Rapat</th>
                  <th style="text-align:center">Waktu Pelaksanaan</th>
                  <th style="text-align:center">Tempat </th>
                  <th style="text-align:center">Agenda </th>
                  <th style="text-align:center">Deskripsi Rapat </th>
                  <th style="text-align:center">Hasil Rapat</th>
                  <th style="text-align:center">Status</th>
                  <th style="text-align:center">Action</th>
                  </tr>
                </thead>
                <tbody>
                @php 
                $x=1
                @endphp
                @forelse($notulensi as $i => $a) 
                <tr>
      <td>{{ $i+1 }}</td>
      <td width="30%" style="text-align:center">{{$a->nama_rapat}}</td>
      <td width="30%" style="text-align:center">{{$a->waktu_pelaksanaan}}</td>
      <td width="20%" style="text-align:center">{{$a->nama_ruang}}</td>
       <td width="30%" style="text-align:center">{{$a->agenda_rapat}}</td>
       <td width="20%" style="text-align:center">{{$a->deskripsi_rapat}}</td>
       <td><button type="button" class="btn btn-link"data-toggle="modal" data-target="#myModal{{$x}}">Detail</button></td>
      <!-- <td width="80%" style="text-align:center">{{$a->hasil_pembahasan }}</td> -->
       <td width="20%" style="text-align:center">
      @if($a->id_verifikasi==0)
      {{'Belum Terferivikasi'}}
      @else
      {{'Sudah Diferivikasi'}}
      @endif
      </td>
      <td width="60%" style="text-align:center" > <a href="{{url('/notulensi/'.$a->id_notulen.'/create/')}}" class="btn btn-warning btn-xs">
        <i class="fa fa-pencil-square-o"></i> Tambah Notulensi</a></td>

     
    </tr>
    <?PHP $x++;?>
     @empty
        <tr>
          <td colspan="6"><center>Belum ada Notulensi</center></td>
        </tr>
    @endforelse
  </tbody>
</table>
</div>

  @forelse($notulensi as $i => $b) 
 <div class="modal fade" id="myModal{{ $i+1 }}" tabindex="-1" role="dialog" 
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
          <label for="deskripsi_rapat"class="col-sm-2 control-label"></label>
              <div class="col-sm-11">
              <textarea class="form-control" rows="5" name="deskripsi_rapat" enable>{{$b->hasil_pembahasan}}
              </textarea>
            </div>
    </div>
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                 
            </div>
        </div>
</div>
</div>
</div>
@empty
@endforelse


@endsection

@section('code-footer')
<script type="text/javascript">
    $(document).ready(function(){
        $('#data-table').DataTable();
    });
</script>
@endsection