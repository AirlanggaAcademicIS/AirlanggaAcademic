@extends('adminlte::layouts.app')

@section('htmlheader_title')
Edit capaian pembelajaran
@endsection

@section('contentheader_title')
Edit Capaian Pembelajaran
@endsection

@section('code-header')

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script> 

@endsection

@section('main-content')
<style>
  .form-group label{
    text-align: left !important;
  }
</style>

  @foreach (['danger', 'warning', 'success', 'info'] as $msg)
  @if(Session::has('alert-' . $msg))
<div class="alert alert-{{ $msg }}">
  <p class="" style="border-radius: 0">{{ Session::get('alert-' . $msg) }}</p>
</div>
  {!!Session::forget('alert-' . $msg)!!}
  @endif
  @endforeach

<div class="box box-info">
<div class="box-body">

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
      <form id="tambahCapaianPembelajaran" method="post" action="{{url('/dosen/kurikulum/capaian-pembelajaran/'.$cp_pembelajaran->id_cpem.'/edit')}}" enctype="multipart/form-data"  class="form-horizontal">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <!-- Menampilkan input text biasa -->
        <div class="box-header with-border">
        <div class="form-group">
     <label for="id_prodi" class="col-sm-2 control-label">Nama Prodi</label>
     <div class="col-md-5">
          <select name="prodi_id" class="form-control">
              @foreach($prodis as $prodi)
                <option @if ($prodi->id_prodi==$cp_pembelajaran->prodi_id) 
                {{'selected'}}
                @endif
                value="{{$prodi->id_prodi}}">{{$prodi->nama_prodi}}</option>
              @endforeach
            </select>
        </div>
       </div>

        <!-- Menampilkan input text biasa -->
        <div class="form-group">
          <label for="kategori_cpem_id" class="col-sm-2 control-label">Kategori Capaian Pembelajaran</label>
          <div class="col-md-5">
          <select name="kategori_cpem_id" class="form-control">
              @foreach($categories as $category)
                <option @if ($category->id_kategori_cpem==$cp_pembelajaran->  kategori_cpem_id) 
                {{'selected'}}
                @endif
                value="{{$category->id_kategori_cpem}}">{{$category->nama_cpem}}</option>
              @endforeach
            </select>
          </div>
        </div>

        <!-- Menampilkan textarea -->
        
        <div class="form-group">
          <label for="kode_cpem" class="col-sm-2 control-label">Kode Capaian Pembelajaran</label>
          <div class="col-md-5">
            <input type="text" class="form-control input-md" id="kode_cpem" name="kode_cpem" placeholder="Masukkan kode" value="{{$cp_pembelajaran->kode_cpem}}" required>
          </div>
        </div>

                <!-- Menampilkan input text biasa -->
        <div class="form-group">
          <label for="deskripsi_cpem" class="col-sm-2 control-label">Deskripsi Capaian Pembelajaran</label>
          <div class="col-md-4">
            <textarea id="deskripsi_cpem" name="deskripsi_cpem" placeholder=" Masukkan Deskripsi Capaian Pembelajaran" required cols="135" rows="8" required>{{$cp_pembelajaran->deskripsi_cpem}}
            </textarea>
          </div>
        </div>

       <div class="footer clearfix">
        <button type="Edit" class="middle btn btn-info btn-sm" id="Edit" style="margin-left: 95%;">Edit
        </button>
      </div>
    </div>
  </div>       
</form>
</div>
</div>


<div class="col-md-15">

          <!-- /.box -->
          <!-- general form elements disabled -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Input Kategori Capaian Mata Kuliah</h3>
              <div class="box-body">
</div>
<div style="margin-bottom: 10px">
  <!-- Href ini biar diklik masuk ke form tambah -->
  
</div>
<div style="overflow: auto">
<table id="myTable" class="table tabl0e-striped table-bordered" cellspacing="0">
  <thead>
    <tr>
      <th style="text-align:center">No.</th>
      <th style="text-align:center">Nama Prodi</th>      
      <th style="text-align:center">Nama Kategori Capaian Pembelajaran</th>
      <th style="text-align:center">Kode Capaian Pembelajaran</th>
      <th style="text-align:center">Deskripsi</th>
    </tr>
    </thead>
  <tbody>
   @forelse($capaianpembelajaran as $i => $cp) 
    <tr>
      <td width="5%" style="text-align:center" >{{ $i+1 }}</td>
      <td width="15%" style="text-align:center">{{$cp->prodi['nama_prodi']}}</td>
      <td width="25%" style="text-align:center">{{$cp->kategori['nama_cpem']}}</td>
      <td width="15%" style="text-align:center">{{$cp->kode_cpem}}</td>
      <td width="30%" style="text-align:center">{{$cp->deskripsi_cpem}}</td>
    </tr>
     @empty
        <tr>
          <td colspan="6"><center>Belum ada data</center></td>
        </tr>
    @endforelse
  </tbody>
</table>
</div>
</div>
          </div>
          </div>
</div>

@endsection

@section('code-footer')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
$( function() {
    var date = $('#datepicker').datepicker({ dateFormat: 'yy/mm/dd' }).val();

  } );
  </script>
@endsection