@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Biodata
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
@endsection

@section('contentheader_title')
Biodata
@endsection

@section('main-content')
<h1 class="well well-lg">All Image List</h1>
@foreach( $dokumentasi as $dokumen )
    <div class="table table-bordered bg-success"><a href="{!! '/images/'.$dokumen->filePath !!}">{{$dokumen->filePath}}</a></div>
@endforeach

@endsection

@section('code-footer')

@endsection