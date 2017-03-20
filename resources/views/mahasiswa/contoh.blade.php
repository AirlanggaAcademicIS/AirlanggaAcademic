@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Fitur 
@endsection

@section('contentheader_title')
Fitur
@endsection

@section('main-content')
<div class="col-md-3">

              <div id="external-events">
              	<div class="external-event ui-draggable ui-draggable-handle" style="background-color: rgb(0, 31, 63); border-color: rgb(0, 31, 63); color: rgb(255, 255, 255); position: relative;">wrgws</div>
              	<div class="external-event ui-draggable ui-draggable-handle" style="background-color: rgb(114, 175, 210); border-color: rgb(114, 175, 210); color: rgb(255, 255, 255); position: relative;">dg</div>
                <div class="external-event bg-green ui-draggable ui-draggable-handle" style="position: relative; z-index: auto; width: 230px; right: auto; height: 30px; bottom: auto; left: 0px; top: 0px;">Lunch</div>
                <div class="external-event bg-yellow ui-draggable ui-draggable-handle" style="position: relative;">Go home</div>
                <div class="external-event bg-aqua ui-draggable ui-draggable-handle" style="position: relative; z-index: auto; width: 230px; right: auto; height: 30px; bottom: auto; left: 0px; top: 0px;">Do homework</div>
                <div class="external-event bg-light-blue ui-draggable ui-draggable-handle" style="position: relative;">Work on UI design</div>
                <div class="external-event bg-red ui-draggable ui-draggable-handle" style="position: relative; z-index: auto; width: 230px; right: auto; height: 30px; bottom: auto; left: 0px; top: 0px;">Sleep tight</div>
              </div>

              <div class="input-group">
                <div class="input-group-btn">
                  <button id="add-new-event" type="button" class="btn btn-primary btn-flat">Add</button>
                </div>
                <!-- /btn-group -->
              </div>
 
        </div>

<script>
  $(function () {
  	$("#add-new-event").click(function (e) {
      e.preventDefault();
     
      //Create events
      var event = $("<div />");
      event.addClass("external-event");
      event.html(val);
      $('#external-events').prepend(event);
    });
  });
</script>

@endsection

@section('code-footer')




@endsection