<!-- REQUIRED JS SCRIPTS -->
<!-- REQUIRED JS SCRIPTS -->

  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- JQuery and bootstrap are required by Laravel 5.3 in resources/assets/js/bootstrap.js-->
<!-- Laravel App -->
<script src="{{ mix('/js/app.js') }}" type="text/javascript"></script>
<<<<<<< HEAD
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
=======
<<<<<<< HEAD

<script src="{{asset('plugins/jquery.dataTables.js')}}" type="text/javascript"></script>
<script src="{{asset('plugins/dataTables.bootstrap.js')}}" type="text/javascript"></script>

=======
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="{{ asset('/css/bootstrap-tagsinput.css') }}" rel="stylesheet">
<script type="text/javascript" src="{{ asset('/js/bootstrap-tagsinput.js') }}"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<script src="{{ mix('/js/app.js') }}" type="text/javascript"></script>
>>>>>>> 9300dac77978c5b287756ac72a3aee7544989653
<!-- <script src="{{asset('/plugins/jquery-2.2.3.min.js')}}" type="text/javascript"></script> -->
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
<script src="{{asset('/plugins/bootstrap-datepicker.js')}}"></script>
<script src="{{ asset('/js/app.js') }}" type="text/javascript"></script>
<script src="http://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../plugins/datatables/dataTables.bootstrap.min.js"></script>


>>>>>>> a3c3e3b59215f3cd3255e10b8ab596151be1ebab

<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance 
      user experience. Slimscroll is required when using thethe
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
<<<<<<< HEAD
</script>
=======
<<<<<<< HEAD
</script>
=======
</script>
<<<<<<< HEAD

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
@yield('code-footer')

=======
@yield('code-footer')   
>>>>>>> 8862d013f7507c91c23a9472cbb9c55f0da908c1
>>>>>>> 9300dac77978c5b287756ac72a3aee7544989653
>>>>>>> a3c3e3b59215f3cd3255e10b8ab596151be1ebab
