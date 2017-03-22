<!-- REQUIRED JS SCRIPTS -->
<<<<<<< HEAD
<!-- REQUIRED JS SCRIPTS -->

  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- JQuery and bootstrap are required by Laravel 5.3 in resources/assets/js/bootstrap.js-->
<!-- Laravel App -->
<script src="<?php echo e(mix('/js/app.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('plugins/jquery.dataTables.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('plugins/dataTables.bootstrap.js')); ?>" type="text/javascript"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="<?php echo e(asset('/css/bootstrap-tagsinput.css')); ?>" rel="stylesheet">
<script type="text/javascript" src="<?php echo e(asset('/js/bootstrap-tagsinput.js')); ?>"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<script src="<?php echo e(mix('/js/app.js')); ?>" type="text/javascript"></script>
<!-- <script src="<?php echo e(asset('/plugins/jquery-2.2.3.min.js')); ?>" type="text/javascript"></script> -->
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
<script src="<?php echo e(asset('/plugins/bootstrap-datepicker.js')); ?>"></script>
<script src="<?php echo e(asset('/js/app.js')); ?>" type="text/javascript"></script>
<script src="http://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../plugins/datatables/dataTables.bootstrap.min.js"></script>



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
=======

<!-- JQuery and bootstrap are required by Laravel 5.3 in resources/assets/js/bootstrap.js-->
<!-- Laravel App -->
<script src="<?php echo e(mix('/js/app.js')); ?>" type="text/javascript"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->
>>>>>>> 9d403da96f72b1370cbb9ece263217f3d0d353fb
<script>
    window.Laravel = <?php echo json_encode([
        'csrfToken' => csrf_token(),
    ]); ?>;
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
<?php echo $__env->yieldContent('code-footer'); ?> 
=======
>>>>>>> 9d403da96f72b1370cbb9ece263217f3d0d353fb
