<!-- REQUIRED JS SCRIPTS -->
<!-- REQUIRED JS SCRIPTS -->

  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>


<!-- JQuery and bootstrap are required by Laravel 5.3 in resources/assets/js/bootstrap.js-->
<!-- Laravel App -->
<script src="{{ asset('/js/app.js') }}" type="text/javascript"></script>
<script src="{{ asset('/js/jquery.steps.js') }}" type="text/javascript"></script>
<script src="http://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="{{ asset('/js/jquery-ui.js') }}" type="text/javascript"></script>
 <script src="{{ asset('/js/jquery.slimscroll.js') }}" type="text/javascript"></script>
 
<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->
<script>
    window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
    ]) !!};
</script>
<script>
    $(document).ready(function() {
        function adjustIframeHeight() {
            var $body   = $('body'),
                $iframe = $body.data('iframe.fv');
            if ($iframe) {
                // Adjust the height of iframe
                $iframe.height($body.height());
            }
        }
    });

    $("#penelitian").steps({
                headerTag: "h2",
                bodyTag: "section",
              onFinished: function (event, currentIndex)
            {
                var form = $(this);

                // Submit form input

                form.submit();
            }           
    });

    </script>
@yield('code-footer')

