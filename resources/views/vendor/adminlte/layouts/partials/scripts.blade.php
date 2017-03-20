<!-- REQUIRED JS SCRIPTS -->
<!-- REQUIRED JS SCRIPTS -->

  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- JQuery and bootstrap are required by Laravel 5.3 in resources/assets/js/bootstrap.js-->
<!-- Laravel App -->
<<<<<<< HEAD
<script src="{{ mix('/js/app.js') }}" type="text/javascript"></script>
<!-- <script src="{{asset('/plugins/jquery-2.2.3.min.js')}}" type="text/javascript"></script> -->
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
<script src="{{asset('/plugins/bootstrap-datepicker.js')}}"></script>

=======
<script src="{{ asset('/js/app.js') }}" type="text/javascript"></script>
<script src="http://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js" type="text/javascript"></script>
>>>>>>> f76ef44133edc98680b91675bdcf9c8581009453

<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->
<script>
    window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
    ]) !!};
</script>
@yield('code-footer')