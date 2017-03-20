<!-- REQUIRED JS SCRIPTS -->

<!-- JQuery and bootstrap are required by Laravel 5.3 in resources/assets/js/bootstrap.js-->
<!-- Laravel App -->
<script src="{{ mix('/js/app.js') }}" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="{{ asset('/css/bootstrap-tagsinput.css') }}" rel="stylesheet">
<script type="text/javascript" src="{{ asset('/js/bootstrap-tagsinput.js') }}"></script>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance 
      user experience. Slimscroll is required when using thethe
      fixed layout. -->
<script>
    window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
    ]) !!};
</script>
