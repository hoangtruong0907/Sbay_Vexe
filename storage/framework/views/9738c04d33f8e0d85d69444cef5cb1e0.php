<!doctype html>
<!--
* Bootstrap Simple Admin Template
* Version: 2.1
* Author: Alexis Luna
* Website: https://github.com/alexis-luna/bootstrap-simple-admin-template
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SbayVeXe | <?php echo $__env->yieldContent("title", "Title page"); ?></title>
    <link href="<?php echo e(asset('vendor/fontawesome/css/fontawesome.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('vendor/fontawesome/css/solid.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('vendor/fontawesome/css/brands.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/master.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('vendor/flagiconcss/css/flag-icon.min.css')); ?>" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <?php echo $__env->make('admin.components.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div id="body" class="active">
            <!-- navbar navigation component -->
            <?php echo $__env->make("admin.components.header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- end of navbar navigation -->
            <?php echo $__env->yieldContent("contents", "contents"); ?>
            </div>
        </div>

        <script src="<?php echo e(asset('vendor/jquery/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(asset('vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
        <script src="<?php echo e(asset('vendor/chartsjs/Chart.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/dashboard-charts.js')); ?>"></script>
        <script src="<?php echo e(asset('js/script.js')); ?>"></script>
    </body>

    </html>
<?php /**PATH /Applications/sbayht copy 6/sbay_vexere/resources/views/admin/layouts/default.blade.php ENDPATH**/ ?>