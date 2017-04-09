@extends('adminlte::layouts.app')

@section('htmlheader_title')
 Edit Dosen Pembimbing
@endsection

@section('contentheader_title')
Edit Dosen Pembimbing
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

<div class="panel panel-primary">
      <div class="panel-heading">Edit Dosen Pembimbing</div>
      
      <div class="panel-body">

      
      
      <form action="/monsi/manipulate-dosbing" method="POST">

       {{ csrf_field() }}

       @foreach($dosbing as $item)


      <input type="hidden" value="{{$item->id}}" name="id"></input>

       @endforeach

       

       <div class="form-group">
       
       <label for="judul-skripsi">Judul Skripsi</label>
       
       <select class="form-control" id="judul-skripsi" name="judul_skripsi">
                  
                  @foreach ( $skripsi as $index => $item )
                  
                        @foreach($dosbing as $item2)
                         <option value="{{ $index+1 }}"{{ ( $index+1 == $item2->id_skripsi) ? ' selected' : '' }}>{{ $skripsi[$index] }}</option>
                        @endforeach

                  @endforeach


     
     
       </select>
       </div>

       <div class="form-group">
       <label for="nip-dosen">NIP</label>
      	<select class="form-control" id="nip-dosen" name="nip_dosen">


      		@foreach ( $nama_dosbing as $index => $item )

                        

                  
                        @foreach($dosbing as $item2)
                         <option value="{{$nip_dosbing[$index]}}"{{ ( $nip_dosbing[$index] == $item2->nip) ? ' selected' : '' }}>{{ $item }}</option>
                        @endforeach

                        $indeks++;

                  @endforeach
                 
      		<!-- <option value="214" selected="selected">Kenny</option>
                 


                  
      		<option value="215" >Robbi</option>
                  
                  
      		<option value="216" >Zafitra</option> -->
                  

      	</select>
       </div>

       <div class="form-group">
       <label for="status-pembimbing">Status</label>
       <select id="status-pembimbing" name="status_pembimbing" class="form-control">
       	
            
             @foreach ( $status_dosbing as $index => $item )
                  
                        @foreach($dosbing as $item2)
                         <option value="{{ $index+1 }}"{{ ( $index+1 == $item2->status) ? ' selected' : '' }}>{{ $item}}</option>
                        @endforeach

                  @endforeach

       	<!-- <option value="1">Dosen Pertama</option>
           

            
       	<option value="2">Dosen Kedua</option> -->
            

       </select>
       </div>

       <button type="submit" class="btn btn-primary">Edit</button>
      	
      </form>	
      
      </div>
    
    </div>

   

</div>

</div>


</div>



@endsection