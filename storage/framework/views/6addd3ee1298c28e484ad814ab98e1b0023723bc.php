<?php $__env->startSection('content'); ?>
    <div class="jumbotron text-center">
        <h1>Statistics</h1>
        <div style="width:15%;">
     <?php echo $chartjs->render(); ?>

  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\XAMPP\htdocs\laravel\blog\resources\views/pages/stat.blade.php ENDPATH**/ ?>