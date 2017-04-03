@extends('adminlte::layouts.app')
<html>
@section('code-header')

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
(max size 200MB)
<script>
function myFunction() {
    var x = document.getElementById("myFile");
    x.disabled = true;
}
</script>
<br><br>

  <button type="button"><a href="{{url('/kegiatan/publikasi')}}">Submit</a></button>
</form> 

@endsection

@section('code-footer')

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

</body>
@endsection
</html>