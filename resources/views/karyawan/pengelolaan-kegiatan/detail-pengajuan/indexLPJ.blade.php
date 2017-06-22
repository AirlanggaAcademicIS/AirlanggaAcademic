@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Detail Pengajuan Kegiatan
@endsection

@section('contentheader_title')
Detail Pengajuan Kegiatan
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
  
<div class="container">
  <div class="box box-primary">
      <div class="box-header with-border">
  
   @foreach($konfirmasiKegiatan as $i => $konfirmasi_kegiatan) 
<div class="form-group">
<div class="col-sm-offset-10 col-sm-2">
        <a href="{{url('karyawan/pengelolaan-kegiatan/dokumentasi/download/'.$konfirmasi_kegiatan->id_kegiatan.'/lpj')}}"  type="submit" class="btn btn-default">Download</a>
    </div>
    </div>
   <h4>Deskripsi Umum</h4>
  <form class="form-horizontal" action="{{url('karyawan/pengelolaan-kegiatan/konfirmasi-kegiatan/lpj')}}">
    <div class="form-group">
      <label class="control-label col-sm-2" for="nama">Nama Kegiatan</label>
      <div class="col-sm-10">
        <p class="form-control-static">{{$konfirmasi_kegiatan->nama}}</p>
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="kategori">Kategori Pengajuan Kegiatan</label>
      <div class="col-sm-10">
        <p class="form-control-static">
          <!-- kategori proposal -->
          @if($konfirmasi_kegiatan->konfirmasi_proposal == 0 || $konfirmasi_kegiatan->konfirmasi_proposal == 1 || $konfirmasi_kegiatan->konfirmasi_proposal == 2)
          @if($konfirmasi_kegiatan->konfirmasi_lpj == 0)
          Proposal Kegiatan
          @endif
          @endif

          <!-- kategori lpj -->
          @if($konfirmasi_kegiatan->konfirmasi_lpj == 1 || $konfirmasi_kegiatan->konfirmasi_lpj == 2 || $konfirmasi_kegiatan->konfirmasi_lpj == 3)
          @if($konfirmasi_kegiatan->konfirmasi_proposal == 1)
          Laporan Penanggung Jawaban Kegiatan
          @endif
          @endif
        </p>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="status">Status  Kegiatan</label>
      <div class="col-sm-10">
        <p class="form-control-static">
          <!-- status proposal sedang diproses -->
          @if($konfirmasi_kegiatan->konfirmasi_proposal == 0)
          @if($konfirmasi_kegiatan->konfirmasi_lpj == 0)
          Sedang Diproses
          @endif
          @endif

          <!-- status proposal telah dikonfirmasi -->
          @if($konfirmasi_kegiatan->konfirmasi_proposal == 1)
          @if($konfirmasi_kegiatan->konfirmasi_lpj == 0)
          Telah Dikonfirmasi
          @endif
          @endif

          <!-- status proposal ditolak -->
          @if($konfirmasi_kegiatan->konfirmasi_proposal == 2)
          @if($konfirmasi_kegiatan->konfirmasi_lpj == 0)
          Ditolak
          @endif
          @endif

           <!-- status LPJ sedang diproses -->
          @if($konfirmasi_kegiatan->konfirmasi_proposal == 1)
          @if($konfirmasi_kegiatan->konfirmasi_lpj == 1)
          Sedang Diproses
          @endif
          @endif

          <!-- status LPJ telah dikonfirmasi -->
          @if($konfirmasi_kegiatan->konfirmasi_proposal == 1)
          @if($konfirmasi_kegiatan->konfirmasi_lpj == 2)
          Telah Dikonfirmasi
          @endif
          @endif

          <!-- status LPJ ditolak -->
          @if($konfirmasi_kegiatan->konfirmasi_proposal == 1)
          @if($konfirmasi_kegiatan->konfirmasi_lpj == 3)
          Ditolak
          @endif
          @endif
        </p>
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="history">Latar Belakang Kegiatan</label>
      <div class="col-sm-10">
        <p class="form-control-static">{{$konfirmasi_kegiatan->history}}</p>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="mekanisme">Mekanisme Kegiatan</label>
      <div class="col-sm-10">
        <p class="form-control-static">{{$konfirmasi_kegiatan->mekanisme}}</p>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="tanggalPengajuan">Tanggal Pengajuan Kegiatan</label>
      <div class="col-sm-10">
        <p class="form-control-static">{{$konfirmasi_kegiatan->tglpengajuan}}</p>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="tanggalPelaksanaan">Tanggal Pelaksanaan Kegiatan</label>
      <div class="col-sm-10">
        <p class="form-control-static">{{$konfirmasi_kegiatan->tglpelaksanaan}}</p>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="ruangPengajuan">Ruang Pengajuan Kegiatan</label>
      <div class="col-sm-10">
        <p class="form-control-static">{{$konfirmasi_kegiatan->rpengajuan}}</p>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="ruangPelaksanaan">Ruang Pelaksanaan Kegiatan</label>
      <div class="col-sm-10">
        <p class="form-control-static">{{$konfirmasi_kegiatan->rpelaksanaan}}</p>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="poster">Publikasi Kegiatan</label>
      <div class="col-sm-10">
        <p class="form-control-static"><img src="{{URL::asset('/img/pengajuan/'.$konfirmasi_kegiatan->url_poster)}}" height="100px" width="100px" hspace="5px" vspace="2px"></p>
      </div>
    </div>
