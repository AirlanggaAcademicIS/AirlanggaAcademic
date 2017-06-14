<!DOCTYPE html>
<html>

<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<!-- include summernote css/js-->
<div style="overflow: auto">
  <h1 style="text-align:center">Laporan Data Asset S1 SI di Ruang 
    @if($lokasi == 1) 
          Labkom 1
          @elseif($lokasi == 2) 
          Labkom 2
          @elseif($lokasi == 3) 
          Labkom 3
          @elseif($lokasi == 4) 
          Labkom 4
          @elseif($lokasi == 5) 
          Labkom 5
          @elseif($lokasi == 6) 
          Labkom 6
        @endif
    </h1>
 </div>

<div style="overflow: auto">
<table class="table" id="data-table" style="width:100%">
  <thead>
    <tr>
      <th style="text-align:center">No.</th>
      <th style="text-align:center">Kategori</th>
      <th style="text-align:center">NIP Petugas</th>
      <th style="text-align:center">Status</th>
      <th style="text-align:center">Nama Asset</th>
      <th style="text-align:center">Lokasi</th> 

      </tr>
    </thead>
  <tbody>
   @forelse($report as $i => $ass) 
    <tr>
      <td>{{ $i+1 }}</td>
       @if($ass->kategori_id == 1) 
        <td width="20%" style="text-align:center">Elektronik</td>
        @elseif($ass->kategori_id == 2) 
        <td width="20%" style="text-align:center">Mekanik</td>
        @elseif($ass->kategori_id == 3) 
        <td width="20%" style="text-align:center">Furniture</td>
        @elseif($ass->kategori_id == 4) 
        <td width="20%" style="text-align:center">Dokumen</td>
        @elseif($ass->kategori_id == 5) 
        <td width="20%" style="text-align:center">Kendaraan</td>
       @endif
      
      <td width="15%" style="text-align:center">{{$ass->nip_petugas_id}}</td>
     
      @if($ass->status_id == 1) 
      <td width="20%" style="text-align:center">Ready</td>
      @elseif($ass->status_id == 2) 
      <td width="20%" style="text-align:center">Borrowed</td>
      @elseif($ass->status_id == 3) 
      <td width="20%" style="text-align:center">Maintenance</td>
      @elseif($ass->status_id == 4) 
      <td width="20%" style="text-align:center">Broken</td>
      @elseif($ass->status_id == 5) 
      <td width="20%" style="text-align:center">Expired</td>
      @endif

      <td width="10%" style="text-align:center">{{$ass->nama_asset}}</td>

      @if($ass->lokasi_id == 1) 
        <td width="20%" style="text-align:center">Labkom 1</td>
        @elseif($ass->lokasi_id == 2) 
        <td width="20%" style="text-align:center">Labkom 2</td>
        @elseif($ass->lokasi_id == 3) 
        <td width="20%" style="text-align:center">Labkom 3</td>
        @elseif($ass->lokasi_id == 4) 
        <td width="20%" style="text-align:center">Labkom 4</td>
        @elseif($ass->lokasi_id == 5) 
        <td width="20%" style="text-align:center">Labkom 5</td>
        @elseif($ass->lokasi_id == 6) 
        <td width="20%" style="text-align:center">Labkom 6</td>
      @endif     
    </tr>
    <hr>
     @empty
        <tr>
          <td colspan="14"><center>Tidak ada asset</center></td>
        </tr>
    @endforelse
  </tbody>
</table>
</div>

</html>