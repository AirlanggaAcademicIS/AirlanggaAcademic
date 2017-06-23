<!-- <script src="<?php echo e(asset('/js/app.js')); ?>" type="text/javascript"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.1/bootstrap-table.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.1/locale/bootstrap-table-zh-CN.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<script src="<?php echo e(asset('/js/plugins/timepicker/bootstrap-timepicker.min.js')); ?>"></script>
<script src="http://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js" type="text/javascript"></script>
 -->  

<!-- Laravel App -->
<script src="<?php echo e(mix('/js/app.js')); ?>" type="text/javascript"></script>
<!-- <script src="<?php echo e(asset('/js/jquery-ui.js')); ?>" type="text/javascript"></script> -->
<script src="<?php echo e(asset('/js/slimscroll.js')); ?>" type="text/javascript"></script>

<link href="http://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
<script src="http://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
 <!-- Latest compiled and minified JavaScript -->
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.1/bootstrap-table.min.js"></script>

<!-- Latest compiled and minified Locales -->
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.1/locale/bootstrap-table-zh-CN.min.js"></script>
<script src="<?php echo e(asset('/js/jquery-ui.js')); ?>" type="text/javascript"></script>
<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script> -->
<script src="<?php echo e(asset('/js/plugins/timepicker/bootstrap-timepicker.min.js')); ?>"></script>


<!-- JQuery and bootstrap are required by Laravel 5.3 in resources/assets/js/bootstrap.js-->
<!-- Laravel App -->

<!-- <script src="<?php echo e(asset('plugins/jquery.dataTables.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('plugins/dataTables.bootstrap.js')); ?>" type="text/javascript"></script>
<link href="<?php echo e(asset('/css/bootstrap-tagsinput.css')); ?>" rel="stylesheet">
<script type="text/javascript" src="<?php echo e(asset('/js/bootstrap-tagsinput.js')); ?>"></script>
<script src="<?php echo e(asset('/js/jquery-ui.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('/js/jquery.slimscroll.js')); ?>" type="text/javascript"></script>
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.1/bootstrap-table.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.1/locale/bootstrap-table-zh-CN.min.js"></script>
<script src="<?php echo e(asset('/js/plugins/timepicker/bootstrap-timepicker.min.js')); ?>"></script>


<script src="http://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js" type="text/javascript"></script>
 -->
<script>
    window.Laravel = <?php echo json_encode([
        'csrfToken' => csrf_token(),
    ]); ?>;
</script>


<!-- fullCalendar 2.2.5 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.6/fullcalendar.min.js"></script>
<?php echo $__env->yieldContent('code-footer'); ?>