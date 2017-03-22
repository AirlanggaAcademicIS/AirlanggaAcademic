@extends('adminlte::layouts.app')
<html>
@section('code-header')
@endsection

@section('htmlheader_title')
	<title>Dokumentasi</title>
<style>
.kotak{
background:none;
border-style:solid;
border-color:black;
height: 195px;
width: 495px;
}

.thumbnails img {
	height: 80px;
	margin-left: 5px;
	margin-right: 5px;
	margin-top: 5px;
}

.gallery img {
	width:100%;
	height: auto;
}
.mean{
	text-align: justify;
	margin-left: 5px;
	margin-top: 5px;
	margin-right: 5px;
}
</style>
@endsection

@section('contentheader_title')
Dokumentasi Kegiatan
@endsection


@section('main-content')
<body>
<table style="margin-bottom: 10px;">
<tr>
<td>Nama Kegiatan</td>
<td>	<select>
		<option value="xplonation">Xplonation</option>
		</select></td>
</tr>

<tr>
<td>Tempat Kegiatan</td>
<td><input type="text" name="TempatK" value="FST, Kampus C Unair" readonly="readonly" /></td>
</tr>

<tr>
<td>Tanggal Pelaksanaan</td>
<td><input type="text" name="TanggalT" value="07/11/2015" readonly="readonly" /></td>
</tr>
</table>

<div class="kotak">
	<div class="thumbnails">
		<div class="gallery">
		<a target="_blank" href="{{asset('/img/my-img/4.jpg')}}">
		<img src="{{asset('/img/my-img/4.jpg')}}" style="width:150px;" alt=""/></a>

		<a target="_blank" href="{{asset('/img/my-img/5.jpg')}}">
		<img src="{{asset('/img/my-img/5.jpg')}}" style="width:150px;" alt=""/></a>

		<a target="_blank" href="{{asset('/img/my-img/6.jpg')}}">
		<img src="{{asset('/img/my-img/6.jpg')}}" style="width:150px;" alt=""/></a>
		</div>
	</div>
	<div class="mean">
	Xplonation adalah acara HIMSI yang mewadahi seluruh S1 Sistem Informasi UNAIR di bidang seni dan olah raga.
	</div>
	<button style="margin-left: 5px;">Download</button>
</div>

			</body>
@endsection

@section('code-footer')
@endsection