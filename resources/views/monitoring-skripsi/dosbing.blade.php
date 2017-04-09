@extends('adminlte::layouts.app')

@section('htmlheader_title')
  Dosen Pembimbing
@endsection

@section('contentheader_title')
Dosen Pembimbing
@endsection

@section('main-content')

<div class="container">

<div class="row">

<div class="col-md-8">
@if(Session::has('status_insert'))

	@if(strcmp(session('status_insert'),"1")==0)
	<div class="alert alert-success">
  	Data Berhasil Disimpan
	</div>
	@endif

	@if(strcmp(session('status_insert'),"0")==0)
	<div class="alert alert-danger">
  	Data gagal disimpan
	</div>
	@endif

@endif

@if(Session::has('status_edit'))

	@if(strcmp(session('status_edit'),"1")==0)
	<div class="alert alert-success">
  	Data Berhasil Diedit
	</div>
	@endif

	@if(strcmp(session('status_insert'),"0")==0)
	<div class="alert alert-danger">
  	Data gagal diedit
	</div>
	@endif

@endif

@if(Session::has('status_delete'))

	@if(strcmp(session('status_delete'),"1")==0)
	<div class="alert alert-success">
  	Data Berhasil Dihapus
	</div>
	@endif

	@if(strcmp(session('status_delete'),"0")==0)
	<div class="alert alert-danger">
  	Data gagal dihapus
	</div>
	@endif

@endif

<div class="panel panel-success">
      <div class="panel-heading">Tambah Dosen Pembimbing</div>
      
      <div class="panel-body">
      
      <form action="/monsi/tambah-dosbing" method="POST">

       {{ csrf_field() }}

       <div class="form-group">
       
       <label for="judul-skripsi">Judul Skripsi</label>
       
       <select class="form-control" id="judul-skripsi" name="judul_skripsi">
       	
       <option value="1">Handwriting Recognition</option>
       <option value="2">Particle Swarm Optimization</option>
       <option value="3">Voice Recognition</option>
       </select>
       </div>

       <div class="form-group">
       <label for="nip-dosen">NIP</label>
      	<select class="form-control" id="nip-dosen" name="nip_dosen">
      		
      		<option value="214">Kenny</option>
      		<option value="215">Robbi</option>
      		<option value="216">Zafitra</option>

      	</select>
       </div>

       <div class="form-group">
       <label for="status-pembimbing">Status</label>
       <select id="status-pembimbing" name="status_pembimbing" class="form-control">
       	
       	<option value="1">Dosen Pertama</option>
       	<option value="2">Dosen Kedua</option>

       </select>
       </div>

       <button type="submit" class="btn btn-success">Tambah</button>
      	
      </form>	
      
      </div>
    
    </div>

    @if (count($list) >0)

    <div class="panel panel-info">
      <div class="panel-heading">List Dosen Pembimbing</div>
      <div class="panel-body">

      <table class="table table-hover">
      	<thead>
      		<tr>
      			<th>NIP</th>
      			<th>Kode Skripsi</th>
      			<th>Status Dosen Pembimbing</th>
      		</tr>

      		<tbody>
      			 @foreach ($list as $item)

      			 <tr>
      			 	<td class="table-text">
      			 		<div>{{$item->nip}}</div>
      			 	</td>

      			 	<td  class="table-text">
      			 		<div>
      			 			{{$item->id_skripsi}}
      			 		</div>
      			 	</td>

      			 	<td class="table-text">
      			 		<div>
      			 			{{$item->status}}
      			 		</div>
      			 	</td>

      			 	<td>

      			 		<form action="/monsi/hapus-dosbing/{{$item->id}}" >

      			 		{{ csrf_field() }}
            			

            			<button class="btn btn-danger">Delete</button>
      			 			
      			 		</form>
      			 		
      			 	</td>

      			 	<td>
      			 		<form action="/monsi/edit-dosbing/{{$item->id}}" >

      			 		{{ csrf_field() }}
            			

            			<button class="btn btn-primary">Edit</button>
      			 			
      			 		</form>
      			 	</td>
      			 </tr>

      			 @endforeach
      		</tbody>
      	</thead>
      </table>

      </div>
    </div>

    @endif

</div>

</div>


</div>


@endsection