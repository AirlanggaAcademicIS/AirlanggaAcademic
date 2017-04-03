<form role="form">
<div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Edit Silabus</h3>
    </div>

  <div class="box-body">

    <div class="form-group">
		<label for="beban-studi"><b>Beban Studi</b></label>
		<input class="form-control" value="3" disabled="">
    </div>
    <div class="form-group">
        <label for="semester"><b>Semester</b></label>
        <input class="form-control" value="1" disabled="">
    </div>
    <div class="form-group">
        <label for="prasyarat"><b>Prasyarat</b></label><br>     
        <input type="text" value="PMU,PTI,Alpro,Agama,Bing" data-role="tagsinput" disabled="">                    
    </div>
    <div class="form-group">
        <label for="capaian-pembelajaran"><b>Capaian Pembelajaran yang dibebankan pada matakuliah ini</b></label>
      	<textarea class="form-control" rows="4">Mahasiswa dapat menggunakan konsep-konsep kalkulus dalam ilmu kehayatan.
      	</textarea>
    </div>
    <div class="form-group">
        <label for="dekripsi-matkul"><b>Deskripsi Mata Kuliah/Silabus</b></label>
      	<textarea class="form-control" rows="4">Sistem bilangan real, pertidaksamaan (linier, kuadratik, rasional, nilai mutlak), pengertian fungsi, jenis fungsi (polinomial, kuasa, akar, rasional, trigonometri, eksponen, logaritma), komposisi dan balikan. Limit dan kekontinuan, aplikasi kontinu (keberadaan akar persamaan), limit di tak hingga, pengertian turunan, sifat-sifat turunan, turunan fungsi khusus, turunan fungsi implisit dan aturan rantai, aplikasi turunan (laju yang berhubungan, aproksimasi linier, teorema nilai rata-rata), pengertian integral tak tentu.
      	</textarea>
    </div>
    <div class="form-group">
        <label for="softskill"><b>Atribut Softskill</b></label><br>    
        <input type="text" value="Integritas,etos kerja,control thinking" data-role="tagsinput">                    
    </div>
    <div class="form-group">
        <label for="metode-pembelajaran"><b>Metode Pembelajaran</b></label><br>     
        <input type="text" value="ceramah,diskusi" data-role="tagsinput">                    
    </div>
    <div class="form-group">
        <label for="media-pembelajaran"><b>Media Pembelajaran</b></label><br>    
        <input type="text" value="LCD,laptop,white board" data-role="tagsinput">                    
    </div>
    <div class="form-group">
        <label for="penilaian"><b>Penilaian Hasil Belajar</b></label>    
        <textarea class="form-control" rows="4" disabled="">Tes kemampuan prasyarat (10%), tes (20%), UTS (30%), UAS (30%), soft skill (10%)
      	</textarea>                   
    </div>
    <div class="form-group">
	    <label>Dosen</label>
	    <select class="form-control select2" style="width: 100%;">
	      <option selected="selected">Tim Pengajar Kalkulus</option>
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
        <textarea class="form-control" rows="4">Stewart, J., 2001, Kalkulus Jilid 1 dan 2, Erlangga, Jakarta.
      	</textarea>
    </div>

  <!-- /.box-body -->

	<div class="box-footer clearfix">
      <a href="<?php echo e(('/kurikulum/silabus')); ?>" class="pull-right btn btn-info btn-sm" id="update">Update</a>
    </div>

</form>
</div>       

    <!-- /.box -->
</div> 
</form>