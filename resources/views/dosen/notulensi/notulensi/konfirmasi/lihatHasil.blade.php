@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection

@section('contentheader_title')
Lihat Hasil Rapat
@endsection

@section('main-content')
<div class="container-fluid spark-screen">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
                
                    @forelse($notulensi as $id_notulen)
                    <div class="form-group">
                      <label>Ruangan</label>
                      <input type="text" class="form-control" value="{{ $id_notulen->nama_ruang }}" readonly>
                    </div>

                    <div class="form-group">
                      <label>Nama Petugas</label>
                      <input type="text" class="form-control" value="{{ $id_notulen->nama_petugas }}" readonly>
                    </div>

                    <div class="form-group">
                      <label>Nama Ketua Rapat</label>
                      <input type="text" class="form-control" value="{{ $id_notulen->nama_dosen }}" readonly>
                    </div>

                    <div class="form-group">
                      <label>Nama Rapat</label>
                      <input type="text" class="form-control" value="{{ $id_notulen->nama_rapat }}" readonly>
                    </div>

                    <div class="form-group">
                      <label>Agenda Rapat</label>
                      <input type="text" class="form-control" value="{{ $id_notulen->agenda_rapat}}" readonly>
                    </div>

                   
                    <div class="form-group">
                      <label>Waktu Pelaksanaan</label>
                      <input type="text" class="form-control" value="{{ $id_notulen->waktu_pelaksanaan}}" readonly>
                    </div>

                    <div class="form-group"> 
                      <label for="hasil_pembahasan"class="col-sm-3 control-label">Hasil Pembahasan</label> 
                      <li> </li>
                      <textarea disabled class="form-control" rows="5" name="hasil_pembahasan" enable>{{$id_notulen->hasil_pembahasan}}</textarea> 
                    </div>

                    <div class="form-group">
                        <a href="{{ url('/notulensi/konfirmasi') }}" type="button" class="btn btn-primary pull-right">Kembali</a>
                    </div>
                    @empty

                    @endforelse
                  </form>
                </div>
                <!-- /.box-body -->
              </div>       
      </div>

             
@endsection