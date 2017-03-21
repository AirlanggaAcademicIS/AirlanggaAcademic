@extends('adminlte::layouts.app')
<html>
@section('code-header')


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



</body>
@endsection
</html>