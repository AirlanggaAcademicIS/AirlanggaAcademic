@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Input Dana Proposal Kegiatan
@endsection

@section('contentheader_title')
Input Dana Proposal Kegiatan
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

<!--Tabel Proposal-->
<div style="overflow: auto">
<h2>Tabel Rincian Dana</h2>

<div>

 <a data-toggle="modal" data-target="#modalRincianDana{{$kegiatan->id_kegiatan}}" class="btn btn-danger btn-xs">
          <i class="fa fa-trash-o"></i> Tambah Dana</a>       
   <!-- Modal Proposal-->
  <div class="modal fade" id="modalRincianDana{{$kegiatan->id_kegiatan}}" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
   <form id="rincianDanaTabel" method="post" action="{{url('mahasiswa/pengelolaan-kegiatan/rincian-dana/'.$kegiatan->id_kegiatan.'/tambahDanaEdit')}}" enctype="multipart/form-data"  class="form-horizontal">
                   <input type="hidden" name="_token" value="{{ csrf_token() }}">

      <div class="modal-content">
        <div class="modal-header" class="col-sm-12">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Input Rincian Dana</h4>
        </div>
      

      
      <div class="col-sm-12 modal-body">
          <label for="mahasiswa" class="col-sm-4">Nama Barang</label>
          <div class="col-sm-8">

             <input type="text" class="form-control input-lg" id="nama" name="nama" placeholder="Masukkan Nama Barang" required>
             </div>
         </div>


      <div class="col-sm-12 modal-body">
          <label for="mahasiswa" class="col-sm-4">Kuantitas Barang</label>
          <div class="col-sm-8">
             <input type="number" class="form-control input-lg" id="jumlah" name="jumlah" placeholder="Masukkan Kuantitas Barang" required>
             </div>
         </div>


      <div class="col-sm-12 modal-body">
          <label for="mahasiswa" class="col-sm-4">Harga Barang</label>
             <div class="col-sm-8">
          <input type="number" class="form-control input-lg" id="harga" name="harga" placeholder="Masukkan Harga" required>
         </div>
         </div>

        <div class="col-sm-12 modal-body">
          <label for="mahasiswa" class="col-sm-4">Sumber Dana</label>
             <div class="col-sm-8">
          <select class="form-control input-sm" name="sumberDana" id="sumberDana">
            @foreach( $sumber as $data )

            <option value="{{ $data->id_sumber }}"> {{ $data->jenis_dana }}</option>

            @endforeach
          </select>
          </div>
         </div>
         <div class="modal-footer" class="col-sm-12">
          <button onclick="return confirm('Apakah anda yakin untuk menambahkan dana ini?');" type="submit" class="btn btn-success" >Simpan</button>
        </div>
      </div>
    
    </form>

    </div>
  </div>

<table id="struturPanitiaTabel" class="table table-striped table-bordered" cellspacing="0">
  <thead>
    <tr>
      <th width="10%" style="text-align:center">No</th>
      <th width="20%" style="text-align:center">Nama Barang</th>      
      <th width="10%" style="text-align:center">Jumlah</th>     
      <th width="10%" style="text-align:center">Harga</th>     
      <th width="10%" style="text-align:center">Sumber</th>  
      <th width="10%" style="text-align:center">Tindakan</th>
    </tr>
    </thead>
  <tbody>
   @forelse($rinciandana as $i => $dana) 
    <tr>
      <td width="10%" style="text-align:center">{{$i+1}}</td>
      <td width="20%" style="text-align:center">{{$dana->nama}}</td>
      <td width="10%" style="text-align:center">{{$dana->kuantitas}}</td>
      <td width="10%" style="text-align:center">{{$dana->harga}}</td>
      <td width="10%" style="text-align:center">{{$dana->kategoriDana['jenis_dana']}}</td>
      <td width="10%" style="text-align:center">
         <a data-toggle="modal" data-target="#modalRincianDana{{$dana->id_rdana}}" class="btn btn-danger btn-xs">
          <i class="fa fa-trash-o"></i> Edit Dana</a> 
           <!-- Modal Proposal-->
  <div class="modal fade" id="modalRincianDana{{$dana->id_rdana}}" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
   <form id="rincianDanaTabel" method="post" action="{{url('mahasiswa/pengelolaan-kegiatan/rincian-dana/'.$dana->id_rdana.'/tambahDanaEdit2')}}" enctype="multipart/form-data"  class="form-horizontal">
                   <input type="hidden" name="_token" value="{{ csrf_token() }}">

      <div class="modal-content">
        <div class="modal-header" class="col-sm-12">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Input Rincian Dana</h4>
        </div>
      

      
      <div class="col-sm-12 modal-body">
          <label for="mahasiswa" class="col-sm-4">Nama Kegiatan</label>
          <div class="col-sm-8">
                  <select class="form-control input-sm" name="kegiatan" id="kegiatan" value="{{$kegiatan->id_kegiatan}}">
            
            <option value="{{$kegiatan->id_kegiatan}}"> {{$kegiatan->nama}}</option>
            
          </select>
             </div>
         </div>
    
     <div class="col-sm-12 modal-body">
          <label for="mahasiswa" class="col-sm-4">Nama Dana</label>
          <div class="col-sm-8">
             <input type="text" class="form-control input-lg" id="nama" name="nama" value="{{$dana->nama}}" placeholder="Masukkan Kuantitas Dana" required>
             </div>
         </div>

      <div class="col-sm-12 modal-body">
          <label for="mahasiswa" class="col-sm-4">Kuantitas Dana</label>
          <div class="col-sm-8">
             <input type="number" class="form-control input-lg" id="jumlah" name="jumlah" value="{{$dana->kuantitas}}" placeholder="Masukkan Kuantitas Dana" required>
             </div>
         </div>


      <div class="col-sm-12 modal-body">
          <label for="mahasiswa" class="col-sm-4">Harga Dana</label>
             <div class="col-sm-8">
          <input type="number" class="form-control input-lg" id="harga" name="harga" value="{{$dana->harga}}" placeholder="Masukkan Harga" required>
         </div>
         </div>

        <div class="col-sm-12 modal-body">
          <label for="mahasiswa" class="col-sm-4">Sumber Dana</label>
             <div class="col-sm-8">
          <select class="form-control input-sm" name="sumberDana" value="{{$dana->kategoriDana['jenis_dana']}}" id="sumberDana">
            @foreach( $sumber as $data )

            <option value="{{ $data->id_sumber }}"> {{ $data->jenis_dana }}</option>

            @endforeach
          </select>
          </div>
         </div>
         <div class="modal-footer" class="col-sm-12">
          <button onclick="return confirm('Apakah anda yakin untuk menambahkan dana ini?');" type="submit" class="btn btn-success" >Simpan</button>
        </div>
      </div>
    
    </form>

    </div>
  </div>    
      </td>
    </tr>

     @empty
        <tr>
          <td colspan="6"><center>Belum ada dana</center></td>
        </tr>
    
    @endforelse

  </tbody>
</table>
         <div class="col-sm-10"></div>
<a href="{{url('mahasiswa/pengelolaan-kegiatan/daftarPengajuanDitolak')}}" class="btn btn-success btn-xs"> Simpan</a>


</div>
@endsection

@section('code-footer')

@endsection
