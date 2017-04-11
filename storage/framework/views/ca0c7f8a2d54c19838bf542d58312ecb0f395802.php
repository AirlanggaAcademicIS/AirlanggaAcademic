<!-- REQUIRED JS SCRIPTS -->
<!-- REQUIRED JS SCRIPTS -->

  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>


<!-- JQuery and bootstrap are required by Laravel 5.3 in resources/assets/js/bootstrap.js-->
<!-- Laravel App -->
<script src="<?php echo e(asset('/js/app.js')); ?>" type="text/javascript"></script>
<script src="http://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="<?php echo e(asset('/js/jquery-ui.js')); ?>" type="text/javascript"></script>
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
<<<<<<< HEAD
 <script src="<?php echo e(asset('/js/jquery.slimscroll.js')); ?>" type="text/javascript"></script>
=======
<<<<<<< HEAD
 <script src="<?php echo e(asset('/js/jquery.slimscroll.js')); ?>" type="text/javascript"></script>
=======

>>>>>>> 4668687b9ccccae2aa564fd9b7756db090c998fe
>>>>>>> 77af1278244e14d96346cf660240e4319ac363e3
>>>>>>> e70533c973b5d483bf0cfa9919751e4a9bbb5ee5
>>>>>>> 811ff23a5082ee82c748905620869fcc9fb7e65f
<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->
<script>
    window.Laravel = <?php echo json_encode([
        'csrfToken' => csrf_token(),
    ]); ?>;
</script>
<?php echo $__env->yieldContent('code-footer'); ?>

