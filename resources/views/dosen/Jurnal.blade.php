@extends('adminlte::layouts.app')
<html>
@section('code-header')


@endsection

@section('htmlheader_title')
!-- Nama konten -->
<title></title>
<head></head>
Nama konten 
@endsection

@section('contentheader_title')
<!-- Nama konten -->
Nama konten
@endsection

@section('main-content')
<!-- Kodingan HTML ditaruh di sini -->
<body>
<form action="/action_page.php">
  First name:<br>
  <input type="text" name="firstname" value="Mickey">
  <br>
  Last name:<br>
  <input type="text" name="lastname" value="Mouse">
  <br><br>
  <input type="submit" value="Submit">
</form> 
<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>
</body>
@endsection

@section('code-footer')




@endsection
</html>