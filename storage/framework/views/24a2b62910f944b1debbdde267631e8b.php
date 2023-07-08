<!DOCTYPE html>
<html lang="en">
    <?php echo $__env->make('theme.web.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <body>
        <div class="slide"> 
            <?php echo $__env->make('theme.web.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo e($slot); ?>

            </div>
            <?php echo $__env->make('theme.web.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <?php echo $__env->make('theme.web.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </body>
</html><?php /**PATH D:\laragon\www\CafeUpsize\resources\views/theme/web/main.blade.php ENDPATH**/ ?>