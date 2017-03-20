<!-- REQUIRED JS SCRIPTS -->

<!-- JQuery and bootstrap are required by Laravel 5.3 in resources/assets/js/bootstrap.js-->
<!-- Laravel App -->
<script src="{{ mix('/js/app.js') }}" type="text/javascript"></script>
<script src="{{asset('plugins/jquery.dataTables.js')}}" type="text/javascript"></script>
<script src="{{asset('plugins/dataTables.bootstrap.js')}}" type="text/javascript"></script>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->
<!-- <script>
	// $(function () {
	// 	alert("Haaa");
	// });
	window.alert("sometext");
</script> -->
<script>
    window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
    ]) !!};
</script>

<!-- <script>
	$(function () {
		$("#example2").DataTable();
	});
</script> -->

<script type="text/javascript">
	$(document).ready(function(){
		$('.#example2').DataTable({
			"ordering" : true
		});	
	});
</script>
