@extends('adminlte::layouts.app')
<html>
@section('code-header')


@endsection

@section('htmlheader_title')
<!-- Nama konten -->
<title></title>
<head></head>
Nama konten
@endsection

@section('contentheader_title')
<!-- Nama konten -->
Pengabdian Masyarakat
@endsection

@section('main-content')
<body>
<form action="/action_page.php">
Nama Kegiatan:<br>
  <input type="text" name="firstname" value="Arnold">
  <br>
 Tempat Kegiatan:<br>
  <input type="text" name="firstname" value="Arnold">
  <br>
   Tanggal Kegiatan:<br>
  <input type="text" name="firstname" value="Arnold">
  <br>
   File Pengmas:<br>
  <input type="text" name="firstname" value="Arnold">
  <input type="file" id="exampleInputFile">
  <br><br> 
  <input type="submit" value="Submit">
 </form>
 <p> If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p> 
</body> 
@endsection

@section('code-footer')




@endsection
</html>
