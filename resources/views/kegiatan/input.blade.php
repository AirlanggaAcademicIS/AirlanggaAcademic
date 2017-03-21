@extends('adminlte::layouts.app')
<html>
@section('code-header')
<<<<<<< HEAD
<<<<<<< HEAD
@endsection

@section('htmlheader_title')
<title></title>
@endsection

@section('contentheader_title')
PUBLIKASI KEGIATAN
@endsection


@section('main-content')
<body>
<form action="/action_page.php">
  Nama Kegiatan:<br>
  <input type="text" name="namakegiatan" value="Xplonation">
  <br>
  Deskripsi Kegiatan:<br>
  <textarea rows="4" cols="50" name="comment" form="usrform">
  Enter text here...</textarea>
  <br>
  Tempat Kegiatan:<br>
  <input type="text" name="tempatkegiatan" value="FST, Kampus C Unair">
  <br>
  Tanggal Pelaksanaan:<br>
  <input type="text" name="tanggalpelaksanaan" value="07/11/2017">
  <br><br>
  <input type="file" id="myFile">
=======
=======
>>>>>>> f6fccf35c9921d3e2b03b57a0426d305eee32806


@endsection

@section('htmlheader_title')
<title>Input TU</title>
@endsection

@section('contentheader_title')
Input Dokumentasi
@endsection

@section('main-content')
<body>
<form>
Nomor Kegiatan
<br>
<input type="text" name="JudulK" value=""/>
<br>
Tempat Kegiatan
<br>
<input type="text" name="TempatK" value=""/>
<br>
Tanggal Pelaksanaan
<br>
<input type="date" name="TanggalT" value=""/>
<br>
<br>
<input type="file" id="myFile">
<<<<<<< HEAD
>>>>>>> 0f93479142897a3a0cb98d1c570f7454caeaebd8
=======
>>>>>>> f6fccf35c9921d3e2b03b57a0426d305eee32806
(max size 200MB)
<script>
function myFunction() {
    var x = document.getElementById("myFile");
    x.disabled = true;
}
</script>
<br><br>
<<<<<<< HEAD
<<<<<<< HEAD
  <button type="button"><a href="{{url('/kegiatan/publikasi')}}">Submit</a></button>
</form> 

@endsection

@section('code-footer')
=======
=======
>>>>>>> f6fccf35c9921d3e2b03b57a0426d305eee32806
Deskripsi Kegiatan
<br>
<textarea rows="4" cols="50" name="comment" form="usrform">Enter text here...</textarea>
<br>
<button type="submit" onclick="clicked(event)" /><a href="{{url('/kegiatan/dokumentasi')}}">Submit</a></button>
<script>
function clicked(e)
{
    if(!confirm('Dokumentasi akan ditampilkan.'))e.preventDefault();
}
</script>
</form>
@endsection

@section('code-footer')



<<<<<<< HEAD
>>>>>>> 0f93479142897a3a0cb98d1c570f7454caeaebd8
=======
>>>>>>> f6fccf35c9921d3e2b03b57a0426d305eee32806
</body>
@endsection
</html>