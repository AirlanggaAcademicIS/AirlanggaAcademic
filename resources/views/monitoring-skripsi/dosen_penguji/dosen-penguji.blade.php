@extends('adminlte::layouts.app')

@section('htmlheader_title')
  Dosen Penguji
@endsection

@section('contentheader_title')
Dosen Penguji
@endsection

@section('main-content')

<div class="container">

<div class="row">

<div class="col-md-8">


<div class="panel panel-success">
      <div class="panel-heading">Tambah Dosen Penguji</div>
      
      <div class="panel-body">
      
      <form action="/monitoring-skripsi/tambah-dosen-penguji" method="POST">

       {{ csrf_field() }}

       <div class="form-group">
       
       <label for="judul-skripsi">Judul Skripsi</label>
       <input type="number" class="form-control" id="judul-skripsi" name="judul_skripsi">
       <!-- input field disini -->
       
       </div>

       <div class="form-group">
       <label for="nip-dosen">NIP</label>
       <input type="text" class="form-control" id="nip-dosen" name="nip_dosen">
      	<!-- input field disini -->
       </div>

       <div class="form-group">
       <label for="status-penguji">Status</label>
       <input type="number" class="form-control" id="status-penguji" name="status_penguji" >
        
        <!-- input field disini -->
       </div>

       <button type="submit" class="btn btn-success">Tambah</button>
      	
      </form>	
      
      </div>
    
    </div>

   

    <div class="panel panel-info">
      <div class="panel-heading">List Dosen Penguji</div>
      <div class="panel-body">

      <table class="table table-hover">
      	<thead>
      		<tr>
      			<th>NIP</th>
      			<th>Kode Skripsi</th>
      			<th>Status Dosen Pembimbing</th>
      		</tr>

      		<tbody>
          
           @foreach ($dosen_penguji as $item)
                            <tr>
                                <!-- Task Name -->
                                <td class="table-text">
                                    <div>{{ $item->nip }}</div>
                                </td>

                                <td class="table-text">
                                <div>{{$item->id_skripsi}}</div>
                                    <!-- TODO: Delete Button -->
                                </td>

                                <td class="table-text">
                                  <div>{{$item->status}}</div>
                                </td>

                                <td>
                       
                              
                <form action="/monitoring-skripsi/hapus-dosen-penguji/{{$item->id}}" >

                {{ csrf_field() }}
                  

                  <button class="btn btn-danger">Delete</button>
                  
                </form>
                      </td>


                        <td>
                <form action="/monitoring-skripsi/edit-dosen-penguji/{{$item->id}}" >

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


</div>

</div>


</div>


@endsection