<div class="form-group">
          <div class="col-sm-10">
 
      <h4>Dokumentasi Laporan Penanggung Jawaban Kegiatan</h4>
      <table id="dokumentasiKegiatan" class="table table-striped table-bordered" cellspacing="0">
       <thead>
          <tr>
            <th width="5%" style="text-align:center">No</th>
            <th width="40%" style="text-align:center">Lesson Learned</th>      
            <th width="55%" style="text-align:center">Dokumentasi</th>
          </tr>
          </thead>
        <tbody>
         @forelse($lpj as $i => $dokumen)
          <tr>
            <td width="5%" style="text-align:center">{{$i+1}}</td>
            <td width="40%" style="text-align:center">{{$dokumen->lesson_learned}}</td>
            <td width="55%" style="text-align:center"><img src="{{URL::asset('/img/dokumentasi/'.$dokumen->url_foto)}}" height="100px" width="100px" hspace="5px" vspace="2px"></td>
          </tr>

    @empty
        <tr>
          <td colspan="6"><center>Belum ada dokumentasi</center></td>
        </tr>
    
      @endforelse
      
        </tbody>
      </table>

      </div>
      </div>

  <div class="form-group">
  <div class="col-sm-10">
       <h4>Struktur Panitia </h4>

       <table id="strukturPanitia" class="table table-striped table-bordered" cellspacing="0">
       <thead>
          <tr>
            <th width="10%" style="text-align:center">No</th>
            <th width="20%" style="text-align:center">Nama Panitia</th>      
            <th width="10%" style="text-align:center">Jabatan</th>
          </tr>
          </thead>
        <tbody>
         @forelse($struktur as $i => $s)
          <tr>
            <td width="10%" style="text-align:center">{{$i+1}}</td>
            <td width="20%" style="text-align:center">{{$s->mahasiswa['nama_mhs']}}</td>
            <td width="10%" style="text-align:center">{{$s->jabatan['jabatan']}}</td>
          </tr>

    @empty
        <tr>
          <td colspan="6"><center>Belum ada struktur panitia</center></td>
        </tr>
    
      @endforelse
    
        </tbody>
        </table>
      

        <h4>Rincian Rundown Proposal Kegiatan</h4>

       <table id="rincianRundownProposal" class="table table-striped table-bordered" cellspacing="0">
       <thead>
          <tr>
            <th width="10%" style="text-align:center">No</th>
            <th width="20%" style="text-align:center">Nama Rundown</th>      
            <th width="10%" style="text-align:center">Waktu Dimulai</th>
          </tr>
          </thead>
        <tbody>
         @forelse($rundownProposal as $i => $rincianRundown)
          <tr>
            <td width="10%" style="text-align:center">{{$i+1}}</td>
            <td width="20%" style="text-align:center">{{$rincianRundown->nama}}</td>
            <td width="10%" style="text-align:center">{{$rincianRundown->waktu}}</td>
          </tr>

    @empty
        <tr>
          <td colspan="6"><center>Belum ada rincian rundown Proposal</center></td>
        </tr>
    
      @endforelse
    
        </tbody>
        </table>
      
           <h4>Rincian Rundown Laporan Penanggung Jawaban Kegiatan</h4>
            <table id="rincianRundownLPJ" class="table table-striped table-bordered" cellspacing="0">
       <thead>
          <tr>
            <th width="10%" style="text-align:center">No</th>
            <th width="20%" style="text-align:center">Nama Rundown</th>      
            <th width="10%" style="text-align:center">Waktu Dimulai</th>
          </tr>
          </thead>
        <tbody>
         @forelse($rundownLPJ as $i => $rincianRundown)
          <tr>
            <td width="10%" style="text-align:center">{{$i+1}}</td>
            <td width="20%" style="text-align:center">{{$rincianRundown->nama}}</td>
            <td width="10%" style="text-align:center">{{$rincianRundown->waktu}}</td>
          </tr>

    @empty
        <tr>
          <td colspan="6"><center>Belum ada rincian rundown LPJ</center></td>
        </tr>
    
      @endforelse
    
        </tbody>
        </table>

        
        </div>
      </div>

    <div class="form-group">
          <div class="col-sm-10">
 
    <h4>Rincian Dana Proposal Kegiatan</h4>
 
    <table id="rincianDanaProposal" class="table table-striped table-bordered" cellspacing="0">
       <thead>
          <tr>
            <th width="10%" style="text-align:center">No</th>
            <th width="20%" style="text-align:center">Nama Dana</th>      
            <th width="10%" style="text-align:center">Kuantitas</th>     
            <th width="10%" style="text-align:center">Harga</th>
            <th width="10%" style="text-align:center">Sumber Dana</th>
          </tr>
          </thead>
        <tbody>
         @forelse($danaProposal as $i => $rincianDana)
          <tr>
            <td width="10%" style="text-align:center">{{$i+1}}</td>
            <td width="20%" style="text-align:center">{{$rincianDana->nama}}</td>
            <td width="10%" style="text-align:center">{{$rincianDana->kuantitas}}</td>
            <td width="10%" style="text-align:center">{{$rincianDana->harga}}</td>
            <td width="10%" style="text-align:center">{{$rincianDana->kategoriDana['jenis_dana']}}</td>
          </tr>

    @empty
        <tr>
          <td colspan="6"><center>Belum ada rincian dana Proposal</center></td>
        </tr>
    
      @endforelse
    
        </tbody>
        </table>

        <h4>Rincian Dana Laporan Penanggung Jawaban Kegiatan</h4>
          
    <table id="rincianDanaLPJ" class="table table-striped table-bordered" cellspacing="0">
       <thead>
          <tr>
            <th width="10%" style="text-align:center">No</th>
            <th width="20%" style="text-align:center">Nama Dana</th>      
            <th width="10%" style="text-align:center">Kuantitas</th>     
            <th width="10%" style="text-align:center">Harga</th>
            <th width="10%" style="text-align:center">Sumber Dana</th>
          </tr>
          </thead>
        <tbody>
         @forelse($danaLPJ as $i => $rincianDana)
          <tr>
            <td width="10%" style="text-align:center">{{$i+1}}</td>
            <td width="20%" style="text-align:center">{{$rincianDana->nama}}</td>
            <td width="10%" style="text-align:center">{{$rincianDana->kuantitas}}</td>
            <td width="10%" style="text-align:center">{{$rincianDana->harga}}</td>
            <td width="10%" style="text-align:center">{{$rincianDana->kategoriDana['jenis_dana']}}</td>
          </tr>

    @empty
        <tr>
          <td colspan="6"><center>Belum ada rincian dana LPJ</center></td>
        </tr>
    
      @endforelse
    
        </tbody>
        </table>

        </div>
      </div>

  

    <div class="form-group">        

     
          <div class="col-sm-offset-8 col-sm-2">
        <button type="submit" class="btn btn-default">Kembali</button>
      </div>
    </div>

  </form> 
  
  @endforeach
</div>
</div>
</div>
@endsection

@section('code-footer')

@endsection
