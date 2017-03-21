@extends('adminlte::layouts.app')
<html>
@section('code-header')


@endsection

@section('htmlheader_title')
<!-- Nama konten -->
<title></title>
<head></head>
Konferensi
@endsection

@section('contentheader_title')
<!-- Nama konten -->
Konferensi
@endsection

@section('main-content')
<body>
<form action="/action_page.php">
Nama Konferensi:<br>
  <input type="text" name="firstname" value="Arnold">
  <br>
Materi Konferensi:<br>
  <input type="text" name="materikonferensi" value="Materi">
  <br>
Pemapar Konferensi:<br>
  <input type="text" name="lastname" value="Suasanasegar">
  <br>
Tempat Konferensi:<br>
  <input type="text" name="tempatkonferensi" value="Surabaya">
  <br>
Tanggal Konferensi:<br>
  <input type="text" name="tanggalkonferensi" value="19032017">
  <br>

File Konferensi:<br>
   <div class="form-group">
                  <input type="file" id="exampleInputFile">

                  <p class="help-block">Example block-level help text here.</p>
                </div>
  <br><br> 
<input type="submit" value="Submit">
</form>
<p> If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p> 
</body> 
@endsection

@section('code-footer')




@endsection
</html>