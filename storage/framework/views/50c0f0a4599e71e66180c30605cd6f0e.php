<html lang="en" data-layout="vertical" data-layout-style="detached" data-sidebar="light" data-topbar="dark" data-sidebar-size="lg">
    <?php echo $__env->make('theme.app.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <body class="ltr app sidebar-mini">
        <div id="global-loader">
            <img src="<?php echo e(asset('admin-assets/images/loader.svg')); ?>" class="loader-img" alt="Loader">
        </div>
        <div class="page">
            <div class="page-main">
                <?php echo $__env->make('theme.app.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('theme.app.aside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo e($slot); ?>

            </div>
        </div>
        <a href="#top" id="back-to-top"><i class="fa fa-long-arrow-up"></i></a>
        <?php echo $__env->make('theme.app.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </body>
</html><?php /**PATH D:\laragon\www\CafeUpsize\resources\views/theme/app/main.blade.php ENDPATH**/ ?>