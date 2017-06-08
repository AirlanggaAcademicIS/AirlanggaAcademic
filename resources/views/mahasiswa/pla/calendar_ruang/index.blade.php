@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Kalender Ruang
@endsection

@section('contentheader_title')
Kalender Ruang
@endsection

@section('main-content')
<!-- include summernote css/js-->
<div class="flash-message" style="margin-left: -16px;margin-right: -16px; margin-top: 13px;">
  @foreach (['danger', 'warning', 'success', 'info'] as $msg)
  @if(Session::has('alert-' . $msg))
<div class="alert alert-{{ $msg }}">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <p class="" style="border-radius: 0">{{ Session::get('alert-' . $msg) }}</p>
</div>
  {!!Session::forget('alert-' . $msg)!!}
  @endif
  @endforeach
</div>   
 
  <!-- fullCalendar 2.2.5-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.print.css" media="print">
                 <div class="box box-primary">
                 <form  method="post" action="{{url('mahasiswa/Kalender_Ruang/search')}}" enctype="multipart/form-data"  class="form-horizontal">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="row" style="padding:10px">
                <div class="col-sm-8">
                <div class="form-group-text-center" > 
    <label for="nip_id" class="col-sm-4 control-label">Search by Ruang :</label> 
    <div class="col-sm-8"> 
    <select class="form-control" name="id_ruang"> 
    <option>Pilih Ruang</option>
    @foreach($ruang as $i => $m)  
    <option 
    	@if($d_r==$m->id_ruang)
    	{{'selected'}}
    	@else
    	{{''}}
    	@endif
    value="{{$m->id_ruang}}">{{$m->nama_ruang}}</option> 
      @endforeach 
           </select> 
            </div> </div>
            </div>
            <div class="col-sm-4">
            <button type="submit" class="btn btn-primary btn-sm">
              Search
            </button>
            </div>

    </div>
    

        </form>
                  <!-- THE CALENDAR -->
                  <div id="calendar"></div>
                 
                  </div>
                
   
@endsection

@section('code-footer')

 <script>
      $(function () {

      

        /* initialize the calendar
         -----------------------------------------------------------------*/
        //Date for the calendar events (dummy data)
        var date = new Date();
        var d = date.getDate(),
                m = date.getMonth(),
                y = date.getFullYear();
        $('#calendar').fullCalendar({
          header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
          },
          buttonText: {
            today: 'today',
            month: 'month',
            week: 'week',
            day: 'day'
          },
          //Random default events
          events: [
          <?php for ($i=0; $i <count($array); $i++) { ?>
            {
              title: "<?php echo $array[$i]['title'].' : '.$array[$i]['ruang'];?>",
              start: new Date(y, m, d, <?php echo $array[$i]['hour'];?>, <?php echo $array[$i]['minute'];?>),
              end: new Date(y, m, d, <?php echo $array[$i]['h_end'];?>, <?php echo $array[$i]['m_end'];?>),
              backgroundColor: "#f56954", //red
              borderColor: "#f56954", //red
              dow : [<?php echo $array[$i]['hari'];?>],
              allDay: false
            
            },
            <?php } ?>
             <?php for ($i=0; $i <count($jadwal); $i++) { ?>
            {
              title: "<?php echo $jadwal[$i]['title'].' : '.$jadwal[$i]['ruang'];?>",
              start: new Date(y, <?php echo $jadwal[$i]['bln'];?> -1,  <?php echo $jadwal[$i]['tgl'];?> , <?php echo $jadwal[$i]['hour'];?>, <?php echo $jadwal[$i]['minute'];?>),
              end: new Date(y, <?php echo $jadwal[$i]['bln'];?> -1,  <?php echo $jadwal[$i]['tgl'];?> , <?php echo $jadwal[$i]['h_end'];?>, <?php echo $jadwal[$i]['m_end'];?>),
              backgroundColor: "#00a65a", //Success (green)
              borderColor: "#00a65a", //Success (green)
              allDay: false
            
            },
            <?php } ?>
          ],
        
        });
        
      });
    </script>
@endsection