@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Kalender Kegiatan
@endsection

@section('contentheader_title')
Kalender Kegiatan
@endsection

@section('main-content')
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
  <title>PHP  Calendar</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
  <style>
    .container{
      font-family: 'Noto Sans', sans-serif;
      margin-top: 80px;
    }
    th{
      height: 30px;
      text-align: center;
      font-weight: 700;
    }
    td{
      height: 100px;
    }
    .today{
      background: orange;
    }
  </style>
</head>
<body>
 <div class="container">
  <h3><a><</a> Maret 2017 <a>></a></h3>
  <br>
  <table class="table table-bordered">
    <tr>
      <th>M</th>
      <th>S</th>
      <th>S</th>
      <th>R</th>
      <th>K</th>
      <th>J</th>
      <th>S</th>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td>1</td>
      <td>2</td>
      <td>3</td>
      <td>4</td>
    </tr>
    <tr>
      <td>5</td>
      <td style= "color:red;">6</td>
      <td>7</td>
      <td>8</td>
      <td>9</td>
      <td>10</td>
      <td>11</td>
    </tr>
    <tr>
      <td>12</td>
      <td>13</td>
      <td>14</td>
      <td>15</td>
      <td>16</td>
      <td>17</td>
      <td>18</td>
    </tr>
    <tr>
      <td>19</td>
      <td>20</td>
      <td>21</td>
      <td>22</td>
      <td>23</td>
      <td>24</td>
      <td>25</td>
    </tr>
    <tr>
      <td>26</td>
      <td>27</td>
      <td>28</td>
      <td>29</td>
      <td>30</td>
      <td>31</td>
      <td></td>
    </tr>
  </table>
  <p>Keterangan Kegiatan :</p>
  <p>Nama Kegiatan : ALPRO Cup </p>
  <p>Tanggal Pelaksanaan : <font color="red">6</font> </p>
  <p>Tempat Pelaksanaan : FST, Kampus C UNAIR</p>
 </div> 
</body> 
</html> 
@endsection

@section('code-footer')
  
@endsection