@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Fitur 
@endsection

@section('contentheader_title')
Detail Nilai
@endsection

@section('main-content')
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">          
            <div class="box-header">
            <h3 class="box-title">Rekayasa Perangkat Lunak</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div>
                  Dengan detail nilai sebagai berikut :
                </div>            
                <div>Nilai project     : 87</div>
                <div>Nilai UTS         : 65</div>
                <div>Nilai UAS         : 60</div>
                <div>Nilai softskill   : 88</div>
                </div>
              <div class="box-body">
                <li>SKS     : 3</li>
                <li>Nilai   : A</li>
              </div>        
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <a class="btn btn-md btn-info" href ="{{ url('krs-khs/khs') }}">Back</a>
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection

@section('code-footer')




@endsection