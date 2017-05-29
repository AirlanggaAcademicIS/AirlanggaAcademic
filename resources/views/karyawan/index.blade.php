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
            <div class="box-body no-padding">
                  <!-- THE CALENDAR -->
                  <div id="calendar"></div>
                  </div>
                  </div>
                
    
@endsection

@section('code-footer')
<script>
    var matchingDaysBetween = function (start, end, test) {
    var days = [];
    for (var day = moment(start); day.isBefore(end); day.add(1, 'd')) {
        if (test(day)) {
            days.push(moment(day)); // push a copy of day
        }
    }
    return days;
}
$('#calendar').fullCalendar({
    header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay'
    },
    eventSources: [{
        // Every sunday as a background event
        events: function (start, end, timezone, callback) {
            
            // Get the days
            var days = matchingDaysBetween(start, end, function (day) {
                return day.format('dddd') === 'Sunday'; //test function
            });
            
            // Map days to events
            callback(days.map(function (day) { 
                return {
                    start: moment(day).startOf('day'),
                    end: moment(day).endOf('day'),
                    title: "sunday",
                    rendering: 'background'
                };
            }));
        }
    }, {
        //Every tuesday noon to 2pm
        events: function (start, end, timezone, callback) {
            var days = matchingDaysBetween(start, end, function (day) {
                return day.format('dddd') === 'Monday'; //test function
            });
            callback(days.map(function (day) { // map days to events
                return {
                    start: moment(day).format('12:20 a'),
                    end: moment(day).hour(14),
                    title: "lunch",
                };
            }));
        }
    },{
        //Every tuesday noon to 2pm
        events: function (start, end, timezone, callback) {
            var days = matchingDaysBetween(start, end, function (day) {
                return day.format('dddd') === 'Sunday'; //test function
            });
            callback(days.map(function (day) { // map days to events
                return {
                    start: moment(day).hour(12),
                    end: moment(day).hour(14),
                    title: "lunch",
                };
            }));
        }
    }]
});
    </script>

@endsection