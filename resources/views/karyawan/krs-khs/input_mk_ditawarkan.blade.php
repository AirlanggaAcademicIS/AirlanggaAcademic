@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Input Mata Kuliah Ditawarkan
@endsection

@section('contentheader_title')
<!-- Nama konten -->
Input Mata Kuliah Ditawarkan
@endsection

@section('main-content')
<div class="box">

            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" id="MKDitawarkan">
                <!-- text input -->
                <div class="form-group">
                  <label>Tahun Akademik</label>
                </br>
                  <div class="col-md-2">
                  <select class="form-control" id="periode">
                    <option>Gasal</option>
                    <option>Genap</option>
                  </select>
                  </div>
                  <div class="col-md-2">
                  <input type="number" class="form-control input" id="tahun_awal" name="tahun_awal" placeholder="Tahun Awal" required>
                  </div>
                  <div class="col-md-2">
                  <input type="number" class="form-control input" id="tahun_akhir" name="tahun_akhir" placeholder="Tahun Akhir" required>
                  </div>                
                  </div>
                  </br>
            </br>
              <label>Mata Kuliah</label>
              @foreach ($mk as $i => $r)
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="cek[]" value="{{$r->nama_matkul}}">
                      {{$r->nama_matkul}}
                </label>
              </div>
              @endforeach
            </div>

            <!-- /.submit-->
            <div class="box-footer">
                <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Submit</button>
              </div>
              </form>
             <!-- Modal -->
              <div class="modal" id="myModal" role="dialog">
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
</div>
</div>



@endsection

@section('code-footer')




@endsection