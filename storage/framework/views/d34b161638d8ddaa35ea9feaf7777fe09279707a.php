<?php $__env->startSection('content'); ?>
    <script>alert('welcome to dashboard\n')</script>
    <div class="well text-center">
        <h1>Dashboard</h1>
    </div>
    <div class="jumbotron  text-center">
    <h2>Welcome <?php echo e(Auth::user()->name); ?></h2>
    </div>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\XAMPP\htdocs\laravel\blog\resources\views/pages/dashboard.blade.php ENDPATH**/ ?>