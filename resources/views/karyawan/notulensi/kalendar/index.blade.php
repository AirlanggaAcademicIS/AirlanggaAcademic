@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Kalender Dosen Rapat
@endsection

@section('contentheader_title')
Kalender Dosen Rapat
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
            <div class="box-body no-padding">
                  <!-- THE CALENDAR -->
                  <div id="calendar"></div>
                  </div>
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