<form role="form">
<div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Tambah Silabus</h3>
    </div>

  <div class="box-body">

    <div class="form-group">
	    <label>Nama Mata Kuliah</label>
	    <select class="form-control select2" style="width: 100%;">
	      <option selected="selected">Pilih Mata Kuliah</option>
	      <option>Tim Pengajar Pengantar Manajemen Umum</option>
	      <option>Tim Pengajar Pengantar Teknologi Informasi</option>
	      <option>Tim Pengajar Agama</option>
	      <option>Tim Pengajar Bahasa Inggris</option>
	      <option>Tim Pengajar Kewarganegaraan</option>
	      <option>Tim Pengajar Pancasila</option>
	    </select>
	</div>
	<div class="form-group">
	    <label>Kode Mata Kuliah</label>
	    <select class="form-control select2" style="width: 100%;">
	      <option selected="selected">Kode Mata Kuliah</option>
	      <option>SA100</option>
	      <option>SA200</option>
	      <option>SA300</option>
	      <option>SA400</option>
	      <option>SA500</option>
	      <option>SA600</option>
	    </select>
	</div>

    <div class="form-group">
		<label for="beban-studi"><b>Beban Studi</b></label>
		<input class="form-control" placeholder="Masukkan beban studi" value="">
    </div>
    <div class="form-group">
        <label for="semester"><b>Semester</b></label>
        <input class="form-control" placeholder="Masukkan semester" value="">
    </div>
    <div class="form-group">
        <label for="prasyarat"><b>Prasyarat</b></label><br>     
        <input type="text" value=" " data-role="tagsinput">                    
    </div>
    <div class="form-group">
        <label for="capaian-pembelajaran"><b>Capaian Pembelajaran yang dibebankan pada mata kuliah ini</b></label>
      	<textarea class="form-control" rows="4" placeholder="Masukan Capaian Pembelajaran">
      	</textarea>
    </div>
    <div class="form-group">
        <label for="dekripsi-matkul"><b>Deskripsi Mata Kuliah/Silabus</b></label>
      	<textarea class="form-control" rows="4" placeholder="Masukan Deskripsi Mata Kuliah">
      	</textarea>
    </div>
    <div class="form-group">
        <label for="softskill"><b>Atribut Softskill</b></label><br>    
        <input type="text" value=" " data-role="tagsinput">                    
    </div>
    <div class="form-group">
        <label for="metode-pembelajaran"><b>Metode Pembelajaran</b></label><br>     
        <input type="text" value=" " data-role="tagsinput">                    
    </div>
    <div class="form-group">
        <label for="media-pembelajaran"><b>Media Pembelajaran</b></label><br>    
        <input type="text" value=" " data-role="tagsinput">                    
    </div>
    <div class="form-group">
        <label for="penilaian"><b>Penilaian Hasil Belajar</b></label>    
        <textarea class="form-control" rows="4" placeholder="Masukan Penilaian Hasil Belajar">
        </textarea>
    </div>
    <div class="form-group">
	    <label>Dosen</label>
	    <select class="form-control select2" style="width: 100%;">
	      <option selected="selected">Tim Pengajar</option>
	      <option>Tim Pengajar Pengantar Manajemen Umum</option>
	      <option>Tim Pengajar Pengantar Teknologi Informasi</option>
	      <option>Tim Pengajar Agama</option>
	      <option>Tim Pengajar Bahasa Inggris</option>
	      <option>Tim Pengajar Kewarganegaraan</option>
	      <option>Tim Pengajar Pancasila</option>
	    </select>
	</div>
	<div class="form-group">
        <label for="referensi"><b>Referensi Wajib</b></label>
        <textarea class="form-control" rows="4">
      	</textarea>
    </div>

  <!-- /.box-body -->

	<div class="box-footer clearfix">
      <a href="{{('/kurikulum/silabus')}}" class="pull-right btn btn-info btn-sm" id="tambah">Tambah </a>
    </div>

</form>
</div>       

    <!-- /.box -->
    
</form>