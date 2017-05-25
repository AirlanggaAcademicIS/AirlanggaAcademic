<form id="khs" method="post" action="{{url('/krs-khs/khs/'.$mk_diambil->mk_ditawarkan+id.'/edit')}}" enctype="multipart/form-data"  class="form-horizontal">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="form-group">
      <label for="nim" class="col-sm-2 control-label">1. Jenis Matkul</label>
      <div class="col-md-8">
          @foreach($jenis_matkul as $jenis_mk)
            @if($jenis_mk->id == $matkul->jenisMatkul['id'])
              <h4>{{$jenis_mk->jenis_mk}}</h4>
            @endif
          @endforeach
      </div>
    </div>
    <!-- Menampilkan input text biasa -->
    <div class="form-group">
        <label for="nim" class="col-sm-2 control-label">2. Kode</label>
        <div class="col-md-8">
          <h4>{{$matkul->kode_matkul}}</h4>
        </div>
    </div>

    <div class="form-group">
        <label for="nama" class="col-sm-2 control-label">3. Nama Mata Kuliah</label>
        <div class="col-md-8">
          <h4>{{$matkul->nama_matkul}}</h4  >
        </div>
    </div>

<!-- Menampilkan textarea -->
    <div class="form-group">
        <label for="nama" class="col-sm-2 control-label">4. SKS</label>
        <div class="col-md-8">
          <h4>{{$matkul->sks}}</h4>
        </div>
    </div>

    <!-- Menampilkan dropdown -->
    <div class="form-group">
        <label for="nama" class="col-sm-2 control-label">5. Deskripsi</label>
        <div class="col-md-8">
            <h4>{{$matkul->deskripsi_matkul}}</h4>
        </div>
    </div>

    <!-- Menampilkan tanggal dengan datepicker -->
    <div class="form-group">
        <label for="nama" class="col-sm-2 control-label">6. Capaian</label>
        <div class="col-md-8">
            <h4>{!!$matkul->capaian_matkul!!}</h4>
        </div>
    </div>

    <div class="form-group">
        <label for="nama" class="col-sm-2 control-label">7. Penilaian</label>
        <div class="col-md-8">
          <h4>{!!$matkul->penilaian_matkul!!}</h4>
        </div>
    </div>                

    <div class="form-group">
        <label for="nama" class="col-sm-2 control-label">8. Pokok Pembahasan</label>
        <div class="col-md-8">
          <h4>{!!$matkul->pokok_pembahasan!!}</h4>
        </div>
    </div>                                

    <div class="form-group">
        <label for="nama" class="col-sm-2 control-label">9. Pustaka Utama</label>
        <div class="col-md-8">
          <h4>{!!$matkul->pustaka_utama!!}</h4>
        </div>
    </div>                                                

    <div class="form-group">
        <label for="nama" class="col-sm-2 control-label">10. Pustaka Pendukung</label>
        <div class="col-md-8">
          <h4>{!!$matkul->pustaka_pendukung!!}</h4>
        </div>
    </div>                                                

    <div class="form-group">
        <label for="nama" class="col-sm-2 control-label">11. Syarat SKS</label>
        <div class="col-md-8">
          <h4>{{$matkul->syarat_sks}}</h4>
        </div>
    </div>

</form>