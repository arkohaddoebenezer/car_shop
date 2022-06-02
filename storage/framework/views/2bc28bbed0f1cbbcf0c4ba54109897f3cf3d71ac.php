<!DOCTYPE html>
<html lang="en">


<?php echo $__env->make('includes.users.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<body class="body-wrapper">
    <?php echo $__env->make('includes.users.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php echo $__env->yieldContent('content'); ?>

    <!--============================
=            Footer            =
=============================-->

   <?php echo $__env->make('includes.users.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 
</body>
<?php echo $__env->make('includes.users.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</html>
<?php /**PATH E:\car_shop\resources\views/layouts/users.blade.php ENDPATH**/ ?>