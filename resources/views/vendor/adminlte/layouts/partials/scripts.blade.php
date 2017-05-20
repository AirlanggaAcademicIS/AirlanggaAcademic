<!-- REQUIRED JS SCRIPTS -->
<!-- REQUIRED JS SCRIPTS -->

<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
<!-- JQuery and bootstrap are required by Laravel 5.3 in resources/assets/js/bootstrap.js-->
<!-- Laravel App -->

<script src="{{asset('plugins/jquery.dataTables.js')}}" type="text/javascript"></script>
<script src="{{asset('plugins/dataTables.bootstrap.js')}}" type="text/javascript"></script>
<link href="{{ asset('/css/bootstrap-tagsinput.css') }}" rel="stylesheet">
<script type="text/javascript" src="{{ asset('/js/bootstrap-tagsinput.js') }}"></script>
<script src="{{ mix('/js/app.js') }}" type="text/javascript"></script>
<script>
    window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
    ]) !!};
</script>
@yield('code-footer')
