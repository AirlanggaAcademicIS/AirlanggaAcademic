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
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">          
            <div class="box-header">
            <h3 class="box-title">Basis Data</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div>
               <div>
                  Dengan detail nilai sebagai berikut :
                </div>            
                <div>Nilai Tugas       : 96</div>
                <div>Nilai Kuis        : 55</div>
                <div>Nilai UTS         : 64</div>
                <div>Nilai UAS         : 45</div>
                <div>Nilai softskill   : 90</div>
                </div>
                <div class="box-body">
                  <div>
                    <tr>
                      <li>SKS     : 3</li>
                    </tr>
                    <tr>
                      <li>Nilai   : B</li>
                    </tr>
                  </div>        
                </div>
              </div>
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
  </div>

@endsection

@section('code-footer')




@endsection