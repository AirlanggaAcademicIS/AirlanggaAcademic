@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Fitur 
@endsection

@section('contentheader_title')
Fitur
@endsection

@section('main-content')




<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Jadwal Sidang Skripsi </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                
                
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#form-tambah-jadwal-sidang-skripsi">Tambah Jadwal Sidang</button>
                <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#form-edit-jadwal-sidang-proposal">Edit Jadwal Sidang</button> -->
               
              
               <table class="table table-hover" style="margin-top: 15px;">
    <thead>
      <tr>
        <th>Tanggal</th>
        <th>Tempat</th>
        <th>Waktu</th>
        <th>NIM</th>
        <th>Mahasiswa</th>
        <th>Dosen Penguji</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>20 Maret 2017</td>
        <td>LAB Komputer 3, FST</td>
        <td>07.00 WIB</td>
        <td>081411631012</td>
        <td>Robbani</td>
        <td>Test</td>
      </tr>
      <tr>
        <td>20 Maret 2017</td>
        <td>LAB Komputer 3, FST</td>
        <td>09.00 WIB</td>
        <td>081411631044</td>
        <td>Kenny Everest</td>
        <td>Test2</td>
      </tr>
      <tr>
        <td>20 Maret 2017</td>
        <td>LAB Komputer 3, FST</td>
        <td>11.00 WIB</td>
        <td>081411631024</td>
        <td>Dzikri Robi</td>
        <td>Test</td>
      </tr>
      <tr>
        <td>20 Maret 2017</td>
        <td>LAB Komputer 3, FST</td>
        <td>13.00 WIB</td>
        <td>081411631020</td>
        <td>Regina Lapian</td>
        <td>Test</td>
      </tr>
      <tr>
        <td>20 Maret 2017</td>
        <td>LAB Komputer 3, FST</td>
        <td>15.00 WIB</td>
        <td>081411631010</td>
        <td>Nadhila Ramadini A</td>
        <td>Test</td>
      </tr>
      <tr>
        <td>20 Maret 2017</td>
        <td>LAB Komputer 3, FST</td>
        <td>18.00 WIB</td>
        <td>081411631016</td>
        <td>Zafitra R</td>
        <td>Test</td>
      </tr>
      
      
    </tbody>
  </table>
               
              </div>
              <!-- /.box-body -->

             
            </form>
          </div>

<!-- Modal -->
<div id="form-tambah-jadwal-sidang-skripsi" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tambah Jadwal Sidang Skripsi</h4>
      </div>
      <div class="modal-body">
        <form>

        <div class="row">
        <div class="col-md-6">
       
        <div class="form-group">
          <label for="tgl-sidang-skripsi">Tanggal Sidang</label>
          <input type="text" id="tgl-sidang-skripsi" name="tgl-sidang-skripsi" class="form-control"></input>
          </div>

        </div>

        <div class="col-md-6">
 <div class="form-group">
          <label for="waktu-sidang-skripsi">Waktu Sidang</label>
          <input type="text" id="waktu-sidang-skripsi" class="form-control"></input>
          </div>
        </div>

        </div>

         <div class="form-group">
          <label for="tempat-sidang-skripsi">Tempat Sidang</label>
          <input type="text" id="tempat-sidang-skripsi" class="form-control"></input>
          </div>

          <div class="form-group">
          <label for="nim-mahasiswa">NIM</label>
          <input type="text" id="nim-mahasiswa" class="form-control"></input>
          </div>

           <div class="form-group">
          <label for="nama-mahasiswa">Mahasiswa</label>
          <input type="text" id="nama-mahasiswa" class="form-control"></input>
          </div>

           <div class="form-group">
          <label for="judul-skripsi-mahasiswa">Judul Skripsi</label>
          <input type="text" id="judul-skripsi-mahasiswa" class="form-control"></input>
          </div>
          
          <div class="form-group">
          <label for="dosen-penguji">Dosen Penguji</label>
          <input type="text" id="dosen-penguji" class="form-control"></input>
          </div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success">Simpan</button>
      </div>
    </div>

  </div>
</div>

<div id="form-edit-jadwal-sidang-proposal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

          
@endsection

@section('code-footer')




@endsection