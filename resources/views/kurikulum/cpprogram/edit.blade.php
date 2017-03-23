@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
<!-- Nama konten -->

@endsection

@section('contentheader_title')
<!-- Nama konten -->

@endsection

@section('main-content')

    <div class="box box-warning">
        <div class="box-header with-border">
          <center><h3 class="box-title">FORM CAPAIAN PROGRAM</b></center> 
          <div class="form-group">
            <div class="col-sm-2" style="padding-right: -10px;">                    
              <label><b>Capaian Program Spesifik</b></label>
            </div>
            <div style="padding-left : 0px ;" class="col-sm-10">
              <textarea class="form-control" rows="6">Mengidentifikasi,  memformulasikan  dan  memecahkan </textarea>  
            </div>
          </div>
           <br><br><br><br><br><br><br><br>
          <div class="form-group">
            <div class="col-sm-2" style="padding-right: -10px;">                   
              <label><b>Dimensi Capaian Program Umum</b></label>
            </div>
            <div style="padding-left : 0px ;" class="col-sm-10">
              <textarea class="form-control" rows="6">Penguasaan bidang Komputasi </textarea>
              </textarea>                    
            </div>
          </div>
           <br><br><br><br><br><br><br><br>
            <a href="/kurikulum/cpprogram/" button type="Ubah" class="btn btn-primary" style="float:right";>Ubah</a>
        </div>
      </div>

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