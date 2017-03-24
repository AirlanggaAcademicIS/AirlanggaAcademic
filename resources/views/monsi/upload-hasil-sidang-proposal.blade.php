@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
<!-- Nama konten -->
Nama konten 
@endsection

@section('contentheader_title')
<!-- Nama konten -->

@endsection

@section('main-content')

            <div class="box box-info">
           <div class="box-header with-border">
              <h4 class="box-title">Hasil Sidang Proposal</h4>
            </div>
            
            <!-- Trigger the modal with a button -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_upload_hasil_sidang_proposal">Upload</button>

            <!-- Modal -->
            <div id="modal_upload_hasil_sidang_proposal" class="modal fade" role="dialog">
              <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Upload Jadwal Baru</h4>
                  </div>
                  <div class="modal-body">
                    <!-- form upload -->
                    <form>
                  <div class="form-group">
                    <label for="nim-upload-hasil-sidang-proposal">NIM</label>
                    <input type="text" class="form-control" id="nim-upload-hasil-sidang-proposal">
                  </div>
                  <div class="form-group">
                    <label for="mahasiswa-upload-hasil-sidang-proposal">Mahasiswa</label>
                    <input type="text" class="form-control" id=mahasiswa-upload-hasil-sidang-proposal>
                  </div>
                  <div class="form-group">
                    <label for="judul-upload-hasil-proposal">Judul Proposal</label>
                    <input type="text" class="form-control" id="judul-upload-hasil-proposal"></input>
                  </div>
                  <div class="form-group">
                    <label for="jadwal-upload-hasil-proposal">Jadwal</label>
                    <input type="date" class="form-control" id="jadwal-upload-hasil-proposal"></input>
                  </div>
                  <div class="form-group">
                   <label>Hasil</label>
                    <div class="radio">
                    <label><input type="radio" name="optradio">Lulus</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio" name="optradio">Tidak Lulus</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio">Revisi</input>
                  </div>
                  </div>
                  
                </form>
                <!-- end form update -->
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Submit</button>
                  </div>
                </div>

              </div>
            </div> 
            <!-- akhir modal -->

            <form class="form-horizontal">
              <div class="box-body">
                <table class="table table-hover">
                  <thead>
                     <tr>
                      <th>NIM</th>
                      <th>Mahasiswa</th>
                      <th>Judul Proposal</th>
                      <th>Jadwal</th>
                      <th>Hasil Sidang</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>081411631009</td>
                      <td>Robbani</td>
                      <td>Steaming</td>
                      <td>20 Maret 2017</td>
                      <td>Lulus</td>
                    </tr>
                    <tr>
                      <td>081411631044</td>
                      <td>Kenny Everest</td>
                      <td>Image Processing</td>
                      <td>20 Maret 2017</td>
                      <td>Lulus</td>
                    </tr>
                    <tr>
                      <td>081411631024</td>
                      <td>Dziki Robi</td>
                      <td>Sistem Pendukung Keputusan</td>
                      <td>20 Maret 2017</td>
                      <td>Lulus</td>
                    </tr>
                    <tr>
                      <td>081411631030</td>
                      <td>Nadhila Ramadini</td>
                      <td>Engineering Information System</td>
                      <td>20 Maret 2017</td>
                      <td>Lulus</td>
                    </tr>
                    <tr>
                      <td>081411631028</td>
                      <td>Regina Lapian</td>
                      <td>Sistem Pendukung Keputusan</td>
                      <td>20 Maret 2017</td>
                      <td>Lulus</td>
                    </tr>
                    <tr>
                      <td>081411631016</td>
                      <td>Zafitra Ramadani</td>
                      <td>ISE</td>
                      <td>20 Maret 2017</td>
                      <td>Revisi</td>
                    </tr>
                  </tbody>
                </table>
              <!-- akhir table -->

              </div>
              <!-- box body -->
            </form>
            <!-- akhir form -->
          </div>




@endsection

@section('code-footer')
 
@endsection