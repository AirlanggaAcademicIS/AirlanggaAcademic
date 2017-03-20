@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
<!-- Nama konten -->
Nama konten 
@endsection

@section('contentheader_title')
<!-- Nama konten -->
Histori Bimbingan
@endsection

@section('main-content')

            <div class="box box-info">
           <div class="box-header with-border">
              <h4 class="box-title">Mahasiswa Bimbingan</h4>
            </div>
            
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2">Nama Mahasiswa</label>

                  <div class="col-sm-10">
                  <select class="form-control">
                  <option>Rr. Nadhila Ramadhini A</option>
                    <option>Regina Devi L.L</option>
                    <option>Zafitra Ramadani</option>
                    </select>
                    </div>
                  </div>
                


                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2">NIM</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="081411631007" disabled="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2">Judul</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="Analisa Kepuasan Pengguna Mobile-Apps blablabla Menggunakan Metode blablabla" disabled="">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2">Tanggal</label>

                <div class="col-sm-10">
                

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>

                  <input type="text" class="form-control pull-right" id="datepicker">
                </div>
                <!-- /.input group -->
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2">Agenda Bimbingan</label>
                  <div class="col-sm-10">
                  <textarea class="form-control" rows="3" placeholder="Masukkan agenda bimbingan"></textarea>
                  </div>
                </div>
                
                
                <center><button type="submit" class="btn btn-primary">Submit</button></center>
              

              </div>
            </form>
          </div>




@endsection

@section('code-footer')
  <script type="text/javascript">
    $('#datepicker').datepicker({
          autoclose: true
        });
  </script>
  
@endsection